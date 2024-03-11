<?php
include 'conexion.php';

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
           echo json_encode("success");
        
        } else {
            // Falló la autenticación
            echo "Contraseña incorrecta";
        }
    } else {
        // El usuario no existe
        echo "Nombre de usuario o contraseña inválido";
    }
}

// Cerrar la conexión a la base de datos
$conexion->close();
?>
