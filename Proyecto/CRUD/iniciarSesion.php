<?php
include 'conexion.php';

// Inicializar la respuesta como un array asociativo
$response = array();

// Manejar el inicio de sesión del usuario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verificar si el usuario existe en la base de datos
    $sql = "SELECT * FROM usuarios WHERE Username = '$username'";
    $result = $conexion->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashAlmacenado = $row['Password'];

        // Verificar la contraseña proporcionada con el hash almacenado
        if (password_verify($password, $hashAlmacenado)) {
            // El usuario está autenticado

            // Determinar el tipo de usuario según las columnas Is_Admin e Is_Instructor
            if ($row['Is_Admin'] == 1 && $row['Is_Instructor'] == 0) {
                // Usuario Admin
                $response['status'] = "success";
                $response['userType'] = "admin";
            } elseif ($row['Is_Admin'] == 0 && $row['Is_Instructor'] == 0) {
                // Usuario Atleta
                $response['status'] = "success";
                $response['userType'] = "atleta";
            } else {
                // Tipo de usuario no reconocido
                $response['status'] = "error";
                $response['message'] = "Tipo de usuario no reconocido";
            }
        } else {
            // Falló la autenticación
            $response['status'] = "error";
            $response['message'] = "Contraseña incorrecta";
        }
    } else {
        // El usuario no existe
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
