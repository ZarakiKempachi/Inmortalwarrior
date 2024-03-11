<?php
$username = $_REQUEST['uname'];
$nombre = $_REQUEST['firstname'];
$apellidos = $_REQUEST['lname'];
$email = $_REQUEST['emailAlumno'];
$passwd = $_REQUEST['passAdmin'];
$id_box = $_REQUEST['idBox'];

function registro($username, $nombre, $apellidos, $email, $passwd, $id_box)
{
    include 'conexion.php';
    $passwd = password_hash($passwd, PASSWORD_DEFAULT);

    // Establecer la conexión a la base de datos
    $conexion = mysqli_connect($server, $user, $pass, $db);

    if (!$conexion) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    $sql1 = "INSERT INTO usuarios (Nombre, Apellido, Email,Username, `Password`,Fecha_Creacion,foto,Is_Admin,Is_Instructor, ID_Boxes) VALUES ('$nombre','$apellidos', '$email', '$username', '$passwd',NOW(),'',0,0,'$id_box')";
    $response = $conexion->query($sql1);

    if ($response) {
        echo "Usuario registrado";
    } else {
        echo "Error al registrar usuario: " . mysqli_error($conexion);
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($conexion);
}

registro($username, $nombre, $apellidos, $email, $passwd, $id_box);
