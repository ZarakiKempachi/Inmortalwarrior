<?php
session_start();
include 'conexion.php';


if (isset($_POST['clase_id'])) {
    
    $claseId = $_POST['clase_id'];
    $usuarioId = $_SESSION['user_id'];

    
    $sql = "DELETE FROM reservas WHERE ID_Clases = $claseId AND ID_Usuario = $usuarioId";


    if (mysqli_query($conexion, $sql)) {
        // Si la eliminación fue exitosa, devolver una respuesta exitosa
        $response = array('success' => true, 'message' => 'El usuario fue eliminado de la clase correctamente.');
        echo json_encode($response);
    } else {
        
        $response = array('success' => false, 'message' => 'Error al eliminar al usuario de la clase: ' . mysqli_error($conexion));
        echo json_encode($response);
    }
} else {
    
    $response = array('success' => false, 'message' => 'No se recibieron todos los parámetros necesarios para realizar la acción.');
    echo json_encode($response);
}


mysqli_close($conexion);
?>
