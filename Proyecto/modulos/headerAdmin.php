
<?php
session_start();

if (isset($_SESSION['username'])) {
   
    $nombre_de_usuario = $_SESSION['username'];

    // Verificar si el nombre y el apellido están disponibles en la sesión
    if (isset($_SESSION['nombre']) && isset($_SESSION['apellido'])) {
       
        $nombre = $_SESSION['nombre'];
        $apellido = $_SESSION['apellido'];
    } else {
        $nombre = "Nombre";
        $apellido = "Apellido";
    }
    if (isset($_SESSION['email'])) {
        $email = $_SESSION['email'];
    } else {
        
        $email = "Email";
    }
    // Verificar si el userType está disponible en la sesión
    if (isset($_SESSION['userType'])) {
        $userType = $_SESSION['userType'];
    } else {
        $userType = "Tipo de usuario";
    }
} else {
    
    $nombre_de_usuario = null;
    $nombre = "Nombre";
    $apellido = "Apellido";
    $userType = "Tipo de usuario";
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/calendario.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="icon" href="../img/logo_bueno.jpg" type="image/x-icon">


    <!-- JS para iconos del pie de página -->
    <script src="https://kit.fontawesome.com/79fad8c5f9.js" crossorigin="anonymous"></script>


    <!-- Script JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
    <script src="//cdn.jsdelivr.net/npm/fullcalendar@6.1.11/index.global.min.js"></script>
   



    <!-- Librerias -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Inmortal Warriors</title>
</head>

<body>
    <div class="d-flex flex-column general">
        <nav class="navbar navbar-expand-sm navbar-light  sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#" title="link">
                    <img src="../img/logo_bueno.jpg" width="40px" title="img">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="inicioAdmin.php" class="nav-link active text-dark" aria-current="page">Inicio</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownClases" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Clases
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownClases">
                                <li><a class="dropdown-item" href="clases.php">Crear Clases</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <!-- Opción Clases Creadas -->
                                <li><a class="dropdown-item" href="clasesCreadas.php">Clases Creadas</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="../admin/verUsuariosAdmin.php" class="nav-link text-dark">Usuarios</a>
                        </li>
                        <li class="nav-item">
                            <a href="../admin/wodsAdmin.php" class="nav-link text-dark">Wod´s</a>
                        </li>
                    </ul>
                </div>
                <a class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0 show" href="#" data-bs-toggle="dropdown" aria-expanded="true">
                        <img src="../img/OIG.dge.jpg" id="foto_perfil" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo $nombre . ' ' .$apellido; ?></span>
                    </a>

                    <ul class=" dropdown-menu dropdown-menu-end dropdown-menu-arrow profile " data-popper-placement="bottom-end">
                        <li class="dropdown-header">
                            <h6><?php echo $nombre . ' ' .$apellido; ?></h6>
                            <span><?php echo $userType; ?></span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="../admin/perfilAdmin.php">
                                <i class="bi bi-person"></i>
                                <span>Mi perfil</span>
                            </a>
                        </li>

                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="../index.php">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Salir</span>
                            </a>
                        </li>

                    </ul>
                </a>

            </div>
        </nav>