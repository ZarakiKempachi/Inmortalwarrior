<?php
$nombreClase = $_REQUEST['Nombre'];
$fechaClase = $_REQUEST['Fecha'];
$horaClase = $_REQUEST['Hora'];

// Supongamos que tienes acceso a los IDs del usuario, box y WODs desde la sesión del usuario
$idUsuario = $_SESSION['ID_Usuario']; // Obtener el ID del usuario desde la sesión
$idBox = $_SESSION['ID_Box']; // Obtener el ID del box desde la sesión
$idWod = $_SESSION['ID_Wod']; // Obtener el ID del WOD desde la sesión

function crearClase($nombreClase, $horaClase, $fechaClase, $idUsuario, $idBox, $idWod)
{
    include 'conexion.php';

    if (!$conexion) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    // Insertar en la base de datos
    $sql = "INSERT INTO clases (Nombre, Horario, Fecha, ID_Boxes, ID_Wods, ID_Usuario) 
            VALUES ('$nombreClase', '$horaClase', '$fechaClase', $idBox, $idWod, $idUsuario)";

    if (mysqli_query($conexion, $sql)) {
        echo json_encode("Clase creada");
    } else {
        echo json_encode("Error al crear clase: " . mysqli_error($conexion));
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($conexion);
}

crearClase($nombreClase, $horaClase, $fechaClase, $idUsuario, $idBox, $idWod);
?>
