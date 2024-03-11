$(document).ready(function(){
    $(document).on('click', '#btnLogin', function (e) {
        e.preventDefault();
        e.preventDefault();

        // Obtener los datos del formulario
        let email = $('#floatingInput').val();
        let password = $('#floatingPassword').val();

        // Realizar la solicitud AJAX
        $.ajax({
            type: "POST",
            url: "../CRUD/iniciarSesion.php", 
            data: {
                email: email,
                password: password
            },
            success: function(response){
                if (response === "success") {
                    // Redirigir o realizar acciones necesarias después del inicio de sesión exitoso
                    alert("Inicio de sesión exitoso");
                } else {
                    // Mostrar mensaje de error
                    alert("Error en el inicio de sesión: " + response);
                }
            },
            error: function(error){
                console.log(error.responseText);
                alert("Error en el inicio de sesión");
            }
        });
    });
});