$(document).ready(function(){
    $(document).on('click', '.crearClase', function (e) {
        e.preventDefault();
        let nombre = $('#nombreClase').val();
        let fecha = $('#fechaClase').val();
        let hora = $('#horaClase').val();
        let wod = $('#wodClase').val();
        
        $.ajax({
            type: 'POST',
            url: '../CRUD/crearClases.php',
            data: {Nombre: nombre, Fecha: fecha, Hora: hora, Wod: wod},
            success: function(response){
                
                swal({
                    title: "Clase creada",
                    text: "La clase ha sido creada con éxito.",
                    icon: "success"
                
                });
                $('#crearClaseForm')[0].reset();
            },
            error: function(xhr, status, error){
                swal({
                    title: "Error",
                    text: "Hubo un error al procesar la solicitud.",
                    icon: "error"
                });
            }
        });
    });
});

