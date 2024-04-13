$(document).ready(function() {
    $("#btn-guardar").click(function() {
        // Obtener los valores del formulario
        let tipo = $("#tipo-registro").val();
        let resultado = $("#resultado-registro").val();
        let formato = $("#formato-registro").val();

        // Enviar los datos mediante AJAX
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
                    // Si hubo un error, mostrar el mensaje de error
                    alert(response.message);
                }
            },
            error: function(xhr, status, error) {
                // Manejar el error si ocurre
                alert("Error al guardar los datos: " + error);
            }
        });
    });
});
