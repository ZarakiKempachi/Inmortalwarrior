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
    <script src="js/contacto.js"></script>


    <!-- Librerias -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Registro</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-light  sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
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

<div class="container mt-5 vh-100">
  <h1>Contacto</h1>
  <p>¡Estamos encantados de saber de ti! Por favor, completa el formulario a continuación y nos pondremos en contacto contigo lo antes posible.</p>

  <form method="post" action="">
    <div class="form-group">
      <label for="nombre">Nombre</label>
      <input type="text" class="form-control" id="nombre" name="nombre" required>
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="form-group">
      <label for="mensaje">Mensaje</label>
      <textarea class="form-control" id="mensaje" name="mensaje" rows="3" required></textarea>
    </div>
    <button type="submit" id="enviarCorreo" class="btn btn-primary">Enviar mensaje</button>
  </form>
</div>


<?php include 'modulos/footer.php'; ?>
