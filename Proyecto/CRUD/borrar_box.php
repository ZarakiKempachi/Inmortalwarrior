<?php
if (isset($_POST['id_box'])) {
    include 'conexion.php';

    // Escapa el ID de box para evitar inyección de SQL
    $id_box = $conexion->real_escape_string($_POST['id_box']);

    // Query para eliminar el box basado en su ID
    $sql = "DELETE FROM boxes WHERE ID_Boxes = '$id_box'";

    // Ejecuta la consulta
    if ($conexion->query($sql) === TRUE) {
        // Si la eliminación fue exitosa, devuelve una respuesta JSON con éxito
        echo json_encode(array('success' => true, 'message' => 'Box eliminado correctamente'));
    } else {
        // Si ocurrió un error durante la eliminación, devuelve una respuesta JSON con error
        echo json_encode(array('success' => false, 'message' => 'Error al eliminar el box'));
    }

    // Cierra la conexión a la base de datos
    $conexion->close();
} else {
    // Si no se recibió un ID de box, devuelve una respuesta JSON con error
    echo json_encode(array('success' => false, 'message' => 'ID de box no proporcionado'));
}
?>