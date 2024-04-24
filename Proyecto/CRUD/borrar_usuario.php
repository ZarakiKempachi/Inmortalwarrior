<?php
include 'conexion.php'; 


if (isset($_POST['id_usuario'])) {
    $idUsuario = $conexion->real_escape_string($_POST['id_usuario']);

    try {
        $sql = "DELETE FROM usuarios WHERE ID_Usuario = $idUsuario";
        if ($conexion->query($sql) === TRUE) {
            // Envía una respuesta exitosa
            $response = array("success" => true, "message" => "El usuario ha sido borrado exitosamente.");
        } else {
            
            $response = array("success" => false, "message" => "Error al borrar el usuario: " . $conexion->error);
        }
    } catch (Exception $e) {
        
        $response = array("success" => false, "message" => "Error: " . $e->getMessage());
    }
} else {
   
    $response = array("success" => false, "message" => "No se recibió el ID del usuario.");
}

$conexion->close();

// Devuelve la respuesta como JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
