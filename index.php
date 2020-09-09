<?php 
include_once 'Conexion.php';

$sql = 'SELECT * FROM arte';
$sentencia = $pdo->prepare($sql);
$sentencia->execute();

//$resultado= $sentencia->fetchAll();

//var_dump($resultado);

 ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CovidTest</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- icono de la app -->
  <link href="assets/img/logotipo.jpg" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="index.html"><span>CovidTest</span></a></h1>
 
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header">Inicio</a></li>
          <li><a href="#servicios">Servicios</a></li>
          <li><a href="#counts">Cifras actuales</a></li>
          <li><a href="#nosotros">Nosotros</a></li>
          <li><a href="#preguntas">Preguntas Frecuentes</a></li>
          <li><a href="http://dchang.atwebpages.com/login.php">Login</a></li>

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Primera sección ======= -->
  <section id="hero">

    <div class="container">
      <div class="row">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1><span>CovidTest</span></h1>
            <h2>Quédate en casa</h2>
            <div class="text-center text-lg-left">
              <a href="#about" class="btn-get-started scrollto">Nuestros servicios</a>
            </div>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="assets/img/pantalla.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- Termina presentación -->

  <main id="main">

    <!-- ======= Segunda sección ======= -->
    <section id="servicios" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
            <a href="https://www.youtube.com/watch?v=TJsMeDEJRGE" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
            <h3>Un aplicativo nuevo en respuesta al COVID 19</h3>
            <p>En esta app damos servicio de triaje diario</p>
            
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Encuentra el hospital más cercano</a></h4>
              <p class="description">Podrá encontrar todos los hospitales más cercanos a usted</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Realice su triaje diario</a></h4>
              <p class="description">Almacenaremos su triaje diario para una mejor control de su estado de salud</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">Obtén una identificación de salud</a></h4>
              <p class="description">Obtén un código QR donde se podrá verificar tu estado de salud</p>
            </div>
                <br/><br/><br/><br/>

          </div>
        </div>

      </div>
    </section><!-- Término de la segunda sección -->


    <!-- ======= TERCERA SECCIÓN ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row" data-aos="fade-up">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="icofont-test-tube"></i>
              <span data-toggle="counter-up">13,489</span>
              <p>Pacientes Confirmados</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="icofont-medical-sign"></i>
              <span data-toggle="counter-up">1,219</span>
              <p>Pacientes Hospitalizados</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-patient-bed"></i>
              <span data-toggle="counter-up">137</span>
              <p>Pacientes en UCI</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-aids"></i>
              <span data-toggle="counter-up">300</span>
              <p>Fallecidos</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- TERMINO DE TERCERA SECCIÓN -->

    <!-- ======= Sección de los detalles ======= -->
    <section id="nosotros" class="features">
      <div class="container">

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="assets/img/details-1.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-4" data-aos="fade-up">
            <h3>Quédate en casa, que nosotros harémos el resto</h3>
            <p class="font-italic">
              Nuestro aplicativo pensando en usted, hemos diseñado las siguientes características para tener un máximo control y detección del virus COVID 19
            </p>
            <ul>
              <li><i class="icofont-check"></i> Triaje diario, donde usted podrá ver sus resultados.</li>
              <li><i class="icofont-check"></i> Infórmese sobre los consejos diarios que publicamos en la app.</li>
              <li><i class="icofont-check"></i> Ubique el hospital más cercano para poder atenderlo.</li>
              <li><i class="icofont-check"></i> Llámenos a nuestras líneas de servicio si detecta algún problema en su salud.</li>
              <li><i class="icofont-check"></i> Manténgase informado de las cifras actuales sobre los casos de COVID 19 en Perú.</li>
            </ul>
           
          </div>
        </div>

        

        <div class="row content">
          <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="assets/img/details-3.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5" data-aos="fade-up">
            <h3>Qué esperas, descarga nuestra app y ayúdanos en esta lucha</h3>
            <p>Recuerda que tienes registrar tus síntomas en el triaje virtual que se te aperturará.</p><br/>
            <p>Además, no te olvides en revisar toda la información relacionada al coronavirus para evitar su propagación</p>           
            <br/>
            <p>Tu registro, nos hará mantener una mejor base de datos sobre esta enfermadad para poder enfrentarla juntos.</p>
          </div>
        </div>

    </section><!-- Finalizar detalles -->

    <!-- ======= Sección de preguntas ======= -->
    <section id="preguntas" class="faq section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          
          <p>Preguntas Frecuentes</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#faq-list-1">¿El triaje que realizan es rápido? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                <p>
                  Claro que sí, solo deben responder el cuestionario que se le brinda en la app.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed">¿Tiene algún costo la descarga de la app? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                <p>
                  No tiene ningún costo la descarga de la app ni tampoco el uso de sus funcionalidades.
                  </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3" class="collapsed">¿Qué tan fiable es el triaje que realizan? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                <p>
                  El triaje que realizamos fueron examinadas por un médico y además se aplica inteligencia artificial para brindar un mejor diagnóstico.
                  </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-4" class="collapsed">¿Por qué piden datos personales en la app? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-parent=".faq-list">
                <p>
                  Se piden datos personales para tener una base de datos actualizada de los pacientes que están usando la app, como también para una mejora futura de la inteligencia artificial que se usa.
                  </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-5" class="collapsed">¿Debería usar los códigos QR como método de seguridad en mi empresa?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-parent=".faq-list">
                <p>
                  Claro que sí, sería de gran ayuda evitar el ingreso de personas que no tengan un código QR verde o sea que no presente síntomas de COVID 19
                  </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- Final de preguntas -->


  </main><!-- termina -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>CovidTest</span></strong>. Todos los derechos reservados
      </div>
      <div class="credits">
        Diseñado por Daniel Chang y Diego Torre
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>