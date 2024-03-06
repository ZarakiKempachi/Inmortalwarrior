<?php
include 'modulos/header.php';
?>
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
                <ol class="carousel-indicators" id="hero-carousel-indicators">
                    <li data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true"></li>
                    <li data-bs-target="#heroCarousel" data-bs-slide-to="1" class=""></li>
                    <li data-bs-target="#heroCarousel" data-bs-slide-to="2" class=""></li>
                </ol>

                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active" id="carousel1"
                        style="background-image: url('img/boxoutside.jpg');">
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
    <section id="team" class="team">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-6 d-flex align-items-start">
              <div class="member aos-init aos-animate" data-aos="zoom-in">
                <div class="member-info text-center">
                  <h4 class="text-center"><strong>Noticias</h4></strong>
                  <span>Oihana Moya da positivo en los CrossFit Games</span>
                  <p>La alavesa Ohiana Moya ha dado positivo, según ha comunicado CrossFit Games, por Ostarine y Metabolitos de GW1516 en un test realizado en semifinales de la competición. </p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-start">
                <div class="member aos-init aos-animate" data-aos="zoom-in">
                  <div class="member-info text-center">
                    <h4 class="text-center"><strong>Ranking</h4></strong>
                    <span>Atletas Top</span>
                    <p>Box | Nombre | Peso | Edad   <br>               
                        Dragon box | Joaquin Perez | 85 kg | 25 años
                        Crossfit Altea | Laura Córdoba | 65 kg | 30 años
                        Regular Box | Samira Ramirez | 60 kg | 20 años
                    </p>
                  </div>
                </div>
              </div>
  
            <div class="col-lg-4 col-md-6 d-flex align-items-start">
              <div class="member aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                <div class="member-info text-center">
                  <h4 class="text-center"><strong>Movilidad</h4></strong>
                  <span>Muñecas</span>
                  <p>De rodillas al suelo, colocamos los antebrazos encima de la pelota o foam roller y rodamos desde codo a muñecas. <br>En posición de cuadrupedia movilizamos nuestras muñecas con el peso de nuestro cuerpo hacia delante y hacia atrás, hacia los lados o realizando círculos. También podemos apoyar el dorso de la mano. </p>
                  
                </div>
              </div>
            </div>
  
            
  
          </div>
  
        </div>
      </section>
      <?php 
include 'modulos/footer.php';
?>