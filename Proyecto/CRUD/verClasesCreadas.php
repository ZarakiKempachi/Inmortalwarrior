
<?php

include 'conexion.php'; 

$box_id= $_SESSION['box_id'];

$sql = "SELECT ID_Clases, Nombre, Fecha, Horario, ID_Boxes, ID_Wods, ID_Usuario FROM clases WHERE ID_Boxes = $box_id";

// Ejecutar la consulta
$resultado = $conexion->query($sql);

// Verificar si hay filas de resultados
if ($resultado->num_rows > 0) {
    // Mostrar los datos de las clases en una tabla
    echo "<table class='table'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Nombre</th>";
    echo "<th>Fecha</th>";
    echo "<th>Hora</th>";
    echo "<th>Borrar</button>";
    
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    
    // Mostrar los datos de cada clase
    while($fila = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $fila["Nombre"] . "</td>";
        echo "<td>" . $fila["Fecha"] . "</td>";
        echo "<td>" . $fila["Horario"] . "</td>";
        echo "<td><button class='borrarBox btn btn-danger' data-clase-id='" . $fila["ID_Clases"] . "'>Borrar</button></td>";

       
        
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
} else {
    // Si no hay clases creadas, mostrar un mensaje indicando eso
    echo "No se encontraron clases creadas.";
}


$conexion->close();
?>