<?php
include '../modulos/headerAdmin.php';
?>
<?php
include '../CRUD/conexion.php';
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Número de resultados por página
$resultados_por_pagina = 6; 

// Obtener el número total de resultados
$sql_total = "SELECT COUNT(*) as total FROM wods WHERE tipo = 'The Girls'";
$result_total = $conexion->query($sql_total);
$row_total = $result_total->fetch_assoc();
$total_resultados = $row_total['total'];

// Calcular el número total de páginas
$total_paginas = ceil($total_resultados / $resultados_por_pagina);

// Obtener la página actual
$pagina_actual = isset($_GET['pagina']) ? $_GET['pagina'] : 1;

// Calcular el inicio y fin de los resultados para la página actual
$inicio = ($pagina_actual - 1) * $resultados_por_pagina;

// Consulta SQL para obtener los wods de la página actual
$sql_pagina = "SELECT * FROM wods WHERE tipo = 'The Girls' LIMIT $inicio, $resultados_por_pagina";
$result_pagina = $conexion->query($sql_pagina);
?>
<section class="general bg-white my-2">
    <div class="container mt-5">
        <h2 class="text-center">The Heroes</h2>
        <div class="text-center">
            <p>Aquí puedes encontrar todos los wod`s de "The Heroes".</p>
        </div>

        <div id="data-table-basic_filter" class="d-flex justify-content-center gap-3">
            <label class="text-center">
                <input type="search" class="form-control" id="inputBusqueda" placeholder="Busca por nombre" aria-controls="data-table-basic">
            </label>
            <button class="btn btn-secondary ml-3">Buscar</button>
        </div>
        <div id="pagination" class="text-center m-3 ">
            <?php if ($total_paginas > 1) : ?>
                <a href="?pagina=1" class="btn btn-secondary">Primera</a>
                <a href="?pagina=<?php echo $pagina_actual > 1 ? $pagina_actual - 1 : 1; ?>" class="btn btn-secondary">Anterior</a>
                <span class="mx-2"><?php echo $pagina_actual; ?> de <?php echo $total_paginas; ?></span>
                <a href="?pagina=<?php echo $pagina_actual < $total_paginas ? $pagina_actual + 1 : $total_paginas; ?>" class="btn btn-secondary">Siguiente</a>
                <a href="?pagina=<?php echo $total_paginas; ?>" class="btn btn-secondary">Última</a>
            <?php endif; ?>
        </div>


        <div class="row p-3" id="wodContainer">
            <?php
            if ($result_pagina->num_rows > 0) {
                while ($wod = $result_pagina->fetch_assoc()) {
            ?>
                    <div class="cuadro-wod col-md-6 col-lg-4  mb-4">
                        <div class="p-4 bg-dark">
                            <h4 class="titulo-wods"><?php echo $wod['Nombre']; ?></h4>
                            <p><?php echo $wod['Descripcion']; ?></p>
                        </div>
                    </div>
            <?php
                }
            } else {
                echo "No se encontraron wods.";
            }
            ?>
        </div>
    </div>
</section>


<?php
include '../modulos/footer.php';
?>
