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
    <title>Programas</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-light  sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/logo_bueno.jpg" width="40px">
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
    <section class="bg-white my-2">
        <div class="container mt-5 ">
            <h2 class="text-center">Progamas</h2>
            <div>
                <p>Aquí puedes encontrar todos los programas de entrenamiento.</p>
            </div>

            <div id="data-table-basic_filter" class="dataTables_filter"><label><input type="search" class=""
                        placeholder="Busca por nombre" aria-controls="data-table-basic"></label>
                        <button class="btn btn-secundary">Buscar</button>
            </div>
            <br>
            <div class="row" id="wodContainer">
                <div class="wods col-md-6 col-lg-4  mb-4">
                    <div class="p-4 bg-dark">
                        <h4 class="titulo-wods">21 Guns</h4>
                        <p>AMRAP in 21 minutes <br>
                            400 meter Run<br>
                            21 Push-ups<br>
                            21 Box Jumps<br>
                            15 Burpees<br>
                            9 Pull-ups</p>
                    </div>

                </div>
                <div class="wods col-md-6 col-lg-4  mb-4">
                    <div class="p-4 bg-dark">
                        <h4 class="titulo-wods">31 Heroes</h4>
                        <p>AMRAP in 21 minutes <br>
                            400 meter Run<br>
                            21 Push-ups<br>
                            21 Box Jumps<br>
                            15 Burpees<br>
                            9 Pull-ups</p>
                    </div>
                    </a>
                </div>
                <div class="wods col-md-6 col-lg-4  mb-4">
                    <div class="p-4 bg-dark">
                        <h4 class="titulo-wods">343</h4>
                        <p>AMRAP in 21 minutes <br>
                            400 meter Run<br>
                            21 Push-ups<br>
                            21 Box Jumps<br>
                            15 Burpees<br>
                            9 Pull-ups</p>
                    </div>
                    </a>
                </div>
                <div class="wods col-md-6 col-lg-4  mb-4">
                    <div class="p-4 bg-dark">
                        <h4 class="titulo-wods">9/11 Tribute Wod</h4>
                        <p>AMRAP in 21 minutes <br>
                            400 meter Run<br>
                            21 Push-ups<br>
                            21 Box Jumps<br>
                            15 Burpees<br>
                            9 Pull-ups</p>
                    </div>
                    </a>
                </div>
                <div class="wods col-md-6 col-lg-4  mb-4">
                    <div class="p-4 bg-dark">
                        <h4 class="titulo-wods">Abbate</h4>
                        <p>AMRAP in 21 minutes <br>
                            400 meter Run<br>
                            21 Push-ups<br>
                            21 Box Jumps<br>
                            15 Burpees<br>
                            9 Pull-ups</p>
                    </div>
                    </a>
                </div>
                <div class="wods col-md-6 col-lg-4  mb-4">
                    <div class="p-4 bg-dark">
                        <h4 class="titulo-wods">Adam</h4>
                        <p>AMRAP in 21 minutes <br>
                            400 meter Run<br>
                            21 Push-ups<br>
                            21 Box Jumps<br>
                            15 Burpees<br>
                            9 Pull-ups</p>
                    </div>
                </div>
            </div>
            <!-- -----------------------------------------------------------                  -->
            <div class="row" id="wodContainer">
                <div class="wods col-md-6 col-lg-4  mb-4">
                    <div class="p-4 bg-dark">
                        <h4 class="titulo-wods">asdasd</h4>
                        <p>AMRAP in 21 minutes <br>
                            400 meter Run<br>
                            21 Push-ups<br>
                            21 Box Jumps<br>
                            15 Burpees<br>
                            9 Pull-ups</p>
                    </div>

                </div>
                <div class="wods col-md-6 col-lg-4  mb-4">
                    <div class="p-4 bg-dark">
                        <h4 class="titulo-wods">asdasd</h4>
                        <p>AMRAP in 21 minutes <br>
                            400 meter Run<br>
                            21 Push-ups<br>
                            21 Box Jumps<br>
                            15 Burpees<br>
                            9 Pull-ups</p>
                    </div>

                </div>
                <div class="wods col-md-6 col-lg-4  mb-4">
                    <div class="p-4 bg-dark">
                        <h4 class="titulo-wods">343</h4>
                        <p>AMRAP in 21 minutes <br>
                            400 meter Run<br>
                            21 Push-ups<br>
                            21 Box Jumps<br>
                            15 Burpees<br>
                            9 Pull-ups</p>
                    </div>

                </div>
                <div class="wods col-md-6 col-lg-4  mb-4">
                    <div class="p-4 bg-dark">
                        <h4 class="titulo-wods">9/11 Tribute Wod</h4>
                        <p>AMRAP in 21 minutes <br>
                            400 meter Run<br>
                            21 Push-ups<br>
                            21 Box Jumps<br>
                            15 Burpees<br>
                            9 Pull-ups</p>
                    </div>

                </div>
                <div class="wods col-md-6 col-lg-4  mb-4">
                    <div class="p-4 bg-dark">
                        <h4 class="titulo-wods">Abbate</h4>
                        <p>AMRAP in 21 minutes <br>
                            400 meter Run<br>
                            21 Push-ups<br>
                            21 Box Jumps<br>
                            15 Burpees<br>
                            9 Pull-ups</p>
                    </div>

                </div>
                <div class="wods col-md-6 col-lg-4  mb-4">
                    <div class="p-4 bg-dark">
                        <h4 class="titulo-wods">Adam</h4>
                        <p>AMRAP in 21 minutes <br>
                            400 meter Run<br>
                            21 Push-ups<br>
                            21 Box Jumps<br>
                            15 Burpees<br>
                            9 Pull-ups</p>
                    </div>

                </div>
            </div>
            <!-- -----------------------------------------------------------                  -->
            <div class="row" id="wodContainer">
                <div class="wods col-md-6 col-lg-4  mb-4">
                    <div class="p-4 bg-dark">
                        <h4 class="titulo-wods">21 Guns</h4>
                        <p>AMRAP in 21 minutes <br>
                            400 meter Run<br>
                            21 Push-ups<br>
                            21 Box Jumps<br>
                            15 Burpees<br>
                            9 Pull-ups</p>
                    </div>

                </div>
                <div class="wods col-md-6 col-lg-4  mb-4">
                    <div class="p-4 bg-dark">
                        <h4 class="titulo-wods">31 Heroes</h4>
                        <p>AMRAP in 21 minutes <br>
                            400 meter Run<br>
                            21 Push-ups<br>
                            21 Box Jumps<br>
                            15 Burpees<br>
                            9 Pull-ups</p>
                    </div>

                </div>
                <div class="wods col-md-6 col-lg-4  mb-4">
                    <div class="p-4 bg-dark">
                        <h4 class="titulo-wods">343</h4>
                        <p>AMRAP in 21 minutes <br>
                            400 meter Run<br>
                            21 Push-ups<br>
                            21 Box Jumps<br>
                            15 Burpees<br>
                            9 Pull-ups</p>
                    </div>

                </div>
                <div class="wods col-md-6 col-lg-4  mb-4">
                    <div class="p-4 bg-dark">
                        <h4 class="titulo-wods">9/11 Tribute Wod</h4>
                        <p>AMRAP in 21 minutes <br>
                            400 meter Run<br>
                            21 Push-ups<br>
                            21 Box Jumps<br>
                            15 Burpees<br>
                            9 Pull-ups</p>
                    </div>

                </div>
                <div class="wods col-md-6 col-lg-4  mb-4">
                    <div class="p-4 bg-dark">
                        <h4 class="titulo-wods">Abbate</h4>
                        <p>AMRAP in 21 minutes <br>
                            400 meter Run<br>
                            21 Push-ups<br>
                            21 Box Jumps<br>
                            15 Burpees<br>
                            9 Pull-ups</p>
                    </div>

                </div>
                <div class="wods col-md-6 col-lg-4  mb-4">
                    <div class="p-4 bg-dark">
                        <h4 class="titulo-wods">Adam</h4>
                        <p>AMRAP in 21 minutes <br>
                            400 meter Run<br>
                            21 Push-ups<br>
                            21 Box Jumps<br>
                            15 Burpees<br>
                            9 Pull-ups</p>
                    </div>

                </div>
            </div>
            <!-- -----------------------------------------------------------                  -->
            <div class="row" id="wodContainer">
                <div class="wods col-md-6 col-lg-4  mb-4">
                    <div class="p-4 bg-dark">
                        <h4 class="titulo-wods">21 Guns</h4>
                        <p>AMRAP in 21 minutes <br>
                            400 meter Run<br>
                            21 Push-ups<br>
                            21 Box Jumps<br>
                            15 Burpees<br>
                            9 Pull-ups</p>
                    </div>

                </div>
                <div class="wods col-md-6 col-lg-4  mb-4">
                    <div class="p-4 bg-dark">
                        <h4 class="titulo-wods">31 Heroes</h4>
                        <p>AMRAP in 21 minutes <br>
                            400 meter Run<br>
                            21 Push-ups<br>
                            21 Box Jumps<br>
                            15 Burpees<br>
                            9 Pull-ups</p>
                    </div>

                </div>
                <div class="wods col-md-6 col-lg-4  mb-4">
                    <div class="p-4 bg-dark">
                        <h4 class="titulo-wods">343</h4>
                        <p>AMRAP in 21 minutes <br>
                            400 meter Run<br>
                            21 Push-ups<br>
                            21 Box Jumps<br>
                            15 Burpees<br>
                            9 Pull-ups</p>
                    </div>

                </div>
                <div class="wods col-md-6 col-lg-4  mb-4">
                    <div class="p-4 bg-dark">
                        <h4 class="titulo-wods">9/11 Tribute Wod</h4>
                        <p>AMRAP in 21 minutes <br>
                            400 meter Run<br>
                            21 Push-ups<br>
                            21 Box Jumps<br>
                            15 Burpees<br>
                            9 Pull-ups</p>
                    </div>

                </div>
                <div class="wods col-md-6 col-lg-4  mb-4">
                    <div class="p-4 bg-dark">
                        <h4 class="titulo-wods">Abbate</h4>
                        <p>AMRAP in 21 minutes <br>
                            400 meter Run<br>
                            21 Push-ups<br>
                            21 Box Jumps<br>
                            15 Burpees<br>
                            9 Pull-ups</p>
                    </div>

                </div>
                <div class="wods col-md-6 col-lg-4  mb-4">
                    <div class="p-4 bg-dark">
                        <h4 class="titulo-wods">Adam</h4>
                        <p>AMRAP in 21 minutes <br>
                            400 meter Run<br>
                            21 Push-ups<br>
                            21 Box Jumps<br>
                            15 Burpees<br>
                            9 Pull-ups</p>
                    </div>

                </div>
            </div>
                <!-- -----------------------------------------------------------                  -->
                <div id="pagination" class="text-center">
                    <button onclick="mostrarPagina(-1)" class="btn btn-secondary">Anterior</button>
                    <span id="paginaActual" class="mx-2">1</span>
                    <button onclick="mostrarPagina(1)" class="btn btn-secondary">Siguiente</button>
                </div>
            
        </div>
        </div>
    </section>
    
    </div>
<footer id="footer" >
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
<script src="js/index.js"></script>
</html>