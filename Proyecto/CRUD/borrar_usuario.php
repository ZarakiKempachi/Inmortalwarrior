<?php
include 'conexion.php'; // Incluye el archivo de conexión a la base de datos

// Verifica si se ha enviado el formulario para borrar un usuario
if (isset($_POST['id_usuario'])) {
    // Obtiene el ID del usuario desde el formulario
    $idUsuario = $_POST['id_usuario'];

    try {
        // Ejecuta una sentencia SQL DELETE para eliminar el usuario
        $sql = "DELETE FROM usuarios WHERE ID_Usuario = $idUsuario";
        if ($conexion->query($sql) === TRUE) {
            // Envía una respuesta exitosa
            $response = array("success" => true, "message" => "El usuario ha sido borrado exitosamente.");
        } else {
            // Envía una respuesta de error
            $response = array("success" => false, "message" => "Error al borrar el usuario: " . $conexion->error);
        }
    } catch (Exception $e) {
        // Envía una respuesta de error
        $response = array("success" => false, "message" => "Error: " . $e->getMessage());
    }
} else {
    // Envía una respuesta de error si no se recibió el ID del usuario
    $response = array("success" => false, "message" => "No se recibió el ID del usuario.");
}

// Cierra la conexión a la base de datos
$conexion->close();

// Devuelve la respuesta como JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
