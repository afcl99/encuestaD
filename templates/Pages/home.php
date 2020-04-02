<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.10.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$this->disableAutoLayout();

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace templates/Pages/home.php with your own version or re-enable debug mode.'
    );
endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>


<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="css/bootstrap.min.css?h=aad6187964b63c9cf13110b97da94f79">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin:700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://code.iconify.design/1/1.0.5/iconify.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home</title>
    <?php echo $this->Html->css('style');?>
    <?php $this->Html->css('bootstrap/bootstrap.min'); ?>
    
    <?php $this->Html->script('bootstrap/bootstrap.min'); ?>


</head>

<body id="page-top">
    <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        
        <h1><a href="#intro" class="scrollto">Dragones</a></h1>
        <!-- <a href="#intro"></div><img src="https://pngimage.net/wp-content/uploads/2018/06/logo-dragon-png-6.png" style="max-width:15%;width:auto;height:auto;"></a>  -->
         
      </div>      

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Inicio</a></li>
          <li><a href="#about">Quiénes Somos</a></li>
          <li><a href="#features">Características</a></li>
          
          <li><a href="#team">Team</a></li>
          <li><a href="#gallery">Video</a></li>          
            

          <li><a href="#contact">Contáctanos</a></li>
          <li><?= $this->Html->link('Iniciar Sesion', ['controller' => 'Users', 'action' => 'login', 'class' => 'nav-link active js-scroll-trigger']) ?></li></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Intro Section ======= -->
  <section id="intro">

    <div class="intro-text">
      <h2>Bienvenido a Encuestas.net</h2>
      <p>Somos los mejores dando resultados</p>
      <a href="#about" class="btn-get-started scrollto">Empecemos!</a>
    </div>

    <div class="product-screens">

      <div class="product-screen-1 wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="0.6s">
        <img src="assets/img/product-screen-1.png" alt="">
      </div>

      <div class="product-screen-2 wow fadeInUp" data-wow-delay="0.2s" data-wow-duration="0.6s">
        <img src="assets/img/product-screen-2.png" alt="">
      </div>

      <div class="product-screen-3 wow fadeInUp" data-wow-duration="0.6s">
        <img src="assets/img/product-screen-3.png" alt="">
      </div>

    </div>

  </section><!-- End Intro Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="section-bg">
      <div class="container-fluid">
        <div class="section-header">
          <h3 class="section-title">Quiénes Somos</h3>
          <span class="section-divider"></span>
          <p class="section-description">
            Somos una compañía especializada en encuestas, con capacidad de brindarle las herramientas necesarias para la elaboración, ejecución y análisis de encuestas personalizadas.
          </p>
        </div>

        <div class="row">
          <div class="col-lg-6 about-img wow fadeInLeft">
            <img src="assets/img/about-img.jpg" alt="">
          </div>

          <div class="col-lg-6 content wow fadeInRight">
            <h2>Realiza encuestas fácilmente!</h2>
            <h3>Nuestro sitio permite lograrlo gracias a su diseño intuitivo.</h3>
            <p>
              Elabora encuestas en poco tiempo, contamos con las mejores herramientas y tipos para un óptimo analisis.
            </p>

            <ul>
              <li><i class="ion-android-checkmark-circle"></i> Intuitivo.</li>
              <li><i class="ion-android-checkmark-circle"></i> Fácil.</li>
              <li><i class="ion-android-checkmark-circle"></i> Rápido.</li>
            </ul>

            <p>
              Te invito a probarlo. ¡Es gratis! 
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Featuress Section ======= -->
    <section id="features">
      <div class="container">

        <div class="row">

          <div class="col-lg-8 offset-lg-4">
            <div class="section-header wow fadeIn" data-wow-duration="1s">
              <h3 class="section-title">Características</h3>
              <span class="section-divider"></span>
            </div>
          </div>

          <div class="col-lg-4 col-md-5 features-img">
            <img src="assets/img/product-features.png" alt="" class="wow fadeInLeft">
          </div>

          <div class="col-lg-8 col-md-7 ">

            <div class="row">

              <div class="col-lg-6 col-md-6 box wow fadeInRight">
                <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
                <h4 class="title"><a href="">Fácil y Rápido</a></h4>
                <p class="description">Las encuestas son fáciles y rápidas de elaborar.</p>
              </div>
              <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.1s">
                <div class="icon"><i class="ion-ios-flask-outline"></i></div>
                <h4 class="title"><a href="">Confiable</a></h4>
                <p class="description">Tenemos la mayor variedad de herramientas para trabajar.</p>
              </div>
              <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.2s">
                <div class="icon"><i class="ion-social-buffer-outline"></i></div>
                <h4 class="title"><a href="">Seguro</a></h4>
                <p class="description">Contamos con los mejores estándares de seguridad.</p>
              </div>
              <div class="col-lg-6 col-md-6 box wow fadeInRight" data-wow-delay="0.3s">
                <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
                <h4 class="title"><a href="">Precisión</a></h4>
                <p class="description">Los datos obtenidos son representados de la forma mas sencilla y precisa posible.</p>
              </div>
            </div>

          </div>

        </div>

      </div>

    </section><!-- End Featuress Section -->

    <!-- ======= Advanced Featuress Section ======= -->
    <section id="advanced-features">

      <div class="features-row">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <img class="advanced-feature-img-left" src="assets/img/advanced-feature-2.jpg" alt="">
              <div class="wow fadeInRight">
                <h2>¡Elabora las mejores encuestas!</h2>
                <i class="ion-ios-paper-outline" class="wow fadeInRight" data-wow-duration="0.5s"></i>
                <p class="wow fadeInRight" data-wow-duration="0.5s">Ponte cómodo desde cualquier lugar, pordrás elaborar las encuestas de forma profesional en cualquier sitio.</p>
                <i class="ion-ios-color-filter-outline wow fadeInRight" data-wow-delay="0.2s" data-wow-duration="0.5s"></i>
                <p class="wow fadeInRight" data-wow-delay="0.2s" data-wow-duration="0.5s">Gráficos especializados para que obtengas informacion de forma clara, rápida y precisa.</p>
                <i class="ion-ios-barcode-outline wow fadeInRight" data-wow-delay="0.4" data-wow-duration="0.5s"></i>
                <p class="wow fadeInRight" data-wow-delay="0.4s" data-wow-duration="0.5s">Nuevo sistema de interaccion con los usuarios para un óptimo uso de nuestras herramientas, que estarán disponibles para tí las 24 horas.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="features-row section-bg">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <img class="advanced-feature-img-right wow fadeInRight" src="assets/img/advanced-feature-3.jpg" alt="">
              <div class="wow fadeInLeft">
                <h2>Información clara y rápida</h2>
                <h3>Te brindamos tranquilidad.</h3>
                <p>Hacemos uso de las mejores herramientas para el análisis de datos, sólo haz tu encuesta, las enviaremos a nuestros usuarios y obtendrás resultados precisos en tiempo real.</p>
                <i class="ion-ios-albums-outline"></i>
                <p>Puedes utilizar diferentes tipos de gráficos: Pastel, Barras, curvas, todo para brindarte la mejor información para que tomes las mejores decisiones.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Advanced Featuress Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">¡Pruebalo ya!</h3>
            <p class="cta-text"> Sientete libre de probarlo, ¡Es gratis!.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="Login.html?saludo=hola&texto=Selecciona Registrate para probarlo!">¡Pruebalo ahora!</a>
          </div>
        </div>

      </div>
    </section><!-- End Call To Action Section -->

    
    <!-- ======= Clients Section ======= -->
    <section id="clients">
      <div class="container">

        <div class="row wow fadeInUp">

          <div class="col-md-2">
            <img src="assets/img/clients/client-1.png"  alt="">
          </div>

          <div class="col-md-2">
            <img src="assets/img/clients/client-2.png" alt="">
          </div>  

          <div class="col-md-2">
            <img src="assets/img/clients/p.png" alt="">
          </div>   

        </div>
      </div>
    </section><!-- End Clients Section -->
    
    

    <!-- ======= Team Section ======= -->
    <section id="team" class="section-bg">
      <div class="container">
        <div class="section-header">
          <h3 class="section-title">Nuestro Team</h3>
          <span class="section-divider"></span>
          <p class="section-description">Somos un equipo de lo mejor</p>
        </div>
        <div class="row wow fadeInUp">
          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/team/D.jpg" alt=""></div>
              <h4>Diego Ferney Rojas</h4>
              <span>CEO</span>
              <div class="social">                
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><img src="assets/img/team/team-1.jpg" alt=""></div>
              <h4>Andrés Felipe Claros</h4>
              <span>Presidente ejecutivo</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><?php echo $this->Html->image('equipo/J.jpg');?></div>
              <h4>Jhonatan Ibarra</h4>
              <span>Presidente de Marketing</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="member">
              <div class="pic"><?php echo $this->Html->image('equipo/P.jpg');?></div>
              <h4>Pedro Nel Buesaquillo</h4>
              <span>CTO</span>
              <div class="social">
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-google-plus"></i></a>
                <a href=""><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery">
      <div class="container-fluid">
        <div class="section-header">
          <h3 class="section-title">Video</h3>
          <span class="section-divider"></span>
          <p class="section-description">A continuación hay un video de nuestro portafolio</p>
        </div>

        <div style="text-align:center;"></div><style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.youtube.com/embed/y1MLZOgCZow' frameborder='0' allowfullscreen></iframe></div>

      </div>
    </section><!-- End Gallery Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact">
      <div class="container">
        <div class="row wow fadeInUp">

          <div class="col-lg-4 col-md-4">
            <div class="contact-about">
              <h3>Contáctanos</h3>
              <p>Cras fermentum odio eu feugiat. Justo eget magna fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
              <div class="social-links">
                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="info">
              <div>
                <i class="ion-ios-location-outline"></i>
                <p>Universidad del Cauca<br>Popayán, Cauca</p>
              </div>

              <div>
                <i class="ion-ios-email-outline"></i>
                <p>info@example.com</p>
              </div>

              <div>
                <i class="ion-ios-telephone-outline"></i>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>
          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="form-row">
                  <div class="form-group col-lg-6">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Tu Nombre" data-rule="minlen:4" data-msg="Por favor introduce al menos 4 caracteres">
                    <div class="validate"></div>
                  </div>
                  <div class="form-group col-lg-6">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Tu email" data-rule="email" data-msg="Por favor introduce un email válido">
                    <div class="validate"></div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Por favor escribe al menos 8 caracteres">
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Por favor escribenos algo" placeholder="Mensaje"></textarea>
                  <div class="validate"></div>
                </div>
                <div class="mb-3">
                  <div class="loading">Cargando</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Tu mensaje ha sido enviado, gracias!</div>
                </div>
                <div class="text-center"><button type="submit" title="Send Message">Enviar Mensaje</button></div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <strong>Dragones</strong>. Todos los derechos reservados
          </div>
          <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Avilon
          -->
            <!--Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>  -->
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="#intro" class="scrollto">Inicio</a>
            <a href="#about" class="scrollto">Sobre Nosotros</a>
            <a href="#">Políticas de uso</a>
            <a href="#">Terminos de uso</a>
          </nav>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/wow/wow.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/superfish/superfish.min.js"></script>
  <script src="assets/vendor/hoverIntent/hoverIntent.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>