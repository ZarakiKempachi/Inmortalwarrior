<?php
$username = $_REQUEST['uname'];
$passwd = $_REQUEST['passAdmin'];


function registro($username,  $passwd,)
{
    include 'conexion.php';
    $passwd = password_hash($passwd, PASSWORD_DEFAULT);

    // Establecer la conexión a la base de datos
    $conexion = mysqli_connect($server, $user, $pass, $db);

    if (!$conexion) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    // Verificar que el nombre de usuario no esté repetido
    $checkQuery = "SELECT * FROM usuarios WHERE username = '$username'";
    $checkResult = $conexion->query($checkQuery);

    if ($checkResult->num_rows > 0) {
        echo json_encode("El nombre de usuario ya está en uso");
    } else {
        // Insertar en la base de datos
        $insertQuery = "INSERT INTO superadmin (username, `password`) 
                        VALUES ('$username', '$passwd')";

        $response = $conexion->query($insertQuery);

        if ($response) {
            echo json_encode("Usuario registrado");
        } else {
            echo json_encode("Error al registrar usuario: " . mysqli_error($conexion));
        }
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($conexion);
}

registro($username,$passwd);
?>