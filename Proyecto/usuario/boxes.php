<?php
include '../modulos/header.php';
include '../CRUD/conexion.php';

// Definir el número de boxes por página
$boxes_por_pagina = 8;

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

// Almacenar los resultados en una matriz
$boxes = [];
if ($resultado_pagina->num_rows > 0) {
    while ($row = $resultado_pagina->fetch_assoc()) {
        $boxes[] = $row;
    }
} else {
    // Si no hay resultados
    echo "No se encontraron boxes.";
}
?>

<section class="py-5 bg-white general">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="col mb-5 ">
            <input type="text" id="inputBusquedaBox" placeholder="Buscar">
            <button id="btnBuscar" class="btn btn-secondary">Buscar</button>
            <div id="pagination" class="text-center m-5">
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
            // Iterar sobre cada fila de resultados para generar los cuadros de box
            foreach ($boxes as $box) {
            ?>
                <div class="col mb-5 cuadrosBox">
                
                    <a class="detalles-box" href="detalles_box.php?id=<?php echo $box['ID_Boxes']; ?>">
                        <div class="card h-100 w-120">
                            <img class="card-img-top" src="../../img/<?php echo $box['Foto']; ?>" alt="...">
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="tituloBox"><?php echo $box['Nombre']; ?></h5>
                                    <p class="text-start"><strong>Dirección:</strong><?php echo $box['Direccion']; ?></p>
                                    <p class="text-start "><strong>Teléfono:</strong><?php echo $box['Telefono']; ?></p>
                                    <p class="text-start"><strong>Email:</strong><?php echo $box['Email']; ?></p>
                                    
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

            <?php
            }
            ?>
        </div>

    </div>
</section>



<?php
include '../modulos/footer.php';
?>