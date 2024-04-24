// Definir la función fuera del bloque de configuración del calendario
function mostrarSwalInscripcion(calendar, claseId, formattedHorario) {
    swal({
        title: '¿Quieres inscribirte en esta clase?',
        text: 'El horario de la clase es: ' + formattedHorario,
        icon: 'info',
        buttons: {
            cancel: 'Cancelar',
            confirm: 'Inscribirse'
        }
    }).then((willInscribe) => {
        if (willInscribe) {
            
            $.ajax({
                url: '../CRUD/reservarClase.php',
                method: 'POST',
                dataType: 'json',
                data: { clase_id: claseId },
                success: function (response) {
                    console.log('Respuesta del servidor:', response);
                    // Manejar la respuesta del servidor
                    if (response.success === true) {
                        swal({
                            title: 'Inscripción exitosa',
                            text: 'Te has inscrito en la clase correctamente.',
                            icon: 'success'
                        });
                        // Actualizar el calendario si es necesario
                        calendar.refetchEvents();
                    } else {
                        swal({
                            title: 'Error',
                            text: response.message,
                            icon: 'error'
                        });
                    }
                },
                error: function (xhr, status, error) {
                    console.error('Error al inscribirse en la clase:', error);
                    swal({
                        title: 'Error',
                        text: 'Error al inscribirse en la clase. Por favor, inténtalo de nuevo más tarde.',
                        icon: 'error'
                    });
                }
            });
        } else {
            console.log('No inscrito');
            
        }
    });
}

document.addEventListener('DOMContentLoaded', function () {
    const calendarEl = document.getElementById('calendar');
    if (calendarEl) {
        // Inicializar el calendario
        const calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'timeGridWeek',
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
                                    title: clase.Nombre + ' - ' + clase.NombreInstructor,
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
                let formattedHorario = horario.toLocaleString(undefined, {
                    weekday: 'long', 
                    month: 'long',   
                    day: 'numeric',  
                    hour: 'numeric', 
                    minute: 'numeric'
                });

                
                $.ajax({
                    url: '../CRUD/verificarInscripcion.php',
                    method: 'POST',
                    dataType: 'json',
                    data: { clase_id: claseId },
                    success: function (response) {
                        console.log('Respuesta del servidor:', response);
                        // Manejar la respuesta del servidor
                        if (response.success === true) {
                            if (response.inscrito === true) {
                                console.log('Ya estás inscrito en esta clase');
                                // Mostrar el swal con la lista de usuarios inscritos y la opción de borrarse
                                mostrarListaUsuariosInscritos(calendar, claseId, formattedHorario);
                            } else {
                                console.log('Puedes inscribirte en esta clase');
                                // Antes de mostrar el swal para inscribirse, obtener la lista de usuarios inscritos
                                $.ajax({
                                    url: '../CRUD/obtenerUsuariosInscritos.php',
                                    method: 'POST',
                                    dataType: 'json',
                                    data: { clase_id: claseId },
                                    success: function (response) {
                                        // Verificar si se recibió la lista de usuarios inscritos correctamente
                                        if (response.success === true) {
                                            // Formatear la lista de usuarios inscritos
                                            let usersList = "Usuarios inscritos:\n";
                                            response.usuarios.forEach(function (usuario) {
                                                usersList += "- " + usuario + "\n";
                                            });

                                            
                                            swal({
                                                title: 'Usuarios inscritos',
                                                text: usersList,
                                                icon: 'info'
                                            }).then(function () {
                                                // Después de que el usuario cierre la ventana emergente, mostrar el swal para inscribirse en la clase
                                                mostrarSwalInscripcion(calendar, claseId, formattedHorario);
                                            });
                                        } else {
                                            // Manejar el caso en que no se pueda obtener la lista de usuarios inscritos
                                            mostrarSwalInscripcion(calendar, claseId, formattedHorario);
                                        }
                                    },
                                    error: function (xhr, status, error) {
                                        
                                        swal({
                                            title: 'Error',
                                            text: 'Error al obtener la lista de usuarios inscritos en la clase. Por favor, inténtalo de nuevo más tarde.',
                                            icon: 'error'
                                        });
                                    }
                                });
                            }
                        } else {
                            swal({
                                title: 'Error',
                                text: 'Error al verificar la inscripción: ' + response.message,
                                icon: 'error'
                            });
                        }
                    },
                    error: function (xhr, status, error) {
                        console.error('Error al verificar la inscripción:', error);
                        swal({
                            title: 'Error',
                            text: 'Error al verificar la inscripción. Por favor, inténtalo de nuevo más tarde.',
                            icon: 'error'
                        });
                    }
                });
            },
            minTime: '06:00:00', // Establecer la hora mínima a las 6 de la mañana
            maxTime: '23:00:00', // Establecer la hora máxima a las 23:00 (11 PM)
            
            eventContent: function(arg) {
                return {
                    html: '<div class="fc-content">' +
                                '<span class="fc-time">' + arg.event.start.toLocaleTimeString('es-ES', {hour: '2-digit', minute: '2-digit'}) + '</span>' +
                                '<span class="fc-title">' + arg.event.title + '</span>' +
                            '</div>'
                };
            }
        });
        // Renderizar el calendario
        calendar.render();
    }
});

