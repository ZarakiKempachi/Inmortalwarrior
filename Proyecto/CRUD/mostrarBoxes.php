<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$boxes = obtenerBoxes();

echo '<h2>Lista de Boxes</h2>';
echo '<ul>';
foreach ($boxes as $box) {
    echo '<li>' . $box['Nombre']. '<button id="borrarBox" classs="btn" >Borrar</button> </li>';
}
echo '</ul>'; 

function obtenerBoxes(){
    include 'conexion.php';
    $sql = "SELECT * FROM boxes";
    $resultado = $conexion->query($sql);
    if (!$resultado) {
        die("Error en la consulta: " . $conexion->error);
    }
    $boxes = array();
    while ($fila = $resultado->fetch_assoc()) {
        $boxes[] = $fila;
    }

    // Cerrar la conexión a la base de datos
    $conexion->close();

    return $boxes;
}
?>
