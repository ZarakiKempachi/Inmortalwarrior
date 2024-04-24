$(document).ready(function () {
   
    $(document).on('click', '#enviarCorreo', function (e) {
        e.preventDefault(); 
        
        let nombre= $('#nombre').val();
        let email = $('#email').val();
        let mensaje = $('#mensaje').val();
        
        
        $.ajax({
            type: "POST",
            url: "../../CRUD/enviar_formulario.php",
            data: {
                nombre: nombre,
                email: email,
                mensaje: mensaje,
                
            },
            success: function (response) {
                swal({
                    title: "Correo enviado correctamente!",
                    text: response,
                    icon: "success",
                });
                
                
                $('#nombre').val("");
                $('#email').val("");
                $('#mensaje').val("");
                
            },
            error: function (xhr, status, error) {
                swal({
                    title: "Error",
                    text: "An error occurred while submitting the form.",
                    icon: "error",
                });
            }
        });
    });
});