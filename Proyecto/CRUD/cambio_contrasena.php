<?php
session_start();
include 'conexion.php';

// Obtener los datos del formulario
$username = $_SESSION['username'];
$newPassword = isset($_POST['newPassword']) ? $_POST['newPassword'] : '';
$confirmPassword = isset($_POST['confirmPassword']) ? $_POST['confirmPassword'] : '';

// Inicializar la respuesta como un array asociativo
$response = array();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if ($newPassword === $confirmPassword) {
        // Hashear la nueva contraseña
        $hashedNewPassword = password_hash($newPassword, PASSWORD_DEFAULT);

        // Actualizar la contraseña en la base de datos
        $updateSql = "UPDATE usuarios SET Password = ? WHERE Username = ?";
        $updateStmt = $conexion->prepare($updateSql);
        $updateStmt->bind_param("ss", $hashedNewPassword, $username);

        if ($updateStmt->execute()) {
            // Contraseña actualizada exitosamente
            $response['status'] = "success";
            $response['message'] = "Contraseña actualizada correctamente";
        } else {
            // Error al actualizar la contraseña
            $response['status'] = "error";
            $response['message'] = "Error al actualizar la contraseña en la base de datos: " . $conexion->error;
        }

        // Cerrar la declaración preparada de actualización
        $updateStmt->close();
    } else {
        // La nueva contraseña y la confirmación no coinciden
        $response['status'] = "error";
        $response['message'] = "La nueva contraseña y la confirmación no coinciden";
    }
}

// Enviar la respuesta como JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
