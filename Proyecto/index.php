
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Script JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
<script src="js/index.js"></script>


<!-- Librerias -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Registro</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-light  sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/logo_bueno.jpg" width="40px">
            </a>
            <div>
                
                    <a href="login.php" class="ini-sesion">
                        <img src="img/usuario.png" alt="">
                        Iniciar sesión
                    </a>
                
                
            </div>
        </div>
    </nav>
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
                <ol class="carousel-indicators" id="hero-carousel-indicators">
                    <li data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true"></li>
                    <li data-bs-target="#heroCarousel" data-bs-slide-to="1" class=""></li>
                    <li data-bs-target="#heroCarousel" data-bs-slide-to="2" class=""></li>
                </ol>

                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active" id="carousel1" style="background-image: url('img/boxoutside.jpg');">
                        <div class="carousel-container">
                            <div class="carousel-content container">
                                <h2 class="animate__animated animate__fadeInDown">Bienvenido a la Fortaleza Inmortal
                                </h2>
                                <p class="animate__animated animate__fadeInUp">Inicia tu viaje hacia la grandeza.
                                    Bienvenido a Inmortal Warriors, donde la fuerza y la determinación se encuentran.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" id="carousel3" style="background-image: url('img/OIG.jpg');">
                        <div class="carousel-container">
                            <div class="carousel-content container">
                                <h2 class="animate__animated animate__fadeInDown">Desafía tus Límites en Inmortal
                                    Warriors</h2>
                                <p class="animate__animated animate__fadeInUp">Transforma tu cuerpo, eleva tu espíritu.
                                    En Inmortal Warriors, cada sesión es una oportunidad para superar tus límites.</p>

                            </div>
                        </div>
                    </div>
                    <div class="carousel-item " id="carousel2" style="background-image: url('img/OIG.E3CuaSTKz.jpg');">
                        <div class="carousel-container">
                            <div class="carousel-content container">
                                <h2 class="animate__animated animate__fadeInDown">Forjando Leyendas en la Comunidad
                                    Inmortal</h2>
                                <p class="animate__animated animate__fadeInUp">Forjando atletas, construyendo leyendas.
                                    Únete a la comunidad de Inmortal Warriors y descubre tu potencial.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>
                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>
            </div>
        </div>
    </section>
    <section class="mainSection d-flex mb-4">
            <div class="container">
                <div class="d-flex row justify-content-center my-2">
                    <!-- Tarjeta 1: Nuevo Administrador -->
                    <div class="col-md-4 tarjetasLanding my-2">
                        <div class="card h-100 shadow-lg p-3 mb-5 bg-white rounded">
                            <img src="img/box8.jpg" class="card-img-top" alt="Imagen Administrador">
                            <div class="card-body text-center">
                                <h4 class="titulo_cards_mains card-title">ÚNETE COMO BOX</h4>
                                <a href="#" class="btn btn-light botonesLanding stretched-link" data-bs-toggle="modal" data-bs-target="#contactModal">Contáctanos</a>
                            </div>
                        </div>
                    </div>
                    <!-- Tarjeta 2: Nuevo Alumno -->
                    <div class="col-md-4 tarjetasLanding my-2">
                        <div class="card h-100 shadow-lg p-3 mb-5 bg-white rounded">
                            <img src="img/OIP (2).jpg" class="card-img-top" alt="Imagen Alumno">
                            <div class="card-body text-center">
                                <h4 class="titulo_cards_mains card-title">REGISTRO DE ATLETAS</h4>
                                <a href="#" class="btn btn-light botonesLanding stretched-link" data-bs-toggle="modal" data-bs-target="#signupModal">Registrate</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
   
    <!-- modal registro admin de box -->
    <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="contactModalLabel">Contactanos</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-center align-items-center w-100 col-lg-10">
                    <form class="form-horizontal" id="contactForm"  method="post" action="">
                        <fieldset>
                            <div class="mx-4 mt-1 mb-2">
                                <h5>Datos del BOX:</h5>
                            </div>
                            <div class="form-group d-flex row justify-content-center align-items-center my-2">
                                <span class="col-md-1 col-lg-1 col-sm-1 col-1 col-xl-1 text-center"><i class="fa fa-home bigicon"></i></span>
                                <div class="col-md-8 col-lg-10 col-sm-8 col-8 col-xl-9">
                                    <input id="nombreBox" name="nombreBox" type="text" placeholder="Nombre del Box" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group d-flex row justify-content-center align-items-center my-2">
                                <span class="col-md-1 col-lg-1 col-sm-1 col-1 col-xl-1 text-center"><i class="fa fa-map-marker bigicon"></i></span>
                                <div class="col-md-8 col-lg-10 col-sm-8 col-8 col-xl-9">
                                    <input id="dirBox" name="dirBox" type="text" placeholder="Dirección" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group d-flex row justify-content-center align-items-center my-2">
                                <span class="col-md-1 col-lg-1 col-sm-1 col-1 col-xl-1 text-center"><i class="fa fa-map-marker bigicon"></i></span>
                                <div class="col-md-8 col-lg-10 col-sm-8 col-8 col-xl-9">
                                    <input id="localidadBox" name="localidadBox" type="text" placeholder="Localidad" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group d-flex row justify-content-center align-items-center ">
                                <span class="col-md-1 col-lg-1 col-sm-1 col-1 col-xl-1 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                <div class="col-md-8 col-lg-10 col-sm-8 col-8 col-xl-9">
                                    <input id="emailBox" name="correoBox" type="email" placeholder="Dirección de correo electrónico" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group d-flex row justify-content-center align-items-center my-2">
                                <span class="col-md-1 col-lg-1 col-sm-1 col-1 col-xl-1 text-center"><i class="fa fa-phone bigicon"></i></span>
                                <div class="col-md-8 col-lg-10 col-sm-8 col-8 col-xl-9">
                                    <input id="tlfnBox" name="telefonoBox" type="tel" placeholder="Número de teléfono" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group d-flex row justify-content-center align-items-center my-2">
                                <span class="col-md-1 col-lg-1 col-sm-1 col-1 col-xl-1 text-center"><i class="fa "></i></span>
                                <div class="col-md-8 col-lg-10 col-sm-8 col-8 col-xl-9">
                                    <textarea id="descripcionBox" name="descripcionBox" type="text" placeholder="Describenos tu Box" class="form-control" resizable="false" cols="20" rows="5" required></textarea>
                                </div>
                            </div>
                            <div class="form-group d-flex row justify-content-center align-items-center my-2">
                                <span class="col-md-1 col-lg-1 col-sm-1 col-1 col-xl-1 text-center"><i class="fa "></i></span>
                                <div class="col-md-8 col-lg-10 col-sm-8 col-8 col-xl-9">
                                    <input id="horarioBox" name="horarioBox" type="text" placeholder="Horario" class="form-control"  required></input>
                                </div>
                            </div>

                            <div class="mx-4 mt-4 mb-2">
                                <h5>Datos del Administrador:</h5>
                            </div>

                            <div class="form-group d-flex row justify-content-center align-items-center my-2">

                                <span class="col-md-1 col-lg-1 col-sm-1 col-1 col-xl-1 text-center"><i class="fa fa-user bigicon"></i></span>
                                <div class="col-md-8 col-lg-10 col-sm-8 col-8 col-xl-9">
                                    <input id="firstname" name="nombreAdmin" type="text" placeholder="Nombre" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group d-flex row justify-content-center align-items-center my-2">

                                <span class="col-md-1 col-lg-1 col-sm-1 col-1 col-xl-1 text-center"><i class="fa "></i></span>
                                <div class="col-md-8 col-lg-10 col-sm-8 col-8 col-xl-9">
                                    <input id="lname1" name="apellidosAdmin" type="text" placeholder="Apellidos" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group d-flex row justify-content-center align-items-center my-2">

                                <span class="col-md-1 col-lg-1 col-sm-1 col-1 col-xl-1 text-center"><i class="fa "></i></span>
                                <div class="col-md-8 col-lg-10 col-sm-8 col-8 col-xl-9">
                                    <input id="uname" name="usersAdmin" type="text" placeholder="Nombre de Usuario" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group d-flex row justify-content-center align-items-center my-2">

                                <span class="col-md-1 col-lg-1 col-sm-1 col-1 col-xl-1 text-center"><i class="fa fa-lock"></i></span>
                                <div class="col-md-8 col-lg-10 col-sm-8 col-8 col-xl-9">
                                    <input type="password" id="passAdmin" name="passAdmin" placeholder="Password" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group d-flex row justify-content-center align-items-center my-2">

                                <div class="col-md-12  text-center mt-3">
                                    <button id="formularioRegistro" type="submit" name="submit" class="btn botonesLanding btn-light btn-lg">Enviar</button>
                                </div>
                            </div>
                            <p class="text-center">*Te mandaremos un correo con la resolución de tu solicitud en unos minutos</p>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- modal registro alumno de centro -->
    <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="contactModalLabel">Registrarse</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" method="post" action="">
                        <fieldset>
                            <div class="form-group d-flex row justify-content-center align-items-center my-2">
                                <span class="col-md-1 col-lg-1 col-sm-1 col-1 col-xl-1 text-center"><i class="fa fa-user bigicon"></i></span>
                                <div class="col-md-8 col-lg-10 col-sm-8 col-8 col-xl-9">
                                    <input id="fname" name="name" type="text" placeholder="Nombre" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group d-flex row justify-content-center align-items-center my-2">
                                <span class="col-md-1 col-lg-1 col-sm-1 col-1 col-xl-1 text-center"><i class=" "></i></span>
                                <div class="col-md-8 col-lg-10 col-sm-8 col-8 col-xl-9">
                                    <input id="lname" name="lname" type="text" placeholder="Apellidos" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group d-flex row justify-content-center align-items-center my-2">
                                <span class="col-md-1 col-lg-1 col-sm-1 col-1 col-xl-1 text-center"><i class=" "></i></span>
                                <div class="col-md-8 col-lg-10 col-sm-8 col-8 col-xl-9">
                                    <input id="username" name="username" type="text" placeholder="Nombre de Usuario" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group d-flex row justify-content-center align-items-center my-2">
                                <span class="col-md-1 col-lg-1 col-sm-1 col-1 col-xl-1 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                                <div class="col-md-8 col-lg-10 col-sm-8 col-8 col-xl-9">
                                    <input id="emailAlumno" name="email" type="email" placeholder="Dirección de correo electrónico" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group d-flex row justify-content-center align-items-center my-2">
                                <span class="col-md-1 col-lg-1 col-sm-1 col-1 col-xl-1 text-center"><i class="fa fa-lock bigicon"></i></span>
                                <div class="col-md-8 col-lg-10 col-sm-8 col-8 col-xl-9">
                                    <input id="password" name="password" type="password" placeholder="Contraseña" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group d-flex row justify-content-center align-items-center my-2">
                                <span class="col-md-1 col-lg-1 col-sm-1 col-1 col-xl-1 text-center"><i class="fa fa-map-marker bigicon"></i></span>
                                <div class="col-md-8 col-lg-10 col-sm-8 col-8 col-xl-9">
                                    <select id="ciudades" name="city" class="form-select" aria-label="Default select example">
                                        <option disabled selected>Selecciona ciudad</option>
                                        <?php
                                        include 'CRUD/Conexion.php';
                                        $conexion = mysqli_connect($server, $user, $pass, $db);
                                        $sql = "SELECT * FROM boxes";
                                        $resultado = mysqli_query($conexion, $sql);
                                        $ubicacionAnterior = "";
                                        while ($row = mysqli_fetch_assoc($resultado)) {
                                            if ($row['Localidad'] != $ubicacionAnterior) {
                                                echo "<option value='" . $row['Localidad'] . "'>" . $row['Localidad'] . "</option>";
                                            }
                                            $ubicacionAnterior = $row['	Localidad'];
                                        }
                                        ?>
                                        
                                    </select>
                                </div>
                            </div>
                            <!-- HAY QUE REFACTORIZAR / ANALIZAR COMO SE MUESTRAN LOS CENTROS EN BASE A LA UBICACION -->
                            <div class="form-group d-flex row justify-content-center align-items-center my-2">
                                <span class="col-md-1 col-lg-1 col-sm-1 col-1 col-xl-1 text-center"><i class="fa fa-home bigicon"></i></span>
                                <div class="col-md-8 col-lg-10 col-sm-8 col-8 col-xl-9">
                                    <select class="form-select" name="box" id="boxes" aria-label="Default select example">
                                        <option selected>Selecciona tu Box</option>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 mt-4 mb-2 text-center">
                                    <button type="submit" id="formularioRegistroAlumnos" class="btn botonesLanding btn-light btn-lg">Registrarse</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    include 'modulos/footer.php';
    ?>