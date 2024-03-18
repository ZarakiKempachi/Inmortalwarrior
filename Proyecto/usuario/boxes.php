<?php
include '../modulos/header.php';
include '../CRUD/conexion.php';

// Definir el número de boxes por página
$boxes_por_pagina = 7;

// Obtener el número total de boxes
$sql_total = "SELECT COUNT(*) as total FROM boxes";
$resultado_total = $conexion->query($sql_total);
$row_total = $resultado_total->fetch_assoc();
$total_boxes = $row_total['total'];

// Calcular el número total de páginas
$total_paginas = ceil($total_boxes / $boxes_por_pagina);

// Obtener la página actual
$pagina_actual = isset($_GET['pagina']) ? $_GET['pagina'] : 1;

// Calcular el inicio y fin de los resultados para la página actual
$inicio = ($pagina_actual - 1) * $boxes_por_pagina;

// Consulta SQL para obtener los boxes de la página actual
$sql_pagina = "SELECT * FROM boxes LIMIT $inicio, $boxes_por_pagina";
$resultado_pagina = $conexion->query($sql_pagina);
?>

<section class="py-5 bg-white general">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="col mb-5">
            <input type="text" id="inputBusquedaBox" placeholder="Buscar">
            <button id="btnBuscar">Buscar</button>
            <div id="pagination" class="text-center mb-1">
    <?php if ($total_paginas > 1) : ?>
        <a href="?pagina=1" class="btn btn-secondary">Primera</a>
        <a href="?pagina=<?php echo ($pagina_actual > 1) ? $pagina_actual - 1 : 1; ?>" class="btn btn-secondary">Anterior</a>
        <span class="mx-2"><?php echo $pagina_actual; ?> de <?php echo $total_paginas; ?></span>
        <a href="?pagina=<?php echo ($pagina_actual < $total_paginas) ? $pagina_actual + 1 : $total_paginas; ?>" class="btn btn-secondary">Siguiente</a>
        <a href="?pagina=<?php echo $total_paginas; ?>" class="btn btn-secondary">Última</a>
    <?php endif; ?>
</div>
        </div>
        <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 justify-content-center">


            <?php
            // Verificar si hay resultados en la consulta
            if ($resultado_pagina->num_rows > 0) {
                // Iterar sobre cada fila de resultados
                while ($row = $resultado_pagina->fetch_assoc()) {
            ?>
                    <div class="col mb-5 cuadrosBox">
                        <div class="card h-100">
                            <img class="card-img-top" src="img/<?php echo $row['Foto']; ?>" alt="..." data-bs-toggle="modal" data-bs-target="#msi">
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="tituloBox"><?php echo $row['Nombre']; ?></h5>
                                    <p><?php echo $row['Direccion']; ?></p>
                                    <p>Teléfono: <?php echo $row['Telefono']; ?></p>
                                    <p>Email: <?php echo $row['Email']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                }
            } else {
                // Si no hay resultados
                echo "No se encontraron boxes.";
            }
            ?>

        </div>
    </div>
</section>

<!-- Controles de paginación -->


<?php
include '../modulos/footer.php';
?>