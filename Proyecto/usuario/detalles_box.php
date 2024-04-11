<?php
include '../modulos/header.php';
include '../CRUD/conexion.php';

// Obtener el ID del box desde la URL
$id_box = $_GET['id'];

// Consulta SQL para obtener la información detallada del box
$sql = "SELECT * FROM boxes WHERE ID_Boxes = $id_box";
$resultado = $conexion->query($sql);

// Verificar si se encontró el box
if ($resultado->num_rows > 0) {
    // Obtener los detalles del box
    $box = $resultado->fetch_assoc();
?>
<section class="py-5 bg-white general">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 d-flex align-items-stretch">
            <!-- Imagen del box -->
            <div class="col-lg-4">
                <img class="img-fluid rounded mb-4 mb-lg-0" src="../../img/<?php echo $box['Foto']; ?>" alt="...">
            </div>
            <!-- Datos del box -->
            <div class="col-lg-4">
                <div class="card border-0 shadow">
                    <div class="card-body p-4">
                        <h5 class="card-title"><?php echo $box['Nombre']; ?></h5>
                        <p class="card-text"><strong>Dirección:</strong> <?php echo $box['Direccion']; ?></p>
                        <p class="card-text"><strong>Teléfono:</strong> <?php echo $box['Telefono']; ?></p>
                        <p class="card-text"><strong>Localidad:</strong> <?php echo $box['Localidad']; ?></p>
                        <p class="card-text"><strong>Descripción:</strong> <?php echo $box['Descripcion']; ?></p>
                        <p class="card-text"><strong>Horario:</strong> <?php echo $box['Horario']; ?></p>
                        <p class="card-text"><strong>Email:</strong> <?php echo $box['Email']; ?></p>
                    </div>
                </div>
            </div>
            <!-- Mapa -->
            <div class="col-lg-4">
                <div class="card border-0 shadow" id="map_<?php echo $box['ID_Boxes']; ?>" style="height: 400px;"></div>
            </div>
        </div>
    </div>
</section>

<script>
function initMap() {
    let box_<?php echo $box['ID_Boxes']; ?> = { lat: <?php echo $box['Latitud']; ?>, lng: <?php echo $box['Longitud']; ?> };
    let map_<?php echo $box['ID_Boxes']; ?> = new google.maps.Map(document.getElementById('map_<?php echo $box['ID_Boxes']; ?>'), {
        zoom: 15,
        center: box_<?php echo $box['ID_Boxes']; ?>,
    });
    let marker_<?php echo $box['ID_Boxes']; ?> = new google.maps.Marker({
        position: box_<?php echo $box['ID_Boxes']; ?>,
        map: map_<?php echo $box['ID_Boxes']; ?>,
    });
}

// Llama a la función initMap cuando el DOM esté cargado
google.maps.event.addDomListener(window, 'load', initMap);
</script>
<?php
} else {
    // Si no se encuentra el box
    echo "No se encontró información del box.";
}

include '../modulos/footer.php';
?>
