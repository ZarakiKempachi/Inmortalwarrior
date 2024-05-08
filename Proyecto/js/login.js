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
                if (response.status === "success") {
                    // Verificar el tipo de usuario y redirigir según el tipo
                    switch (response.userType) {
                        case 'admin':
                            window.location.href = "../admin/inicioAdmin.php"; 
                            break;
                        case 'atleta':
                            window.location.href = "inicio.php"; 
                            break;
                        case 'instructor':
                            window.location.href = "../instructor/inicioInstructor.php"; 
                            break;
                        case 'superadmin':
                            window.location.href = "../adminInmortal/panelAdministracion.php"; 
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

    // Comprueba si la casilla de verificación está marcada y guarda la contraseña en localStorage
    $(document).ready(function() {
      $('#rememberPasswordCheck').change(function() {
        if ($(this).is(':checked')) {
          // Si la casilla está marcada, guarda la contraseña en localStorage
          localStorage.setItem('rememberedPassword', $('#passLogin').val());
        } else {
          // Si la casilla está desmarcada, elimina la contraseña guardada en localStorage
          localStorage.removeItem('rememberedPassword');
        }
      });

      // Restaura la contraseña si está guardada en localStorage al cargar la página
      let rememberedPassword = localStorage.getItem('rememberedPassword');
      if (rememberedPassword) {
        $('#passLogin').val(rememberedPassword);
        $('#rememberPasswordCheck').prop('checked', true);
      }
    });

