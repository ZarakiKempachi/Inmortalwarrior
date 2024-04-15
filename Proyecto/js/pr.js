$(document).ready(function() {
    $("#formulario-pr").submit(function(event) { 
        event.preventDefault(); //

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
                console.log(response); // Mostrar la respuesta en la consola del navegador
                if (response.success) {
                    // Si la operación fue exitosa, agregar los datos a la tabla
                    $("#tbody-resultados").append("<tr><td>" + response.data.tipo + "</td><td>" + response.data.resultado + "</td><td>" + response.data.formato + "</td></tr>");
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
