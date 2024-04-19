<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Panel de Administración</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
        <!-- Librerias -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

        <!-- Script JS -->
    
        

</head>
<body>

<div class="container mt-5">
    <div class="d-flex justify-content-between">
        <h1>Panel de Administración</h1>
        <a class="btn btnGlobal h-50" href="../index.php">Volver a la página principal</a>
    </div>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" id="usuarios-tab" data-toggle="tab" href="#mostrarBoxes">Boxes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="usuarios-tab" data-toggle="tab" href="#mostrarUsuarios">Usuarios</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="solicitados-tab" data-toggle="tab" href="#boxesSolicitados">Boxes Solicitados</a>
        </li>
    </ul>

    <div class="tab-content mt-2">
        <div class="tab-pane fade show active" id="mostrarBoxes">
            <?php include('../CRUD/mostrarBoxes.php'); ?>
        </div>
        <div class="tab-pane fade" id="mostrarUsuarios">
            <?php include('../CRUD/mostrarUsuarios.php'); ?>
        </div>
        <div class="tab-pane fade" id="boxesSolicitados">
            <?php include('../CRUD/boxesSolicitados.php'); ?>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="panelAdministracion.js"></script>
</body>
</html>
