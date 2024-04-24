<?php
include 'conexion.php'; 


if (isset($_POST['id_box'])) {
    // Obtiene el ID del box desde el formulario
    $idBox = $_POST['id_box'];

    try {
        
        $sql = "UPDATE boxes SET Is_Solicitud = 0 WHERE ID_Boxes = $idBox";
        if ($conexion->query($sql) === TRUE) {
            
            $response = array("success" => true, "message" => "El box ha sido aceptado exitosamente.");
        } else {
            
            $response = array("success" => false, "message" => "Error al aceptar el box: " . $conexion->error);
        }
    } catch (Exception $e) {
       
        $response = array("success" => false, "message" => "Error: " . $e->getMessage());
    }
} else {
    // Envía una respuesta de error si no se recibió el ID del box
    $response = array("success" => false, "message" => "No se recibió el ID del box.");
}


$conexion->close();

// Devuelve la respuesta como JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
