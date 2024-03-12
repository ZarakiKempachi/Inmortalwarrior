<?php
include 'conexion.php';

// Inicializar la respuesta como un array asociativo
$response = array();

// Manejar el inicio de sesión del usuario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verificar si el usuario es un superadministrador
    $sql = "SELECT * FROM superadmin WHERE Username = '$username'";
    $result = $conexion->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashAlmacenado = $row['Password'];

        // Verificar la contraseña proporcionada con el hash almacenado
        if (password_verify($password, $hashAlmacenado)) {
            // El superadministrador está autenticado
            $response['status'] = "success";
            $response['userType'] = "superadmin";
        } else {
            // Falló la autenticación
            $response['status'] = "error";
            $response['message'] = "Contraseña incorrecta";
        }
    } else {
        // El superadministrador no existe
        $response['status'] = "error";
        $response['message'] = "Nombre de usuario o contraseña inválido";
    }
}

// Cerrar la conexión a la base de datos
$conexion->close();

// Enviar la respuesta como JSON
header('Content-Type: application/json');
echo json_encode($response);
?>