// Función para mostrar la lista de usuarios inscritos con la opción de borrarse
function mostrarListaUsuariosInscritos(calendar, claseId, formattedHorario) {
    // Realizar una solicitud AJAX para obtener la lista de usuarios inscritos
    $.ajax({
        url: '../CRUD/obtenerUsuariosInscritos.php',
        method: 'POST',
        dataType: 'json',
        data: { clase_id: claseId },
        success: function (response) {
            // Verificar si se recibió la lista de usuarios inscritos correctamente
            if (response.success === true) {
                // Formatear la lista de usuarios inscritos
                let usersList = "Usuarios inscritos:\n";
                response.usuarios.forEach(function (usuario) {
                    usersList += "- " + usuario + "\n";
                });

                // Mostrar la lista de usuarios inscritos en una ventana emergente con la opción de borrarse
                swal({
                    title: 'Usuarios inscritos',
                    text: usersList,
                    icon: 'info',
                    buttons: {
                        cancel: 'Cancelar',
                        eliminar: 'Borrarse'
                    }
                }).then((willDelete) => {
                    if (willDelete) {
                        
                        $.ajax({
                            url: '../CRUD/borrar_usuario_clase.php',
                            method: 'POST',
                            dataType: 'json',
                            data: { clase_id: claseId },
                            success: function (response) {
                                console.log('Respuesta del servidor:', response);
                                // Manejar la respuesta del servidor
                                if (response.success === true) {
                                    swal({
                                        title: 'Borrado exitoso',
                                        text: 'Te has borrado de la clase correctamente.',
                                        icon: 'success'
                                    });
                                    // Actualizar el calendario si es necesario
                                    calendar.refetchEvents();
                                } else {
                                    swal({
                                        title: 'Error',
                                        text: response.message,
                                        icon: 'error'
                                    });
                                }
                            },
                            error: function (xhr, status, error) {
                                console.error('Error al borrarse de la clase:', error);
                                swal({
                                    title: 'Error',
                                    text: 'Error al borrarse de la clase. Por favor, inténtalo de nuevo más tarde.',
                                    icon: 'error'
                                });
                            }
                        });
                    }
                });
            } else {
                // Manejar el caso en que no se pueda obtener la lista de usuarios inscritos
                swal({
                    title: 'Error',
                    text: 'No se pudo obtener la lista de usuarios inscritos en la clase.',
                    icon: 'error'
                });
            }
        },
        error: function (xhr, status, error) {
            // Manejar errores de la solicitud AJAX
            swal({
                title: 'Error',
                text: 'Error al obtener la lista de usuarios inscritos en la clase. Por favor, inténtalo de nuevo más tarde.',
                icon: 'error'
            });
        }
    });
}

