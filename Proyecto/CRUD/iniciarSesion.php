<?php
include 'conexion.php';

// Inicializar la respuesta como un array asociativo
$response = array();

// Función para hashear la contraseña
function hashearContraseña($password) {
    return password_hash($password, PASSWORD_DEFAULT);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verificar si el usuario es un superadministrador
    $sql_superadmin = "SELECT * FROM superadmin WHERE Username = '$username'";
    $result_superadmin = $conexion->query($sql_superadmin);
    
    if ($result_superadmin->num_rows > 0) {
        $row_superadmin = $result_superadmin->fetch_assoc();
        $hashAlmacenado_superadmin = $row_superadmin['password'];

        // Verificar la contraseña proporcionada con el hash almacenado
        if (password_verify($password, $hashAlmacenado_superadmin)) {
            // El superadministrador está autenticado
            $response['status'] = "success";
            $response['userType'] = "superadmin";
        } else {
            // Falló la autenticación
            $response['status'] = "error";
            $response['message'] = "Contraseña incorrecta";
        }
    } else {
        // Verificar si el usuario es un administrador o un atleta
        $sql = "SELECT * FROM usuarios WHERE Username = '$username'";
        $result = $conexion->query($sql);
        
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $hashAlmacenado = $row['Password'];

            // Verificar la contraseña proporcionada con el hash almacenado
            if (password_verify($password, $hashAlmacenado)) {
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
}

// Cerrar la conexión a la base de datos
$conexion->close();

// Enviar la respuesta como JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
