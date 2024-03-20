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
    
    try {
        // Consulta para obtener el ID de la clase
        $sql_get_clase_id = "SELECT ID_Clases FROM clases WHERE ID_Clases = '$clase_id'";
        $result_get_clase_id = $conexion->query($sql_get_clase_id);

        if ($result_get_clase_id->num_rows > 0) {
            // Si se encontró el ID de la clase, procede con la inserción en la tabla `reservas`
            $fecha_actual = date("Y-m-d"); // Obtener la fecha actual
            $sql_insert_reserva = "INSERT INTO reservas (Fecha, ID_Usuario, ID_Clases) VALUES ('$fecha_actual', '$user_id', '$clase_id')"; 

            if ($conexion->query($sql_insert_reserva) === TRUE) {
                $response = array("success" => true, "message" => "Inscripción exitosa");
                echo json_encode($response);
            } else {
                $response = array("success" => false, "message" => "Error al inscribirse en la clase: " . $conexion->error);
                echo json_encode($response);
            }
        } else {
            // Si no se encontró el ID de la clase, devuelve un mensaje de error
            $response = array("success" => false, "message" => "No se encontró el ID de la clase");
            echo json_encode($response);
        }
    } catch (Exception $e) {
        $response = array("success" => false, "message" => "Error en el servidor: " . $e->getMessage());
        echo json_encode($response);
    }

    // Cerrar conexión
    $conexion->close();
} else {
    $response = array("success" => false, "message" => "No se proporcionó un ID de clase válido");
    echo json_encode($response);
}
?>
