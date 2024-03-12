<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Panel de Administración</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h1>Panel de Administración</h1>

    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" id="usuarios-tab" data-toggle="tab" href="#mostrarBoxes">Boxes</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="gimnasios-tab" data-toggle="tab" href="#mostrarUsuarios">Usuarios</a>
        </li>
    </ul>

    <div class="tab-content mt-2">
        <div class="tab-pane fade show active" id="mostrarBoxes">
            <?php include('../CRUD/mostrarBoxes.php'); ?>
        </div>
        <div class="tab-pane fade" id="mostrarUsuarios">
            <?php include('../CRUD/mostrarUsuarios.php'); ?>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
