<?php
session_start();
include 'conexion.php';

// Verificar si se recibieron los parámetros esperados
if (isset($_POST['clase_id'])) {
    // Obtener el ID de la clase y el ID del usuario
    $claseId = $_POST['clase_id'];
    $usuarioId = $_SESSION['user_id'];

    // Consulta SQL para eliminar al usuario de la clase
    $sql = "DELETE FROM reservas WHERE ID_Clases = $claseId AND ID_Usuario = $usuarioId";

    // Ejecutar la consulta
    if (mysqli_query($conexion, $sql)) {
        // Si la eliminación fue exitosa, devolver una respuesta exitosa
        $response = array('success' => true, 'message' => 'El usuario fue eliminado de la clase correctamente.');
        echo json_encode($response);
    } else {
        // Si hubo un error en la consulta, devolver un mensaje de error
        $response = array('success' => false, 'message' => 'Error al eliminar al usuario de la clase: ' . mysqli_error($conexion));
        echo json_encode($response);
    }
} else {
    // Si no se recibieron los parámetros esperados, devolver un mensaje de error
    $response = array('success' => false, 'message' => 'No se recibieron todos los parámetros necesarios para realizar la acción.');
    echo json_encode($response);
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>
