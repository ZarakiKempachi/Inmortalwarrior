<?php
include 'conexion.php';

// Verificar si se recibió el ID de la clase a eliminar
if (isset($_POST['claseId'])) {
    $claseId = $_POST['claseId'];

    // Preparar y ejecutar la consulta para eliminar la clase
    $sql = "DELETE FROM clases WHERE ID_Clases = $claseId";
    if ($conexion->query($sql) === TRUE) {
        // Si la eliminación fue exitosa, enviar una respuesta con éxito al cliente
        echo json_encode(array('success' => true));
    } else {
        // Si ocurrió un error durante la eliminación, enviar un mensaje de error al cliente
        echo json_encode(array('success' => false, 'message' => 'Error al eliminar la clase'));
    }
} else {
    // Si no se recibió el ID de la clase a eliminar, enviar un mensaje de error al cliente
    echo json_encode(array('success' => false, 'message' => 'ID de clase no recibido'));
}

// Cerrar la conexión a la base de datos
$conexion->close();
?>
