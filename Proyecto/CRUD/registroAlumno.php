<?php
$username = $_REQUEST['uname'];
$nombre = $_REQUEST['firstname'];
$apellidos = $_REQUEST['lname'];
$email = $_REQUEST['emailAlumno'];
$passwd = $_REQUEST['passAdmin'];


function registro($username, $nombre, $apellidos, $email, $passwd )
{
  include 'conexion.php';
  $passwd = password_hash($passwd, PASSWORD_DEFAULT);
  $conexion = mysqli_connect($server, $user, $pass, $db);

  $sql1 = "INSERT INTO usuarios (Nombre, Apellido, Email,Username, `Password`,Fecha_Creacion,foto,Is_Admin,Is_Instructor, ID_Boxes) VALUES ( '$nombre','$apellidos', '$email', '$username', '$passwd',NOW(),'',0,'0','')";
  $response = $conexion->query($sql1);
    if($response){
        echo "Usuario registrado";
    }else{
        echo "Error al registrar usuario";
    }
  
}


registro($username, $nombre, $apellidos, $email, $passwd);