<?php

// Conectar a la base de datos (ajusta los detalles de conexión según tu entorno)
$conexion = new mysqli("nombre_del_servidor", "nombre_de_usuario", "contraseña", "nombre_de_la_base_de_datos");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Consulta SQL para recuperar los datos de los Hero WODs
$consulta = "SELECT * FROM hero_wods";
$resultado = $conexion->query($consulta);

// Función para generar el código HTML de un Hero WOD
function generateHeroWODHTML($data) {
    return '
    <div class="wods col-md-6 col-lg-4 mb-4" data-nombre="' . $data["nombre"] . '">
        <div class="p-4 bg-dark">
            <h4 class="titulo-wods">' . $data["nombre"] . '</h4>
            <p>' . nl2br($data["descripcion"]) . '</p>
            <p>' . $data["memorial"] . '</p>
        </div>
    </div>';
}

// Generar el código HTML para cada Hero WOD
while ($fila = $resultado->fetch_assoc()) {
    echo generateHeroWODHTML($fila);
}

// Cerrar la conexión
$conexion->close();

?>

<!-- sql insertar tabla -->
<!-- INSERT INTO hero_wods (nombre, descripcion, memorial) VALUES
('Abbate', 'For Time\nRun 1 mile\n155 pound Clean and jerk, 21 reps\nRun 800 meters\n155 pound Clean and jerk, 21 reps\nRun 1 Mile', 'In memory of U.S. Marine Corps Sgt. Matthew T. Abbate.'),
-- Agrega datos para los demás Hero WODs aquí
; -->
<!-- Crear una tabla en la base de datos:

Primero, necesitas tener una base de datos con una tabla que almacene la información de los Hero WODs. Aquí tienes un ejemplo de cómo podría verse la estructura de la tabla:

sql
Copy code
CREATE TABLE hero_wods (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    descripcion TEXT NOT NULL,
    memorial TEXT NOT NULL
); -->