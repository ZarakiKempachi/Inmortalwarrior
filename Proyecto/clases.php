<?php
include 'modulos/headerAdmin.php';
?>

<h2>Crear Clase</h2>
<form id="crearClaseForm">
    <label for="nombre">Nombre de la Clase:</label>
    <input type="text" id="nombre" name="nombre" required><br><br>
    
    <label for="fecha">Fecha:</label>
    <input type="date" id="fecha" name="fecha" required><br><br>
    
    <label for="hora">Hora:</label>
    <input type="time" id="hora" name="hora" required><br><br>
    
    <button type="submit">Crear Clase</button>
</form>

<div id="mensaje"></div>

<?php
    include 'modulos/footer.php';
    ?>
