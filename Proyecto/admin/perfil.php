<?php
include '../modulos/headerAdmin.php';
?>
        </nav>
        <section class=" bg-white" id="opciones-perfil">
            <div class="container mt-5">
                <div class="row">
                    <div class="perfil col-md-6 col-lg-4  mb-4">
                        <a href="general.php" class="image-container">
                            <img src="../img/perfil.jpg" class="img-thumbnail" alt="...">
                            <div class="overlay-text">
                                General
                            </div>
                        </a>
                    </div>
                    <div class="perfil col-md-6 col-lg-4  mb-4">
                        <a href="prs.php" class="image-container">
                            <img src="../img/prs.jpg" class="img-thumbnail" alt="...">
                            <div class="overlay-text">
                                PR`S
                            </div>
                        </a>
                    </div>
                    <div class="perfil col-md-6 col-lg-4  mb-4">
                        <a href="calendario.php" class="image-container">
                            <img src="../img/calendario.jpg" class="img-thumbnail" alt="...">
                            <div class="overlay-text">
                                Calendario
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </section>

        <?php 
include '../modulos/footer.php';
?>