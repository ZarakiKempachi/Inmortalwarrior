$(document).ready(function () {
    // Manejar el envío del formulario usando AJAX
    $(document).on('click', '#formularioRegistro', function (e) {
        e.preventDefault(); // Evitar que el formulario se envíe normalmente
        
        // Obtener los valores del formulario
        let nombreBox = $('#nombreBox').val();
        let dirBox = $('#dirBox').val();
        let localidadBox = $('#localidadBox').val();
        let emailBox = $('#emailBox').val();
        let tlfnBox = $('#tlfnBox').val();
        let descripcionBox = $('#descripcionBox').val();
        let horarioBox = $('#horarioBox').val();
        let firstname = $('#firstname').val();
        let lname1 = $('#lname1').val();
        let uname = $('#uname').val();
        let passAdmin = $('#passAdmin').val();

        console.log('alex');


        // Realizar la solicitud AJAX
        $.ajax({
            type: "POST",
            url: "../CRUD/registroBox.php",
            data: {
                nombreBox: nombreBox,
                dirBox: dirBox,
                localidadBox: localidadBox,
                emailBox: emailBox,
                tlfnBox: tlfnBox,
                descripcionBox: descripcionBox,
                horarioBox: horarioBox,
                firstname: firstname,
                lname1: lname1,
                uname: uname,
                passAdmin: passAdmin,
            },

            success: function (response) {
                swal({
                    title: "Box aceptado!",
                    text: response,
                    icon: "success",
                });
            },
            error: function (error) {
                // Manejar errores en la solicitud AJAX
                console.log(error.responseText);
                alert("Error en el registro");
            }
        });
    });
});