<?php
$ciudad = $_REQUEST['ciudad'];
error_log("Ciudad seleccionada: " . $ciudad); // Opcional: para registros en el servidor
include 'Conexion.php';

$conexion = mysqli_connect($server, $user, $pass, $db);
$sql = "SELECT * FROM boxes WHERE Localidad = '$ciudad'";
$response = mysqli_query($conexion, $sql);

// Verificar si hay algún resultado
if (!$response) {
    die('Error en la consulta: ' . mysqli_error($conexion));
}

// Resto del código para imprimir opciones
while ($row = mysqli_fetch_assoc($response)) {
    echo "<option value='" . $row['ID_Boxes'] . "'>" . $row['Nombre'] . "</option>";
}
?>