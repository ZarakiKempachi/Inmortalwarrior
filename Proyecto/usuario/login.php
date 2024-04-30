<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <link rel="stylesheet" href="../css/login.css">
  <link rel="icon" href="img/logo_favi.jpg" type="image/x-icon">
  <link rel="stylesheet" href="../css/style.css">

  <title>Login</title>
</head>

<body>

  <div class="container">
    
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="login-cliente card border-0 shadow rounded-3 my-5" ">
          <div class="card-body p-4 p-sm-5">
            <div class="d-flex justify-content-center">
            <h5 class="card-title text-center mb-5 fw-light fs-5 text-light">Iniciar sesión</h5>
            <a class="close-button" href="../index.php"><img src="../img/cerrar.png" alt=""></a>
            </div>
            <form id="loginForm" method="post" action="">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nombreLogin" name="nombreLogin" placeholder="Vivaldi">
                <label for="floatingInput">Nombre de Usuario</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="passLogin" name="passLogin" placeholder="Password">
                <label for="floatingPassword">Contraseña</label>
              </div>

              <div class="form-check mb-3 text-light">
                <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                <label class="form-check-label" for="rememberPasswordCheck">
                  Recordar contraseña
                </label>
              </div>
              <div class="d-grid">
                <button class="btnGlobal text-uppercase fw-bold" id="btnLogin" type="submit">Iniciar sesión</button>
              </div>
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
<script src="../js/login.js"></script>

</html>