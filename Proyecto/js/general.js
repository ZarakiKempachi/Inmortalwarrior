$(document).ready(function() {
    $('#cambioContraseña').click(function(event) {
        // Evitar que el formulario se envíe de forma predeterminada
        event.preventDefault();

        // Obtener los valores del formulario
        let username = $('#username').val();
        
        
        let newPassword = $('#newPassword').val();
        let confirmPassword = $('#confirmPassword').val();

        // Enviar la solicitud AJAX
        $.ajax({
            type: 'POST',
            url: '../CRUD/cambio_contrasena.php',
            data:{
            username: username,
            newPassword: newPassword,
            confirmPassword: confirmPassword
        },
            dataType: 'json',
            encode: true
        })
        .done(function(data) {
            // Manejar la respuesta del servidor
            if (data.status === 'success') {
                // Contraseña cambiada exitosamente
                alert(data.message);
                // Redirigir a otra página o realizar alguna acción adicional si es necesario
            } else {
                // Mostrar un mensaje de error si falla el cambio de contraseña
                alert(data.message);
            }
        })
        .fail(function(data) {
            // Manejar errores de la solicitud AJAX
            console.error('Error al enviar la solicitud AJAX');
        });
    });
});
