<?php include '../modulos/headerAdmin.php'; ?>

<div class="general container mt-5">
<a href="#" onclick="history.back();"  class=" btn  "><i class="bi  bi-arrow-left " ></i></a>
    <div class="row justify-content-center">
    
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    
                    Datos Generales
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre:</label>
                            <input type="text" class="form-control" id="nombre" value="<?php echo $nombre; ?>" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="apellidos" class="form-label">Apellidos:</label>
                            <input type="text" class="form-control" id="apellidos" value="<?php echo $apellido; ?>" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico:</label>
                            <input type="email" class="form-control" id="email" value="<?php echo $email; ?>" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="newPassword" class="form-label">Contraseña nueva:</label>
                            <input type="password" class="form-control" id="newPassword">
                        </div>
                        <div class="mb-3">
                            <label for="confirmPassword" class="form-label">Confirmar Contraseña:</label>
                            <input type="password" class="form-control" id="confirmPassword">
                        </div>
                        <button type="button" id="cambioContraseña" class="btnGlobal">Guardar Cambios</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../modulos/footer.php'; ?>
