document.addEventListener('DOMContentLoaded', function () {
    const calendarEl = document.getElementById('calendar');
    if (calendarEl) {
        // Inicializar el calendario
        const calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            events: function (fetchInfo, successCallback, failureCallback) {
                // Realizar una solicitud AJAX para obtener las clases de la base de datos
                $.ajax({
                    url: '../CRUD/obtener_clases.php',
                    method: 'POST',
                    dataType: 'json', // Agregamos esta línea para indicar que esperamos datos JSON
                    success: function (response) {
                        // Verificar si la respuesta es un array
                        if (Array.isArray(response)) {
                            // Formatear los datos de las clases para que sean compatibles con FullCalendar.js
                            let eventos = response.map(function (clase) {
                                return {
                                    title: clase.Nombre,
                                    usuario: clase.ID_Usuario,
                                    id: clase.ID_Clase, // Agregar el ID de la clase aquí
                                    start: clase.Fecha + 'T' + clase.Horario,

                                };
                            });
                            // Llamar al callback de éxito con los eventos formateados
                            successCallback(eventos);
                        } else {
                            // Si la respuesta no es un array, mostrar un mensaje de error
                            console.error('La respuesta no es un array:', response);
                            failureCallback('La respuesta no es un array');
                        }
                    },
                    error: function (xhr, status, error) {
                        // Manejar errores si la solicitud AJAX falla
                        console.error('Error al obtener las clases:', error);
                        failureCallback(error);
                    }
                });
            },
            eventClick: function (info) {
                let horario = info.event.start;
                let claseId = info.event.id;

                if (confirm('¿Quieres inscribirte en esta clase el ' + horario + '?')) {
                    // Aquí puedes realizar una solicitud AJAX al servidor para registrar al usuario en la clase
                    $.ajax({
                        url: '../CRUD/reservarClase.php',
                        method: 'POST',
                        datatype: 'json',
                        data: { clase_id: claseId },
                        success: function (response) {
                            console.log('Respuesta del servidor:', response);
                            typeof response.success;
                            // Manejar la respuesta del servidor
                            if (response.success===true) {
                                swal({
                                    title: 'Inscripción exitosa',
                                    text: 'Te has inscrito en la clase correctamente.',
                                    icon: 'success'
                                });
                                // Actualizar el calendario si es necesario
                                calendar.refetchEvents();
                            } else {
                                swal({
                                    title: 'Inscripción fallida',
                                    text: 'No has podido inscribirte correctamente.',
                                    icon: 'error'
                                });
                            }
                        },
                        error: function (xhr, status, error) {
                            console.error('Error al inscribirse en la clase:', error);
                            alert('Error al inscribirse en la clase. Por favor, inténtalo de nuevo más tarde.');
                        }
                    });
                }
            }
        });
        // Renderizar el calendario
        calendar.render();
    }
});
