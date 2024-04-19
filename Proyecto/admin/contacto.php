<?php
include '../modulos/header.php'; 
?>

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
    <div class="form-group pb-3">
      <label for="mensaje">Mensaje</label>
      <textarea class="form-control" id="mensaje" name="mensaje" rows="3" required></textarea>
    </div>
    <button type="submit" id="enviarCorreo" class="btnGlobal">Enviar mensaje</button>
  </form>
</div>


<?php include '../modulos/footer.php'; ?>
