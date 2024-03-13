<?php
include 'conexion.php'; // Incluye el archivo de conexión a la base de datos

try {
    // Realiza la consulta para seleccionar los boxes que tienen Is_Solicitud igual a 1
    $sql = "SELECT * FROM boxes WHERE Is_Solicitud = 1";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        echo '<h2>Boxes Pendientes de Aceptación</h2>';
        echo '<table border="1">';
        echo '<tr><th>Id</th><th>Nombre</th><th>Dirección</th><th>Localidad</th><th>Email</th><th>Acción</th></tr>';

        // Muestra los resultados de la consulta en una tabla
        while ($fila = $resultado->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $fila['ID_Boxes'] . '</td>';
            echo '<td>' . $fila['Nombre'] . '</td>';
            echo '<td>' . $fila['Direccion'] . '</td>';
            echo '<td>' . $fila['Localidad'] . '</td>';
            echo '<td>' . $fila['Email'] . '</td>';
            // Agrega un botón de aceptar para cambiar Is_Solicitud a 0
            echo '<td><form method="post" action="">
                  <input type="hidden" name="id_box" value="' . $fila['ID_Boxes'] . '">
                  <button type="submit" id="aceptarBox"  name="aceptar">Aceptar</button>
                  <button type="submit" id="denegarBox"  name="denegar">Denegar</button>
                  </form></td>';
            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo 'No hay boxes pendientes de aceptación';
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

// Cierra la conexión a la base de datos
$conexion->close();
?>
