//Aceptar box
$(document).ready(function() {
    // Maneja el clic en el botón de aceptar
    $(document).on('click', '#aceptarBox', function(e) {
        e.preventDefault();
        
        let idBox = $(this).closest('form').find('input[name="id_box"]').val(); // Captura el ID del box desde el campo oculto
        let button = $(this);
        
        swal({
            title: '¿Estás seguro?',
            text: '¿Estás seguro de que deseas aceptar este box?',
            icon: 'warning',
            buttons: true,
            dangerMode: true
        }).then((willAccept) => {
            if (willAccept) {
                $.ajax({
                    url: '../CRUD/aceptar_box.php',
                    type: 'POST',
                    data: { id_box: idBox }, // Envía el ID del box al servidor
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            button.closest('tr').remove();
                            swal({
                                title: 'Box aceptado',
                                text: response.message,
                                icon: 'success'
                            });
                        } else {
                            swal({
                                title: 'Error',
                                text: response.message,
                                icon: 'error'
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        console.log(xhr.responseText); // Agrega esto para ver la respuesta del servidor
                        swal({
                            title: 'Error',
                            text: 'Hubo un error al procesar la solicitud',
                            icon: 'error'
                        });
                    }
                });
            }
        });
    });
});

//Denegar box
$(document).ready(function() {
   
    $(document).on('click', '#denegarBox', function(e) {
        e.preventDefault();
        
        let idBox = $(this).closest('form').find('input[name="id_box"]').val(); // Captura el ID del box desde el campo oculto
        console.log(idBox); 
        let button = $(this);
        swal({
            title: '¿Estás seguro?',
            text: '¿Estás seguro de que deseas denegar este box?',
            icon: 'warning',
            buttons: true,
            dangerMode: true
        }).then((willDeny) => {
            if (willDeny) {
                $.ajax({
                    url: '../CRUD/denegar_box.php',
                    type: 'POST',
                    data: { id_box: idBox }, // Envía el ID del box al servidor
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            button.closest('tr').remove();
                            swal({
                                title: 'Box denegado',
                                text: response.message,
                                icon: 'success'
                            });
                        } else {
                            swal({
                                title: 'Error',
                                text: response.message,
                                icon: 'error'
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        console.log(xhr.responseText); // Agrega esto para ver la respuesta del servidor
                        swal({
                            title: 'Error',
                            text: 'Hubo un error al procesar la solicitud',
                            icon: 'error'
                        });
                    }
                });
            }
        });
    });
});


//Borrar usuario
$(document).ready(function() {
    // Maneja el clic en el botón de borrarUsuario
    $(document).on('click', '.borrarUsuario', function() {
        let idUsuario = $(this).data('id');  // Obtiene el ID del usuario
        let row = $(this).closest('tr');  // Obtiene la fila de la tabla
        
        swal({
            title: "¿Estás seguro de que deseas borrar este usuario?",
            icon: "warning",
            buttons: true,
            dangerMode: true
        }).then((willDelete) => {
            if (willDelete) {
                
                $.ajax({
                    url: '../CRUD/borrar_usuario.php',
                    type: 'POST',
                    data: { id_usuario: idUsuario },
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            row.remove();  // Elimina la fila de la tabla visible en la página
                            swal({
                                title: "Usuario eliminado",
                                text: response.message,
                                icon: "success"
                            }); // Muestra mensaje de éxito
                        } else {
                            swal({
                                title: "El usuario no ha podido ser eliminado",
                                text: response.message,
                                icon: "warning"
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        console.log(xhr.responseText); // Muestra mensaje de error en la consola
                        alert('Error: ' + error); // Muestra mensaje de error
                    }
                });
            }
        });
    });
});



//Borrar box
$(document).ready(function() {
    // Maneja el clic en el botón de borrarBox
    $(document).on('click', '.borrarBox', function(e) {
        e.preventDefault();
        
        let idBox = $(this).data('id'); // Obtiene el ID del box
        let button = $(this); // Almacena una referencia al botón clicado
        
        swal({
            title: '¿Estás seguro?',
            text: '¿Estás seguro de que deseas borrar este box?',
            icon: 'warning',
            buttons: true,
            dangerMode: true
        }).then((willDelete) => {
            if (willDelete) {
                // Envía una solicitud AJAX al servidor para eliminar el box
                $.ajax({
                    url: '../CRUD/borrar_box.php',
                    type: 'POST',
                    data: { id_box: idBox },
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            button.closest('tr').remove();
                            swal({
                                title: 'Box eliminado',
                                text: response.message,
                                icon: 'success'
                            });
                        } else {
                            swal({
                                title: 'Error',
                                text: response.message,
                                icon: 'error'
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        console.log(xhr.responseText); // Muestra mensaje de error en la consola
                        swal({
                            title: 'Error',
                            text: 'Hubo un error al procesar la solicitud',
                            icon: 'error'
                        });
                    }
                });
            }
        });
    });
});


