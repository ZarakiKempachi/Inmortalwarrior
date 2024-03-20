<?php
session_start();
$box_id = $_SESSION['box_id'];
include 'conexion.php';

$sql = "SELECT c.`ID_Clases`, c.`Nombre`, c.`Horario`, c.`ID_Usuario`, c.`ID_Wods`, c.`ID_Boxes`, c.`Fecha`, 
               u.`Nombre` AS 'NombreInstructor'
        FROM `clases` c 
        LEFT JOIN `usuarios` u ON c.`ID_Usuario` = u.`ID_Usuario`
        WHERE c.`ID_Boxes` = $box_id";

$resultado = mysqli_query($conexion, $sql);

if ($resultado) {
    // Inicializar un array para almacenar los datos de las clases
    $clases = array();

    // Recorrer los resultados y agregar cada fila al array de clases
    while ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
        $fila['ID_Clase'] = $fila['ID_Clases'];
        $clases[] = $fila;
    }

    // Devolver los datos en formato JSON
    echo json_encode($clases);
} else {
    // Si hubo un error en la consulta, devolver un mensaje de error
    echo json_encode(array('error' => 'Error al obtener las clases desde la base de datos'));
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>