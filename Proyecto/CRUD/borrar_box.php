<?php
if (isset($_POST['id_box'])) {
    include 'conexion.php';

    // Escapa el ID de box para evitar inyección de SQL
    $id_box = $conexion->real_escape_string($_POST['id_box']);

   
    $sql = "DELETE FROM boxes WHERE ID_Boxes = '$id_box'";

   
    if ($conexion->query($sql) === TRUE) {
        // Si la eliminación fue exitosa, devuelve una respuesta JSON con éxito
        echo json_encode(array('success' => true, 'message' => 'Box eliminado correctamente'));
    } else {
       
        echo json_encode(array('success' => false, 'message' => 'Error al eliminar el box'));
    }

  
    $conexion->close();
} else {
    
    echo json_encode(array('success' => false, 'message' => 'ID de box no proporcionado'));
}
?>