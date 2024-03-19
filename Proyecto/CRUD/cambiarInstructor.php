<?php
include 'conexion.php';

if (isset($_POST['id_usuario'])) {
    
    $idUsuario = $_POST['id_usuario'];
    // Consulta SQL para actualizar el campo Is_Instructor a 1
    $sql = "UPDATE usuarios SET Is_Instructor = 1 WHERE ID_Usuario = ?";

    // Preparar la consulta
    $stmt = $conexion->prepare($sql);
    
    // Vincular parámetros
    $stmt->bind_param("i", $idUsuario);
    
    // Ejecutar la consulta
    if ($stmt->execute()) {
        // Éxito: enviar respuesta JSON con éxito
        echo json_encode(array("success" => true, "message" => "El usuario ha sido cambiado a instructor correctamente."));
    } else {
        // Error: enviar respuesta JSON con mensaje de error
        echo json_encode(array("success" => false, "message" => "Ha ocurrido un error al cambiar el usuario a instructor."));
    }

    // Cerrar la conexión a la base de datos
    $stmt->close();
    $conexion->close();
} else {
    // Si no se envió el ID de usuario, enviar respuesta JSON con mensaje de error
    echo json_encode(array("success" => false, "message" => "No se ha proporcionado el ID de usuario."));
}
?>
