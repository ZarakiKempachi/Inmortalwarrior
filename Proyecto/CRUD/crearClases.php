<?php
session_start();

$nombreClase = $_REQUEST['Nombre'];
$fechaClase = $_REQUEST['Fecha'];
$horaClase = $_REQUEST['Hora'];
$wodClase = $_REQUEST['Wod'];

$idUsuario = $_SESSION['user_id']; 
$idBox = $_SESSION['box_id']; 

function crearClase($nombreClase, $horaClase, $fechaClase, $idUsuario, $idBox, $wodClase)
{
    include 'conexion.php';

    if (!$conexion) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

  
    $sql = "INSERT INTO clases (Nombre, Horario, Fecha, ID_Boxes, ID_Wods, ID_Usuario) 
            VALUES ('$nombreClase', '$horaClase', '$fechaClase', $idBox, $wodClase, $idUsuario)";

    if (mysqli_query($conexion, $sql)) {
        $response = array("status" => "success", "message" => "Clase creada");
    } else {
        $response = array("status" => "error", "message" => "Error al crear clase: " . mysqli_error($conexion));
    }

    
    mysqli_close($conexion);

    // Devolver la respuesta como JSON
    
}

crearClase($nombreClase, $horaClase, $fechaClase, $idUsuario, $idBox, $wodClase);
?>
