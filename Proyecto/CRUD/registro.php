<?php
$username = $_REQUEST['username'];
$nombre = $_REQUEST['name'];
$apellidos = $_REQUEST['lname'];
$email = $_REQUEST['email'];
$passwd = $_REQUEST['password'];
$idBox = $_REQUEST['box'];
$Is_Instructor = $_REQUEST['instructor'];
function registro($username, $nombre, $apellidos, $email, $passwd, $idBox,$Is_Instructor )
{
  include 'conexion.php';
  $passwd = password_hash($passwd, PASSWORD_DEFAULT);
  $conexion = mysqli_connect($server, $user, $pass, $db);

  $sql1 = "INSERT INTO usuarios (Nombre, Apellido, Email,Username, `Password`,Fecha_Creacion,foto,Is_Admin,Is_Instructor, ID_Boxes) VALUES ( '$nombre','$apellidos', '$email', '$username', '$passwd',NOW(),'',0,'$Is_Instructor',$idBox)";
  $response = $conexion->query($sql1);
    if($response){
        echo "Usuario registrado";
    }else{
        echo "Error al registrar usuario";
    }
  
}


registro($username,$nombre,$apellidos,$email,$passwd,$idEntidad,$idClase,$Is_Instructor );