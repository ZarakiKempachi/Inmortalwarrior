<?php
include '../modulos/headerAdmin.php';
include '../CRUD/conexion.php';

// Verificar si el ID de usuario está disponible
if (isset($_SESSION["user_id"])) {
    $id_usuario = $_SESSION["user_id"];


    $sql = "SELECT ID_Records, Tipo, Resultado, Formato FROM personal_records WHERE ID_Usuario = ? ORDER BY Tipo ASC";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("i", $id_usuario);
    $stmt->execute();
    $result = $stmt->get_result();
}
?>
<div class="general container">
    <a href="#" onclick="history.back();" class="btn "><i class="bi bi-arrow-left"></i></a>
    <h1> PR´s de <?php echo $nombre; ?> </h1>
    <form id="formulario-pr" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="form-group">
            <label for="tipo-registro">Tipo:</label>
            <input type="text" class="form-control" id="tipo-registro" name="tipo-registro" placeholder="Tipo de PR" required>
        </div>
        <div class="form-group">
            <label for="resultado-registro">Resultado:</label>
            <input type="text" class="form-control" id="resultado-registro" name="resultado-registro" placeholder="Resultado del PR" required>
        </div>
        <div class="form-group">
            <label for="formato-registro">Formato:</label>
            <select class="form-control" id="formato-registro" name="formato-registro">
                <option value="Kg">Kg</option>
                <option value="Lb">Lb</option>
                <option value="Min">Min</option>
            </select>
        </div>
        <button type="submit" id="btn-guardar" class="btnGlobal">Guardar</button>
    </form>

    <div id="tabla-resultados">
        <h2>Resultados:</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Tipo</th>
                    <th>Resultado</th>
                    <th>Formato</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody id="tbody-resultados">
                <?php
                if (isset($result)) {
                    // Mostrar los datos en la tabla de resultados
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr data-id='" . $row["ID_Records"] . "'>";
                        echo "<td>" . $row["Tipo"] . "</td>";
                        echo "<td class='resultado'>" . $row["Resultado"] . "</td>";
                        echo "<td>" . $row["Formato"] . "</td>";
                        echo "<td><button class='editarBox btn btn-primary'>Editar</button></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No se encontraron resultados.</td></tr>";
                }

                ?>
            </tbody>
        </table>
    </div>
</div>
<script>
   $(document).ready(function() {
    $('.editarBox').click(function() {
        var fila = $(this).closest('tr');
        var id = fila.data('id');
        var resultado = fila.find('.resultado').text();
        swal({
            content: {
                element: "input",
                attributes: {
                    placeholder: "Introduce el nuevo resultado",
                    
                },
            },
        }).then(function(nuevoResultado) {
            // nuevoResultado contiene el valor ingresado por el usuario
            if (nuevoResultado !== null) {
                // Realizar una solicitud AJAX para actualizar el resultado en la base de datos
                $.ajax({
                    type: 'POST',
                    url: 'prsAdmin.php',
                    data: {
                        id: id,
                        nuevoResultado: nuevoResultado
                    },
                    success: function(response) {
                        // Actualizar el valor en la página después de que se haya actualizado en la base de datos
                        fila.find('.resultado').text(nuevoResultado);
                    },
                    error: function(xhr, status, error) {
                        // Manejar errores si ocurre alguno
                        console.error(xhr.responseText);
                    }
                });
            }
        });
    });
});

</script>

<?php
function actualizarResultado($id, $nuevoResultado)
{
    include '../CRUD/conexion.php';
    $id = $conexion->real_escape_string($id);
    $nuevoResultado = $conexion->real_escape_string($nuevoResultado);

    // Construir la consulta SQL para actualizar el resultado
    $query = "UPDATE personal_records SET Resultado = '$nuevoResultado' WHERE ID_Records = '$id'";

    // Ejecutar la consulta
    if ($conexion->query($query) === TRUE) {
        echo "Resultado actualizado exitosamente";
    } else {
        echo "Error al actualizar el resultado: " . $conexion->error;
    }

    // Cerrar la conexión
    $conexion->close();
}

if (isset($_POST['id']) && isset($_POST['nuevoResultado'])) {
    $id = $_POST['id'];
    $nuevoResultado = $_POST['nuevoResultado'];

    // Llamar a la función actualizarResultado para actualizar el resultado en la base de datos
    actualizarResultado($id, $nuevoResultado);
} else {
    echo "Parámetros incorrectos";
}


?>

<?php
include '../modulos/footer.php';
?>