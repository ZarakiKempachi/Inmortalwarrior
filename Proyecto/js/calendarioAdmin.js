document.addEventListener('DOMContentLoaded', function() {
    const calendarEl = document.getElementById('calendar');
    if (calendarEl) {
        // Inicializar el calendario
        const calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            events: function(fetchInfo, successCallback, failureCallback) {
                // Realizar una solicitud AJAX para obtener las clases de la base de datos
                $.ajax({
                    url: '../CRUD/obtener_clases.php',
                    method: 'POST',
                    dataType: 'json', // Agregamos esta línea para indicar que esperamos datos JSON
                    success: function(response) {
                        // Verificar si la respuesta es un array
                        if (Array.isArray(response)) {
                            // Formatear los datos de las clases para que sean compatibles con FullCalendar.js
                            let eventos = response.map(function(clase) {
                                return {
                                    title: clase.Nombre, 
                                    usuario: clase.ID_Usuario,
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
                    error: function(xhr, status, error) {
                        // Manejar errores si la solicitud AJAX falla
                        console.error('Error al obtener las clases:', error);
                        failureCallback(error);
                    }
                });
            },
            eventClick: function(info) {
                // Obtener el ID del instructor del evento
                let instructorId = info.event.extendedProps.instructor;

                // Aquí puedes implementar la lógica para permitir que el usuario se inscriba en la clase
                // Por ejemplo, puedes mostrar un cuadro de diálogo para confirmar la inscripción
                if (confirm('¿Quieres inscribirte en esta clase impartida por el instructor con ID ' + instructorId + '?')) {
                    // Aquí puedes realizar una solicitud AJAX al servidor para registrar al usuario en la clase
                    // ...
                }
            }
        });
        // Renderizar el calendario
        calendar.render();
    }
});
