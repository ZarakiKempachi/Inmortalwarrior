$(document).ready(function() {
    // Delegación de eventos para el botón de editar
    $("#tbody-resultados").on("click", ".editarBox", function() {
        var fila = $(this).closest('tr');
        var id = fila.data('id');
        var resultado = fila.find('.resultado').text();
        swal({
            content: {
                element: "input",
                attributes: {
                    placeholder: "Introduce el nuevo resultado",
                    
                },
            },
        }).then(function(nuevoResultado) {
            // nuevoResultado contiene el valor ingresado por el usuario
            if (nuevoResultado !== null) {
                // Realizar una solicitud AJAX para actualizar el resultado en la base de datos
                $.ajax({
                    type: 'POST',
                    url: 'prsAdmin.php',
                    data: {
                        id: id,
                        nuevoResultado: nuevoResultado
                    },
                    success: function(response) {
                        // Actualizar el valor en la página después de que se haya actualizado en la base de datos
                        fila.find('.resultado').text(nuevoResultado);
                    },
                    error: function(xhr, status, error) {
                        // Manejar errores si ocurre alguno
                        console.error(xhr.responseText);
                    }
                });
            }
        });
    });

    // Evento submit del formulario para agregar nuevos registros
    $("#formulario-pr").submit(function(event) { 
        event.preventDefault();

        // Obtener los valores del formulario
        let tipo = $("#tipo-registro").val();
        let resultado = $("#resultado-registro").val();
        let formato = $("#formato-registro").val();

        // Validar los campos antes de enviarlos
        if (tipo === '' || resultado === '') {
            alert('Por favor, complete todos los campos antes de guardar.');
            return; 
        }

        $.ajax({
            type: "POST",
            url: "../CRUD/guardar_pr.php",
            data: {
                "tipo-registro": tipo,
                "resultado-registro": resultado,
                "formato-registro": formato
            },
            dataType: "json",
            success: function(response) {
                console.log(response); 
                if (response.success) {
                    // Si la operación fue exitosa, agregar los datos a la tabla
                    $("#tbody-resultados").append("<tr><td>" + response.data.tipo + "</td><td class='resultado'>" + response.data.resultado + "</td><td>" + response.data.formato + "</td><td><button class='editarBox btn btn-primary'>Editar</button></td></tr>");
                } else {
                    alert(response.message);
                }
            },
            error: function(xhr, status, error) {
                alert("Error al guardar los datos: " + error);
            }
        });
    });
});
