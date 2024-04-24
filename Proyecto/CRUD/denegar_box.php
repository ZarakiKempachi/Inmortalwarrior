<?php
include 'conexion.php';

// Verifica si se ha enviado el formulario para denegar un box
if (isset($_POST['id_box'])) {
    // Obtiene el ID del box desde el formulario
    $idBox = $_POST['id_box'];

    try {
       
        $sql = "DELETE FROM boxes WHERE ID_Boxes = $idBox";
        if ($conexion->query($sql) === TRUE) {
           
            $response = array("success" => true, "message" => "El box ha sido denegado exitosamente.");
        } else {
            
            $response = array("success" => false, "message" => "Error al denegar el box: " . $conexion->error);
        }
    } catch (Exception $e) {
        
        $response = array("success" => false, "message" => "Error: " . $e->getMessage());
    }
} else {
   
    $response = array("success" => false, "message" => "No se recibió el ID del box.");
}


$conexion->close();

// Devuelve la respuesta como JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
