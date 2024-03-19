$(document).ready(function() {
    // Maneja el clic en el botón de borrarUsuario
    $(document).on('click', '#borrarUsuario', function() {
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


    // Manejar el clic para cambiar a Instructor
    $(document).on('click', '#cambiarInstructor', function() {
        let idUsuario = $(this).data('id');  // Obtiene el ID del usuario
        
        swal({
            title: "¿Estás seguro de que deseas cambiar a este usuario a Instructor?",
            icon: "warning",
            buttons: true,
            dangerMode: true
        }).then((willChange) => {
            if (willChange) {
                $.ajax({
                    url: '../CRUD/cambiarInstructor.php',
                    type: 'POST',
                    data: { id_usuario: idUsuario },
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            swal("Usuario cambiado a Instructor", response.message, "success");
                        } else {
                            swal("Error", response.message, "error");
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