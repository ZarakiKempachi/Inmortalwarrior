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

    // Verificar si el tipo ya existe en la base de datos
    $sql_verificar = "SELECT COUNT(*) AS total FROM personal_records WHERE Tipo = ? AND ID_Usuario = ?";
    $stmt_verificar = $conexion->prepare($sql_verificar);
    $stmt_verificar->bind_param("si", $tipo, $id_usuario);
    $stmt_verificar->execute();
    $result_verificar = $stmt_verificar->get_result();
    $row_verificar = $result_verificar->fetch_assoc();
    $total = $row_verificar['total'];
    $stmt_verificar->close();

    if ($total > 0) {
        // El tipo ya existe, agregar un mensaje de error a la respuesta
        $response['success'] = false;
        $response['message'] = "El ejercicio ya está presente en la base de datos.";
    } else {
        // El tipo no existe, proceder con la inserción del nuevo registro
        $sql = "INSERT INTO personal_records (Tipo, Resultado, Formato, ID_Usuario) VALUES (?, ?, ?, ?)";
        $stmt = $conexion->prepare($sql);
        $stmt->bind_param("sssi", $tipo, $resultado, $formato, $id_usuario);

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
} else {
    $response['success'] = false;
    $response['message'] = "Parámetros incorrectos";
}

// Enviar la respuesta como JSON
echo json_encode($response);
?>
