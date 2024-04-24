<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

$usuarios = obtenerUsuarios();

echo '<h2>Lista de Usuarios</h2>';
echo '<table class="table table-bordered">';
echo '<thead class="thead-dark">';
echo '<tr>';
echo '<th>ID</th>';
echo '<th>Nombre</th>';
echo '<th>Apellido</th>';
echo '<th>Email</th>';
echo '<th>Fecha de Creación</th>';
echo '<th>Box</th>';
echo '<th></th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';
foreach ($usuarios as $usuario) {
    echo '<tr>';
    echo '<td>' . $usuario['ID_Usuario'] . '</td>';
    echo '<td>' . $usuario['Nombre'] . '</td>';
    echo '<td>' . $usuario['Apellido'] . '</td>';
    echo '<td>' . $usuario['Email'] . '</td>';
    echo '<td>' . $usuario['Fecha_Creacion'] . '</td>';
    echo '<td>' . $usuario['nombre_box'] . '</td>';
    echo '<td><button class="borrarUsuario" data-id="' . $usuario['ID_Usuario'] . '">Borrar</button></td>';

    echo '</tr>';
}
echo '</tbody>';
echo '</table>';

function obtenerUsuarios(){
    include 'conexion.php';
    $sql = "SELECT usuarios.*, boxes.Nombre AS nombre_box
            FROM usuarios
            INNER JOIN boxes ON usuarios.ID_Boxes = boxes.ID_Boxes";
    $resultado = $conexion->query($sql);
    if (!$resultado) {
        die("Error en la consulta: " . $conexion->error);
    }
    $usuarios = array();
    while ($fila = $resultado->fetch_assoc()) {
        $usuarios[] = $fila;
    }

    
    $conexion->close();

    return $usuarios;
}

?>
