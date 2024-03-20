<?php
session_start();
include 'conexion.php';

// Supongamos que recibes el ID de la clase como un parámetro en POST
$claseId = $_POST['clase_id'];


// Consulta SQL para obtener los usuarios inscritos en la clase específica
$sql = "SELECT u.Nombre 
        FROM reservas r
        INNER JOIN usuarios u ON r.ID_Usuario = u.ID_Usuario
        WHERE r.ID_Clases = $claseId";

// Ejecutar la consulta
$resultado = mysqli_query($conexion, $sql);

if ($resultado) {
    // Inicializar un array para almacenar los nombres de los usuarios
    $usuarios = array();

    // Recorrer los resultados y agregar cada nombre de usuario al array
    while ($fila = mysqli_fetch_assoc($resultado)) {
        $usuarios[] = $fila['Nombre'];
        
    }

    // Devolver los nombres de los usuarios en formato JSON si hay usuarios inscritos
    if (!empty($usuarios)) {
        echo json_encode(array('success' => true, 'usuarios' => $usuarios));
    } else {
        echo json_encode(array('success' => false, 'message' => 'No hay usuarios inscritos en esta clase'));
    }
} else {
    // Si hubo un error en la consulta, devolver un mensaje de error
    echo json_encode(array('success' => false, 'message' => 'Error al obtener los usuarios inscritos en la clase'));
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>
