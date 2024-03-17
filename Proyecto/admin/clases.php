<?php
include '../modulos/headerAdmin.php';
?>

<div class="container">
    <h2 class="mt-5">Crear Clase</h2>
    <form id="crearClaseForm" class="mt-3">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre de la Clase:</label>
            <input type="text" class="form-control" id="nombreClase" name="nombre" required>
        </div>
        <div class="mb-3">
            <label for="fecha" class="form-label">Fecha:</label>
            <input type="date" class="form-control" id="fechaClase" name="fecha" required>
        </div>
        <div class="mb-3">
            <label for="hora" class="form-label">Hora:</label>
            <input type="time" class="form-control" id="horaClase" name="hora" required>
        </div>
        <div class="mb-3">
    <label for="wod" class="form-label">WODs</label>
    <select class="form-select" id="wodClase" name="wod" required>
        <option value="">Selecciona un WOD</option>
        <?php
        // Realizar una consulta para obtener los nombres de los WODs
        $sql = "SELECT ID_Wods, Nombre FROM wods";
        $result = $conn->query($sql);

        // Verificar si hay filas de resultados
        if ($result->num_rows > 0) {
            // Mostrar opciones para cada WOD
            while($row = $result->fetch_assoc()) {
                echo "<option value='" . $row["ID_Wods"] . "'>" . $row["Nombre"] . "</option>";
            }
        } else {
            echo "<option value=''>No hay WODs disponibles</option>";
        }
        ?>
    </select>
</div>


        <button type="submit" class=" crearClase btn btn-primary">Crear Clase</button>
    </form>

    
</div>

<?php
include '../modulos/footer.php';
?>
