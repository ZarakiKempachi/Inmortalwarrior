<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Inicio</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-light  sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/logo_bueno.jpg" width="40px" title="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="inicio.html" class="nav-link active text-dark" aria-current="page">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="boxes.html" class="nav-link text-dark">Boxes</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="tecnicas.html" class="nav-link text-dark">Técnicas de Crossfit</a>
                    </li>
                    <li class="nav-item">
                        <a href="wods.html" class="nav-link text-dark">Wod´s</a>
                    </li>
                    <li class="nav-item">
                        <a href="eventos.html" class="nav-link text-dark">Eventos</a>
                    </li>
                </ul>
            </div>
            <a class="nav-item dropdown pe-3">

                <a class="nav-link nav-profile d-flex align-items-center pe-0 show" href="#" data-bs-toggle="dropdown"
                    aria-expanded="true">
                    <img src="img/foto_perfil.jpeg" id="foto_perfil" alt="Profile" class="rounded-circle">
                    <span class="d-none d-md-block dropdown-toggle ps-2">Alex Cortés</span>
                </a><!-- End Profile Iamge Icon -->

                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile "
                    style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(-16px, 38px, 0px);"
                    data-popper-placement="bottom-end">
                    <li class="dropdown-header">
                        <h6>Alex Cortés</h6>
                        <span>Atleta</span>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="perfil.html">
                            <i class="bi bi-person"></i>
                            <span>Mi perfil</span>
                        </a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>

                    <li>
                        <a class="dropdown-item d-flex align-items-center" href="landing.html">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Salir</span>
                        </a>
                    </li>

                </ul><!-- End Profile Dropdown Items -->
            </a>

        </div>
    </nav>
    include
    <footer id="footer" class="mt-3">
        <div class="container ">
            <div class="row">
                <div class="footer-info col-lg-4 col-md-6 ">
                    <div class="social-links mt-3">
                        <a href="#" class="twitter"><i class="bx bxl-twitter"><img src="img/facebook (1).png"
                                    alt=""></a>
                        <a href="#" class="facebook"><i class="bx bxl-facebook"><img src="img/youtube.png" alt=""
                                    srcset=""></a>
                        <a href="#" class="instagram"><i class="bx bxl-instagram"><img src="img/instagram.png"
                                    alt=""></a></a>
                        <a href="#" class="google-plus"><i class="bx bxl-discord"><img src="img/tik-tok.png"
                                    alt=""></a></a>
                        <a href="#" class="linkedin"><i class="bx bxl-linkedin"><img src="img/linkedin.png"
                                    alt=""></a></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="nombre-empresa ">
            <p>Inmortal Warriors</p>
        </div>
        <div class="inf-legal ">
            <a href="informacionLegal.html" class="infLegal">Información legal</a>
            <p>Copyright © 2023 InmortalWarriors.inc</p>
            <a href="politicaDePrivacidad.html" class="politicaPriv">Política de privacidad</a>
        </div>
    </footer>
</body>

</html>