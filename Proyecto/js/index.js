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
                // Check if the response contains an error message
                if (response.includes("El nombre del box ya está en uso")) {
                    swal({
                        title: "Información",
                        text: response,
                        icon: "info",
                    });
                } else if (response.includes("El correo electrónico ya está en uso")) {
                    swal({
                        title: "Información",
                        text: response,
                        icon: "info",
                    });
                } else if (response.includes("El nombre de usuario del administrador ya está en uso")) {
                    swal({
                        title: "Información",
                        text: response,
                        icon: "info",
                    });
                } else {
                    swal({
                        title: "Solicitud enviada!",
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
                }
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





$(document).ready(function () {
    // Manejar el envío del formulario usando AJAX
    $(document).on('click', '#formularioRegistroAlumnos', function (e) {
        e.preventDefault();
        // Obtener los valores del formulario
        let firstname = $('#fname').val().trim();
        let lname = $('#lname').val().trim();
        let uname = $('#username').val().trim();
        let emailAlumno = $('#emailAlumno').val().trim();
        let passAdmin = $('#password').val().trim();
        let idBox = $('#boxes').val().trim();

        // Validar que todos los campos estén completos
        if (firstname === "" || lname === "" || uname === "" || emailAlumno === "" || passAdmin === "" || idBox === "") {
            swal({
                title: "Campos incompletos!",
                text: "Por favor, complete todos los campos.",
                icon: "warning",
            });
            return; // Evitar que se ejecute el resto del código si hay campos vacíos
        }

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
                idBox: idBox
            },
            success: function (response) {
                if (response.includes("Usuario registrado")) {
                    swal({
                        title: "Usuario aceptado!",
                        text: response,
                        icon: "success",
                    });
                    $('#fname').val("");
                    $('#lname').val("");
                    $('#username').val("");
                    $('#emailAlumno').val("");
                    $('#password').val("");
                    $('#boxes').val("");
                } else {
                    // Mostrar SweetAlert de advertencia si el usuario ya existe
                    swal({
                        title: "Usuario existente!",
                        text: "El usuario ya existe, por favor, elija otro nombre de usuario",
                        icon: "warning",
                    });
                }
            },
            error: function (error) {
                // Manejar errores en la solicitud AJAX
                console.log(error.responseText);
                alert("Error en el registro");
            }

        });
    });
});


    $(document).ready(function(){
        // Manejar el evento de cambio en el primer select (ciudades)
        $("#ciudades").change(function(){
            let ciudadSeleccionada = $(this).val();
            
            // Realizar una solicitud AJAX para obtener las cajas de la ciudad seleccionada
            $.ajax({
                type: "POST",  // Puedes ajustar esto según tu necesidad
                url: "../CRUD/boxes.php",  // Ajusta la URL según tu estructura
                data: { ciudad: ciudadSeleccionada },
                success: function(response){
                    // Limpiar y agregar las nuevas opciones al segundo select (boxes)
                    $("#boxes").empty().append(response);
                },
                error: function(xhr, status, error) {
                    console.error("Error en la solicitud AJAX:", status, error);
                }
            });
        });
    });
//Registro del superadmin
    // $(document).ready(function () {
    //     // Manejar el envío del formulario usando AJAX
    //     $(document).on('click', '#formulariosuperAdmin', function (e) {
    //         e.preventDefault();
    //         // Obtener los valores del formulario
    //         let uname = $('#superadminUsername').val();
    //         let passAdmin = $('#superadminPassword').val();
    
    //         // Realizar la solicitud AJAX
    //         $.ajax({
    //             type: "POST",
    //             url: "../CRUD/registroSuperadmin.php",
    //             data: {
    //                 uname: uname,
    //                 passAdmin: passAdmin
    //             },
    //             success: function (response) {
    //                 if (response.includes("Superadmin registrado")) {
    //                     swal({
    //                         title: "Superadmin aceptado!",
    //                         text: response,
    //                         icon: "success",
    //                     });
    //                     $('#superadminUsername').val("");
    //                     $('#superadminPassword').val("");
    //                 } else {
    //                     // Mostrar SweetAlert de advertencia si el superadmin ya existe
    //                     swal({
    //                         title: "Superadmin existente!",
    //                         text: "El superadmin ya existe, por favor, elija otro nombre de usuario",
    //                         icon: "warning",
    //                     });
    //                 }
    //             },
    //             error: function (error) {
    //                 // Manejar errores en la solicitud AJAX
    //                 console.log(error.responseText);
    //                 alert("Error en el registro del superadmin");
    //             }
    //         });
    //     });
    // });
    
