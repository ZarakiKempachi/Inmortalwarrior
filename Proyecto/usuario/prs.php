<?php
include '../modulos/header.php';
include '../CRUD/conexion.php';

// Verificar si el ID de usuario está disponible
if (isset($_SESSION["user_id"])) {
    $id_usuario = $_SESSION["user_id"];

    // Consultar los datos de la base de datos
    $sql = "SELECT Tipo, Resultado, Formato FROM personal_records WHERE ID_Usuario = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("i", $id_usuario);
    $stmt->execute();
    $result = $stmt->get_result();
}
?>
<div class="general container">
    <h1> PR´s de <?php echo $nombre; ?> </h1>
    <form id="formulario-pr" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="form-group">
            <label for="tipo-registro">Tipo:</label>
            <input type="text" class="form-control" id="tipo-registro" name="tipo-registro" placeholder="Tipo de PR">
        </div>
        <div class="form-group">
            <label for="resultado-registro">Resultado:</label>
            <input type="text" class="form-control" id="resultado-registro" name="resultado-registro" placeholder="Resultado del PR">
        </div>
        <div class="form-group">
            <label for="formato-registro">Formato:</label>
            <select class="form-control" id="formato-registro" name="formato-registro">
                <option value="Kg">Kg</option>
                <option value="Lb">Lb</option>
                <option value="Min">Min</option>
            </select>
        </div>
        <button type="button" id="btn-guardar" class="btnGlobal">Guardar</button>
    </form>

    <div id="tabla-resultados">
        <h2>Resultados:</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Tipo</th>
                    <th>Resultado</th>
                    <th>Formato</th>
                </tr>
            </thead>
            <tbody id="tbody-resultados">
                <?php
                if (isset($result)) {
                    // Mostrar los datos en la tabla de resultados
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>" . $row["Tipo"] . "</td><td>" . $row["Resultado"] . "</td><td>" . $row["Formato"] . "</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='3'>No se encontraron resultados.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<?php
include '../modulos/footer.php';
?>
