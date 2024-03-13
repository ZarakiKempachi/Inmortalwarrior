<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$boxes = obtenerBoxes();

echo '<h2>Lista de Boxes</h2>';
echo '<table class="table table-bordered">';
echo '<thead class="thead-dark">';
echo '<tr>';
echo '<th>ID</th>';
echo '<th>Nombre</th>';
echo '<th>Teléfono</th>';
echo '<th>Email</th>';
echo '<th>Localidad</th>';
echo '<th>Horario</th>';
echo '<th></th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';
foreach ($boxes as $box) {
    echo '<tr>';
    echo '<td>' . $box['ID_Boxes'] . '</td>';
    echo '<td>' . $box['Nombre'] . '</td>';
    echo '<td>' . $box['Telefono'] . '</td>';
    echo '<td>' . $box['Email'] . '</td>';
    echo '<td>' . $box['Localidad'] . '</td>';
    echo '<td>' . $box['Horario'] . '</td>';
    echo '<td><button class="borrarBox " data-id="' . $box['ID_Boxes'] . '">Borrar</button></td>'; // Estableciendo el valor de data-id dinámicamente
    echo '</tr>';
}
echo '</tbody>';
echo '</table>'; 

function obtenerBoxes(){
    include 'conexion.php';
    $sql = "SELECT * FROM boxes WHERE Is_Solicitud = 0";
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
