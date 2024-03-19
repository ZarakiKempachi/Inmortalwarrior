<?php
session_start();
$box_id = $_SESSION['box_id'];
include 'conexion.php';

$sql = "SELECT `ID_Clases`, `Nombre`, `Horario`, `ID_Usuario`, `ID_Wods`, `ID_Boxes`, `Fecha` FROM `clases` WHERE ID_Boxes = $box_id";

$sql2 = "SELECT * FROM `usuarios` WHERE ";
$resultado = mysqli_query($conexion, $sql);

if ($resultado) {
    // Inicializar un array para almacenar los datos de las clases
    $clases = array();

    // Recorrer los resultados y agregar cada fila al array de clases
    while ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
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
