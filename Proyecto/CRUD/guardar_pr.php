<?php
session_start();
include 'conexion.php';

// Array para almacenar la respuesta
$response = array();

// Verificar si se han enviado datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["tipo-registro"]) && isset($_POST["resultado-registro"]) && isset($_POST["formato-registro"])) {
    // Obtener los datos del formulario
    $tipo = $_POST["tipo-registro"];
    $resultado = $_POST["resultado-registro"];
    $formato = $_POST["formato-registro"];
    $id_usuario = $_SESSION["user_id"]; 

    // Preparar la consulta SQL
    $sql = "INSERT INTO personal_records (Tipo, Resultado, Formato, ID_Usuario) VALUES (?, ?, ?, ?)";

    // Preparar la declaración
    $stmt = $conexion->prepare($sql);

    // Vincular los parámetros
    $stmt->bind_param("sssi", $tipo, $resultado, $formato, $id_usuario);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        // Si la inserción fue exitosa, agregar los datos a la respuesta
        $response['success'] = true;
        $response['data'] = array(
            'tipo' => $tipo,
            'resultado' => $resultado,
            'formato' => $formato
        );
    } else {
        // Si hubo un error en la ejecución de la consulta
        $response['success'] = false;
        $response['message'] = "Error al guardar los datos en la base de datos";
    }

 
    $stmt->close();
   
}

// Enviar la respuesta como JSON
echo json_encode($response);
