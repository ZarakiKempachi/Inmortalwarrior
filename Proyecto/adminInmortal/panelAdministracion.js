//Aceptar box
$(document).ready(function() {
    // Maneja el clic en el botón de aceptar
    $(document).on('click', '#aceptarBox', function(e) {
        e.preventDefault();
        
        let idBox = $(this).closest('form').find('input[name="id_box"]').val(); // Captura el ID del box desde el campo oculto
        console.log(idBox); // Verifica que se haya capturado correctamente
        
        // Envía una solicitud AJAX al servidor
        $.ajax({
            url: '../CRUD/aceptar_box.php',
            type: 'POST',
            data: { id_box: idBox }, // Envía el ID del box al servidor
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    $(this).closest('tr').remove();
                    alert(response.message); // Muestra mensaje de éxito
                    // Actualiza la interfaz de usuario si es necesario
                } else {
                    alert(response.message); // Muestra mensaje de error
                }
            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText); // Agrega esto para ver la respuesta del servidor
                alert('Error: ' + error); // Muestra mensaje de error de AJAX
            }
        });
    });
});
//Denegar box
$(document).ready(function() {
    // Maneja el clic en el botón de denegarBox
    $(document).on('click', '#denegarBox', function(e) {
        e.preventDefault();
        
        let idBox = $(this).closest('form').find('input[name="id_box"]').val(); // Captura el ID del box desde el campo oculto
        console.log(idBox); // Verifica que se haya capturado correctamente
        
        // Envía una solicitud AJAX al servidor
        $.ajax({
            url: '../CRUD/denegar_box.php',
            type: 'POST',
            data: { id_box: idBox }, // Envía el ID del box al servidor
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    $(this).closest('tr').remove();
                    alert(response.message); // Muestra mensaje de éxito
                    // Actualiza la interfaz de usuario si es necesario
                } else {
                    alert(response.message); // Muestra mensaje de error
                }
            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText); // Agrega esto para ver la respuesta del servidor
                alert('Error: ' + error); // Muestra mensaje de error de AJAX
            }
        });
    });
});

//Borrar usuario
$(document).ready(function() {
    // Maneja el clic en el botón de borrarUsuario
    $(document).on('click', '.borrarUsuario', function() {
        let idUsuario = $(this).data('id');  // Obtiene el ID del usuario
        if (confirm('¿Estás seguro de que deseas borrar este usuario?')) {
            // Envía una solicitud AJAX al servidor para eliminar el usuario
            $.ajax({
                url: '../CRUD/borrar_usuario.php',
                type: 'POST',
                data: { id_usuario: idUsuario },
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        // Elimina la fila de la tabla en la interfaz de usuario
                        $(this).closest('tr').remove();
                        alert(response.message); // Muestra mensaje de éxito
                    } else {
                        alert(response.message); // Muestra mensaje de error
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
