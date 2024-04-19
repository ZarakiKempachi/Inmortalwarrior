<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

// Verificar si se ha enviado el formulario de edición y procesar los datos
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['editar_box'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $localidad = $_POST['localidad'];
    $horario = $_POST['horario'];

    editarBox($id, $nombre, $telefono, $email, $localidad, $horario);
}

$boxes = obtenerBoxes();
?>

<!-- Formulario de edición -->
<form id="formulario-edicion" style="display: none;" method="post">
    <input type="hidden" id="edit-id" name="id">
    <div class="form-group">
        <label for="edit-nombre">Nombre:</label>
        <input type="text" class="form-control" id="edit-nombre" name="nombre">
    </div>
    <div class="form-group">
        <label for="edit-telefono">Teléfono:</label>
        <input type="text" class="form-control" id="edit-telefono" name="telefono">
    </div>
    <div class="form-group">
        <label for="edit-email">Email:</label>
        <input type="email" class="form-control" id="edit-email" name="email">
    </div>
    <div class="form-group">
        <label for="edit-localidad">Localidad:</label>
        <input type="text" class="form-control" id="edit-localidad" name="localidad">
    </div>
    <div class="form-group">
        <label for="edit-horario">Horario:</label>
        <input type="text" class="form-control" id="edit-horario" name="horario">
    </div>
    <button type="submit" class="btn btnGlobal" name="editar_box">Guardar cambios</button>
    <button type="button" class="btn btnGlobal cancelar-edicion">Cancelar</button>
</form>

<div class="container">
    <h2>Lista de Boxes</h2>
    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Localidad</th>
                <th>Horario</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($boxes as $box) { ?>
                <tr>
                    <td><?php echo $box['ID_Boxes']; ?></td>
                    <td><?php echo $box['Nombre']; ?></td>
                    <td><?php echo $box['Telefono']; ?></td>
                    <td><?php echo $box['Email']; ?></td>
                    <td><?php echo $box['Localidad']; ?></td>
                    <td><?php echo $box['Horario']; ?></td>
                    <td>
                        <button class="editarBox btn btn-primary" data-id="<?php echo $box['ID_Boxes']; ?>">Editar</button>
                        <button class="borrarBox btn btn-danger" data-id="<?php echo $box['ID_Boxes']; ?>">Borrar</button>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<!-- Script para manejar la edición de los boxes -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function() {
        $('.editarBox').click(function() {
            let id = $(this).data('id');
            let row = $(this).closest('tr');
            let nombre = row.find('td:nth-child(2)').text();
            let telefono = row.find('td:nth-child(3)').text();
            let email = row.find('td:nth-child(4)').text();
            let localidad = row.find('td:nth-child(5)').text();
            let horario = row.find('td:nth-child(6)').text();

            $('#edit-id').val(id);
            $('#edit-nombre').val(nombre);
            $('#edit-telefono').val(telefono);
            $('#edit-email').val(email);
            $('#edit-localidad').val(localidad);
            $('#edit-horario').val(horario);

            $('#formulario-edicion').show();
        });

        $('.borrarBox').click(function() {
            let id = $(this).data('id');
            
        });

        $('.cancelar-edicion').click(function() {
            $('#formulario-edicion').hide();
        });
    });
</script>

<?php
// Función para obtener los datos de los boxes desde la base de datos
function obtenerBoxes(){
    include 'conexion.php';
    $sql = "SELECT * FROM boxes WHERE Is_Solicitud = 0";
    $resultado = $conexion->query($sql);
    if (!$resultado) {
        die("Error en la consulta: " . $conexion->error);
    }
    $boxes = array();
    while ($fila = $resultado->fetch_assoc()) {
        $boxes[] = $fila;
    }

    // Cerrar la conexión a la base de datos
    $conexion->close();

    return $boxes;
}

// Función para editar un box en la base de datos
function editarBox($id, $nombre, $telefono, $email, $localidad, $horario){
    include 'conexion.php';
    $sql = "UPDATE boxes SET Nombre='$nombre', Telefono='$telefono', Email='$email', Localidad='$localidad', Horario='$horario' WHERE ID_Boxes='$id'";
    if ($conexion->query($sql) === TRUE) {
        echo "Los datos del box se han actualizado correctamente.";
    } else {
        echo "Error al actualizar los datos del box: " . $conexion->error;
    }
    // Cerrar la conexión a la base de datos
    $conexion->close();
}
?>
