<?php
session_start();

include 'conexion.php';

// Verificar si se ha iniciado sesión y se ha establecido $_SESSION['user_id']
if (!isset($_SESSION['user_id'])) {
    $response = array("success" => false, "message" => "No se ha iniciado sesión");
    echo json_encode($response);
    exit(); 
}

$user_id = $_SESSION['user_id'];

// Verificar si se recibió un ID de clase válido
if (isset($_POST['clase_id'])) {
    $clase_id = $_POST['clase_id'];

    // Consulta para verificar si el usuario está inscrito en la clase especificada
    $sql_check_reservation = "SELECT ID_Reservas FROM reservas WHERE ID_Usuario = '$user_id' AND ID_Clases = '$clase_id'";
    $result_check_reservation = $conexion->query($sql_check_reservation);

    if ($result_check_reservation->num_rows > 0) {
        // El usuario ya está inscrito en la clase
        $response = array("success" => true, "inscrito" => true);
    } else {
        // El usuario no está inscrito en la clase
        $response = array("success" => true, "inscrito" => false);
    }

    // Cerrar conexión
    $conexion->close();

    // Establecer cabecera JSON
    header('Content-Type: application/json');

    // Imprimir respuesta JSON
    echo json_encode($response);
} else {
    // Si no se proporcionó un ID de clase válido, devolver un mensaje de error
    $response = array("success" => false, "message" => "No se proporcionó un ID de clase válido");
    echo json_encode($response);
}
?>
