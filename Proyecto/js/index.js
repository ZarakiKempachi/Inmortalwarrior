//Registro de box
$(document).ready(function () {
    // Handle form submission using AJAX
    $(document).on('click', '#formularioRegistro', function (e) {
        e.preventDefault(); // Prevent the form from submitting normally
        
        // Get the values from the form
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
        
        // Make an AJAX request
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
                    title: "Box accepted!",
                    text: response,
                    icon: "success",
                });
                
                // Clear the form fields
                $('#nombreBox').val("");
                $('#dirBox').val("");
                $('#localidadBox').val("");
                $('#emailBox').val("");
                $('#tlfnBox').val("");
                $('#descripcionBox').val("");
                $('#horarioBox').val("");
                $('#firstname').val("");
                $('#lname1').val("");
                $('#uname').val("");
                $('#passAdmin').val("");
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


//Registro alumnos
$(document).ready(function () {
    // Manejar el envío del formulario usando AJAX
    $(document).on('click', '#formularioRegistroAlumnos', function (e) {
        e.preventDefault();
        // Obtener los valores del formulario
        let firstname = $('#fname').val();
        let lname = $('#lname').val();
        let uname = $('#username').val();
        let emailAlumno = $('#emailAlumno').val();
        let passAdmin = $('#password').val();
    
    // Realizar la solicitud AJAX
    $.ajax({
        type: "POST",
        url: "../CRUD/registroAlumno.php",
        data: {
            firstname: firstname,
            lname: lname,
            uname: uname,
            emailAlumno: emailAlumno,
            passAdmin: passAdmin,
        },
        success: function (response) {
            swal({
                title: "Usuario aceptado!",
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

    $("#ciudades").change(function () {
        let boxSeleccionado = $("#ciudades").val();
        $.ajax({
          url: "../back/CRUD/boxes.php",
          type: "POST",
          data: { box: boxSeleccionado },
          success: function (respuesta) {
            let response =
              "<option selected>Selecciona tu Box</option>" + respuesta;
            $("#clases").html(response);
          },
        });
      });
}); 