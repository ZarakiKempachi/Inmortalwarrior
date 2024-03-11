$(document).ready(function(){
    $(document).on('click', '#btnLogin', function (e) {
        e.preventDefault();

        // Obtener los datos del formulario
        let username = $('#nombreLogin').val();
        let password = $('#passLogin').val();

        // Realizar la solicitud AJAX
        $.ajax({
            type: "POST",
            url: "../CRUD/iniciarSesion.php", 
            dataType: "json",
            data: {
                username: username,
                password: password
            },
            success: function(response){
                if (response === "success") {
                    // Redirigir o realizar acciones necesarias después del inicio de sesión exitoso
                    swal({
                        title: "Box accepted!",
                        text: response,
                        icon: "success",
                    });
                    window.location.href = "inicio.php";
                } else {
                    // Mostrar mensaje de error
                    swal({
                        title: "Contraseña incorrecta!",                        
                        icon: "warning",
                    });
                }
            },
            error: function(error){
                console.log(error.responseText);
                alert("Error en el inicio de sesión");
            }
        });
    });
});