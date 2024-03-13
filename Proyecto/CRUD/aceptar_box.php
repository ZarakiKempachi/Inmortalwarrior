<?php
include 'conexion.php'; // Incluye el archivo de conexión a la base de datos

// Verifica si se ha enviado el formulario para aceptar un box
if (isset($_POST['id_box'])) {
    // Obtiene el ID del box desde el formulario
    $idBox = $_POST['id_box'];

    try {
        // Ejecuta una sentencia SQL UPDATE para cambiar Is_Solicitud a 0 (false)
        $sql = "UPDATE boxes SET Is_Solicitud = 0 WHERE ID_Boxes = $idBox";
        if ($conexion->query($sql) === TRUE) {
            // Envía una respuesta exitosa
            $response = array("success" => true, "message" => "El box ha sido aceptado exitosamente.");
        } else {
            // Envía una respuesta de error
            $response = array("success" => false, "message" => "Error al aceptar el box: " . $conexion->error);
        }
    } catch (Exception $e) {
        // Envía una respuesta de error
        $response = array("success" => false, "message" => "Error: " . $e->getMessage());
    }
} else {
    // Envía una respuesta de error si no se recibió el ID del box
    $response = array("success" => false, "message" => "No se recibió el ID del box.");
}

// Cierra la conexión a la base de datos
$conexion->close();

// Devuelve la respuesta como JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
