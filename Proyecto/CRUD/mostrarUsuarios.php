<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$usuarios = obtenerUsuarios();

echo '<h2>Lista de Usuarios</h2>';
echo '<ul>';
foreach ($usuarios as $usuario) {
    echo '<li>' . 
        '<strong>Nombre:</strong> ' . $usuario['Nombre'] . '<br>' .
        '<strong>Apellido:</strong> ' . $usuario['Apellido'] . '<br>' .
        '<strong>Email:</strong> ' . $usuario['Email'] . '<br>' .
        '<strong>Fecha de Creación:</strong> ' . $usuario['Fecha_Creacion'] .
        '<button id="borrarUsuario" class="btn">Borrar</button>' .
        '</li>';
}
echo '</ul>'; 

function obtenerUsuarios(){
    include 'conexion.php';
    $sql = "SELECT * FROM Usuarios";
    $resultado = $conexion->query($sql);
    if (!$resultado) {
        die("Error en la consulta: " . $conexion->error);
    }
    $usuarios = array();
    while ($fila = $resultado->fetch_assoc()) {
        $usuarios[] = $fila;
    }

    // Cerrar la conexión a la base de datos
    $conexion->close();

    return $usuarios;
}
?>
