$(document).ready(function(){
    $(document).on('click', '#btnLogin', function (e) {
        e.preventDefault();

        // Obtener los datos del formulario
        let username = $('#nombreLogin').val();
        let password = $('#passLogin').val();

        // Realizar la solicitud AJAX
        $.ajax({
            type: "POST",
            url: "../CRUD/iniciarSesion.php", // Cambia la URL al archivo que maneja el inicio de sesión
            dataType: "json",
            data: {
                username: username,
                password: password
            },
            success: function(response){
                if (response.status === "success") {
                    // Verificar el tipo de usuario y redirigir según el tipo
                    switch (response.userType) {
                        case 'admin':
                            window.location.href = "../admin/inicioAdmin.php"; // Redireccionar a la página de admin
                            break;
                        case 'atleta':
                            window.location.href = "inicio.php"; // Redireccionar a la página de atleta
                            break;
                        case 'superadmin':
                            window.location.href = "../adminInmortal/panelAdministracion.php"; // Redireccionar a la página de superadmin
                            break;
                        default:
                            // Tipo de usuario no reconocido
                            swal({
                                title: "Tipo de usuario no reconocido!",
                                icon: "error",
                            });
                    }
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
