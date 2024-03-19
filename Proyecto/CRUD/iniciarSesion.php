<?php

include 'conexion.php';

// Inicializar la respuesta como un array asociativo
$response = array();

// Función para hashear la contraseña
function hashearContraseña($password) {
    return password_hash($password, PASSWORD_DEFAULT);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = isset($_POST['username']) ? mysqli_real_escape_string($conexion, $_POST['username']) : '';
    $password = isset($_POST['password']) ? mysqli_real_escape_string($conexion, $_POST['password']) : '';

    // Verificar si el usuario es un superadministrador
    $sql_superadmin = "SELECT * FROM superadmin WHERE Username = '$username'";
    $result_superadmin = $conexion->query($sql_superadmin);
    
    if ($result_superadmin->num_rows > 0) {
        $row_superadmin = $result_superadmin->fetch_assoc();
        $hashAlmacenado_superadmin = $row_superadmin['password'];

        // Verificar la contraseña proporcionada con el hash almacenado
        if (password_verify($password, $hashAlmacenado_superadmin)) {
            // El superadministrador está autenticado
            session_start();
            $_SESSION['userType'] = "superadmin";
            $_SESSION['username'] = $username;
            $response['status'] = "success";
            $response['userType'] = "superadmin";
        } else {
            // Falló la autenticación
            $response['status'] = "error";
            $response['message'] = "Contraseña incorrecta";
        }
    } else {
        // Verificar si el usuario es un administrador, atleta o instructor
        $sql = "SELECT * FROM usuarios WHERE Username = '$username'";
        $result = $conexion->query($sql);
        
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $hashAlmacenado = $row['Password'];

            // Verificar la contraseña proporcionada con el hash almacenado
            if (password_verify($password, $hashAlmacenado)) {
                session_start();
                if ($row['Is_Admin'] == 1) {
                    // Usuario Admin
                    $_SESSION['userType'] = "admin";
                } elseif ($row['Is_Instructor'] == 1) {
                    // Usuario Instructor
                    $_SESSION['userType'] = "instructor";
                } else {
                    // Usuario Atleta
                    $_SESSION['userType'] = "atleta";
                }
                $_SESSION['username'] = $username;

                // Obtener el ID del usuario y el ID del box asociado
                $user_id = $row['ID_Usuario'];
                $box_id = $row['ID_Boxes'];

                // Guardar los IDs en la sesión
                $_SESSION['user_id'] = $user_id;
                $_SESSION['box_id'] = $box_id;
                

                $response['status'] = "success";
                $response['userType'] = $_SESSION['userType'];
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
}

// Cerrar la conexión a la base de datos
$conexion->close();

// Enviar la respuesta como JSON
header('Content-Type: application/json');

// Si el inicio de sesión es exitoso, establece cookies (opcional)
if ($response['status'] === "success" && isset($_SESSION['userType'])) {
    $cookie_expires = time() + 3600 * 24 * 30; // Caduca en 30 días
    setcookie('userType', $_SESSION['userType'], $cookie_expires, '/');
    setcookie('username', $_SESSION['username'], $cookie_expires, '/');
}

echo json_encode($response);
?>
