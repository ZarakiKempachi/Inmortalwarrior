$(document).ready(function(){
    $(document).on('click', '.crearClase', function (e) {
        e.preventDefault();
        let nombre = $('#nombreClase').val();
        let fecha = $('#fechaClase').val();
        let hora = $('#horaClase').val();
        
        $.ajax({
            type: 'POST',
            url: '../CRUD/crearClases.php',
            data: {Nombre: nombre, Fecha: fecha, Hora: hora},
            success: function(response){
                $('#mensaje').html(response);
            }
        });
    });
});