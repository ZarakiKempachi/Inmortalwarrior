
<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'inmortalwarriors';

// Crear una conexión
$conexion = new mysqli($server, $user, $pass, $db);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}



?>
