<!--  -->
<?php
// Incluir el archivo de conexión a la base de datos
include 'conexion.php'; 

// Consulta SQL para obtener las clases creadas con información adicional
$sql = "SELECT Nombre, Fecha, Hora, ID_Boxes, ID_Wods, ID_Usuario FROM clases";

// Ejecutar la consulta
$resultado = $conn->query($sql);

// Verificar si hay filas de resultados
if ($resultado->num_rows > 0) {
    // Mostrar los datos de las clases en una tabla
    echo "<table class='table'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Nombre</th>";
    echo "<th>Fecha</th>";
    echo "<th>Hora</th>";
    echo "<th>ID Box</th>";
    echo "<th>ID WOD</th>";
    echo "<th>ID Usuario</th>";
    // Puedes agregar más columnas si lo necesitas
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    
    // Mostrar los datos de cada clase
    while($fila = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $fila["Nombre"] . "</td>";
        echo "<td>" . $fila["Fecha"] . "</td>";
        echo "<td>" . $fila["Hora"] . "</td>";
        echo "<td>" . $fila["ID_Boxes"] . "</td>";
        echo "<td>" . $fila["ID_Wods"] . "</td>";
        echo "<td>" . $fila["ID_Usuario"] . "</td>";
        // Puedes mostrar más datos si lo necesitas
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
} else {
    // Si no hay clases creadas, mostrar un mensaje indicando eso
    echo "No se encontraron clases creadas.";
}

// Cerrar la conexión a la base de datos
$conn->close();
?>