<?php
$proyecto = $_GET["proyecto"];
$empresa = $_GET["e"];
$nombre = $_GET["n"];
$web = $_GET["w"];
$red = $_GET["r"];

$pais = $_GET["p"]; //desde la url

//busco el nro de pid
$pidunicavez = (int) filter_var($proyecto, FILTER_SANITIZE_NUMBER_INT);


// le pongo currency a cada pais, defecto dolar
switch ($pais)
{
    case "Argentina":
        $c = 10;
    break;
    case "Colombia":
        $c = 3;
    break;
    case "Peru":
        $c = 5;
    break;
    case "Uruguay":
        $c = 7;
    break;
    case "Spain":
        $c = 6;
    break;
    case "Chile":
        $c = 2;
    break;
    case "Mexico":
        $c = 4;
    break;
    default:
        $c = 1;

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Presupuesto Web</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="favicon.ico" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="assets/css/wasap.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bootslander - v4.7.2
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.html"><span>Presupuesto Web</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

     <!-- <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#features">Features</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>--><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">

    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1>Presupuesto  para llevar

              <?php
              if (is_null($web))
{
    echo "su sitio web";
}
else
{
    echo $web;
}
?>


                a nivel <span>Profesional</span></h1>
            <h2>Obtenga un equipo de mas de 20 años de experiencia, y usted dedique a su negocio el recurso mas valioso, tiempo.</h2>

          </div>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="assets/img/mobile.png" class="img-fluid animated" alt="">
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

  </section><!-- End Hero -->

  <main id="main">
  


<!-- SITIO WEB  -->
        <div class="row content">
          <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="assets/img/details-2.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">

            <?php if (strpos($proyecto, 'mi') !== false): ?>

                <h3>Haremos una web, migrando contenido de
                   <?php // se su sitio web, la nombro
    if (is_null($web))
    {
        echo 'su sitio web anterior';
    }
    else
    {
        echo $web;
    }
?>

                </h3>


          <?php
elseif (strpos($proyecto, 'ha') !== false): ?>

              <h3>Haremos una Nueva web, con estetica y contenido que desee</h3>

          <?php
elseif (strpos($proyecto, 'po') !== false): ?>
             POTENCIAMOS SU WEB
          <?php
endif; ?>





            <p class="fst-italic">
              Dentro de un nuevo sitio web y moderna estetica, los contenidos serán <em>Autoadministrables</em> una vez finalizado la web.
            </p>
            <p>
              <strong>Motor de web 2024</strong>: El sitio web tendrá una estatica moderna adaptable a todos los telefonos y compatible con los estandares de la industria para posicionarse mejor en Google.
            </p>
            <p>
              <strong>Contenido</strong>: Las fotos, textos , videos y links hacia sus redes sociales seran actualizados, mantiendo lo que sirve del sitio web anterior, descartando lo que no sea conveniente y agregando las novedades con frecuencia.
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="assets/img/details-3.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5" data-aos="fade-up">
            <h3>Integración con Whatsapp, redes sociales y más</h3>
            <p>Vincularemos su sitio web para potenciar sus redes sociales y viceversa. El trafico entrante sale hacia redes y el que viene de redes, lo captamos con la web</p>
            <ul>
              <li><i class="bi bi-check"></i> En un link podrán enviar whatsapp a la empresa.</li>
              <li><i class="bi bi-check"></i> Lo que publique en sus redes, aparecerá automáticamente dentro de su web.</li>
              <li><i class="bi bi-check"></i> Con tantas redes y contenido esto es bueno ahorrando valioso <strong>tiempo</strong>.</li>
            </ul>
            <p>
                Tambien podrán sus visitantes dejar su email asi usted forma una base de emails, para envio de novedades, promos y mucho más.
            </p>
            <p>
            Asi tambien si desea se pueden integrar con sistemas a medida, webmail, intranets corporativas o lo que desee.

            </p>
          </div>
        </div>

<!-- ARRANCA EL 3ER BLOQUE -->

   <!-- migracion -->



            <?php if (strpos($proyecto, 'mi') !== false): ?>

              <div class="row content">
                <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
                  <img src="assets/img/details-4.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">

              <h3>Servicio de Mejora de sitio web</h3>
              <p class="fst-italic">
                Hacemos un sitio mucho mas veloz, para posicionarlo en mejores posiciones entre su competencia
              </p>
              <p>
                Analizamos su sitio mediante GTMETRIX y otras herramientas similares para optimizarlo en velocidad y rendimiento.
              </p>
              <ul>
                <li><i class="bi bi-check"></i> LLevaremos a nivel verde su sitio web .</li>
                <li><i class="bi bi-check"></i> Estrategia de crecimiento de contenidos y redes..</li>
                <li><i class="bi bi-check"></i> De atraer visitas a convertir los leads en clientes.
              Trabajamos soluciones que completan y automatizan el funnel de ventas de las empresas.</li>

              <p>Imagina que cada cliente potencial que llega al sitio web encuentra un sistema automatizado que personaliza el contenido, captura y filtra el lead, lo cualifica, identifica cuando está listo para comprar, envía una oferta personalizada y lo deriva al equipo comercial para que cierre la venta. Así es como funcionan los sistemas de automatización de marketing
              </p>
              </ul>


   <!-- potenciar -->


          <?php  elseif (strpos($proyecto, 'po') !== false): ?>
            <div class="row content">
              <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
                <img src="assets/img/details-4.png" class="img-fluid" alt="">
              </div>
              <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">


            <h3>Servicio de Publicidad - Google Ads - Meta Ads</h3>
            <p class="fst-italic">
              Podemos manejar sus redes sociales, google ads, para generar un trafico cualificado para llegar a sus objetivos comerciales.
            </p>
            <p>
              Construimos sistemas de captación de clientes online eficientes, respaldados con datos, escalables mediante automatización y optimizados con analítica avanzada.
            </p>
            <ul>
              <li><i class="bi bi-check"></i> Atraer visitas, capturar leads y cualificarlos como oportunidades de negocio .</li>
              <li><i class="bi bi-check"></i> Estrategia de CRM, formación y alineación de equipos de marketing y de ventas.</li>
              <li><i class="bi bi-check"></i> De atraer visitas a convertir los leads en clientes.
            Trabajamos soluciones que completan y automatizan el funnel de ventas de las empresas.</li>

            <p>Imagina que cada cliente potencial que llega al sitio web encuentra un sistema automatizado que personaliza el contenido, captura y filtra el lead, lo cualifica, identifica cuando está listo para comprar, envía una oferta personalizada y lo deriva al equipo comercial para que cierre la venta. Así es como funcionan los sistemas de automatización de marketing
            </p>
            </ul>

          <?php
              elseif (is_null($proyecto)): ?>
                          No hay mas detalles
                        <?php
              endif; ?>






          </div>
        </div>

      </div>
    </section><!-- End Details Section -->





<!-- EMPIEZAN LOS PRECIOS -->



<!-- ======= COSTOS por unica vez======= -->



<section id="pricing" class="pricing">
  <div class="container">

<h2>Glosario en Presupuesto debajo:</h2>

<p><strong>Dominio: </strong>es el nombre del sitio web, (ejemploalgoasi.com) es como la chapita de la direcci&oacute;n en la puerta de tu tienda. <span style="text-decoration: underline;"> Costo Anual</span><strong><br /></strong></p>
<p><strong>Hosting</strong>: es el alquiler del local necesario para tener el sitio web al aire las 24 horas. <span style="text-decoration: underline;">Costo Anual</span></p>
<p><strong>Webmaster</strong>: es el encargado de mantener y actualizar el sitio web una vez finalizado el trabajo.  </p>
<p><strong>Setup / Alta</strong>: es un costo por unica vez para hacer ciertos trabajos como rehacer una web. </p>
 
</br></br></br>


                <div class="section-title" data-aos="fade-up">
                  <h2><script language="javascript" src="https://www.paneldecliente.com/feeds/productsinfo.php?pid=<?php echo $pidunicavez; ?>&get=name"></script></h2>
                  <p> Costo por única vez </p>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
                  <div class="box" data-aos="zoom-in" data-aos-delay="200">
                    <h3><script language="javascript" src="https://www.paneldecliente.com/feeds/productsinfo.php?pid=<?php echo $pidunicavez; ?>&get=name"></script></h3>
                    <h4>


                       <script language="javascript" src="https://www.paneldecliente.com/feeds/productpricing-unicavez.php?pid=<?php echo $pidunicavez; ?>&get=price&currency=<?php echo $c; ?>"></script><br><span>  por única vez</span></h4>

                      <ul>
                     <script language="javascript" src="https://www.paneldecliente.com/feeds/productsinfo.php?pid=<?php echo $pidunicavez; ?>&get=description"></script>
                      </ul>


                  </div>
                </div>





  <!-- ======= TITULOS HOSTING ======= -->


  <section id="pricing" class="pricing">
    <div class="container">

            <!-- precio hosting pyme -->
                <?php if (strpos($proyecto, 'py') !== false): ?>

                  <div class="section-title" data-aos="fade-up">
                    <h2>Alojamiento de su sitio web</h2>
                    <p>+ Hosting </p>
                  </div>

                  <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
                    <div class="box" data-aos="zoom-in" data-aos-delay="200">
                      <h3>Hosting pyme * Bonificado 4 meses</h3>
                    <strike>  <h4> <script language="javascript" src="https://www.paneldecliente.com/feeds/productsinfo.php?pid=8&get=price&billingcycle=annually&currency=<?php echo $c; ?>"></script><br><span>  anual</span></h4>
</strike>
                        <ul>
                       <script language="javascript" src="https://www.paneldecliente.com/feeds/productsinfo.php?pid=8&get=description"></script>
                        </ul>


                    </div>
                  </div>



<!-- precio hosting Mediano -->

<?php
elseif (strpos($proyecto, 'me') !== false): ?>

              <div class="section-title" data-aos="fade-up">
                <h2>Alojamiento de su sitio web</h2>
                <p>+ Hosting </p>
              </div>

              <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
                <div class="box" data-aos="zoom-in" data-aos-delay="200">
                  <h3>Hosting * Bonificado 4 meses</h3>
                <strike>  <h4> <script language="javascript" src="https://www.paneldecliente.com/feeds/productsinfo.php?pid=35&get=price&billingcycle=annually&currency=<?php echo $c; ?>"></script><br><span>  anual</span></h4>
</strike>
                    <ul>
                   <script language="javascript" src="https://www.paneldecliente.com/feeds/productsinfo.php?pid=35&get=description"></script>
                    </ul>


                </div>
              </div>

            <!-- precio hosting corporativo -->

          <?php
elseif (strpos($proyecto, 'co') !== false): ?>

                          <div class="section-title" data-aos="fade-up">
                            <h2>Alojamiento de su sitio web</h2>
                            <p>+ Hosting </p>
                          </div>

                          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
                            <div class="box" data-aos="zoom-in" data-aos-delay="200">
                              <h3>Hosting *Bonificado 4 meses</h3>
                            <strike>  <h4> <script language="javascript" src="https://www.paneldecliente.com/feeds/productsinfo.php?pid=9&get=price&billingcycle=annually&currency=<?php echo $c; ?>"></script><br><span>  anual</span></h4>
                            </strike>
                          <li>
                                <ul>
                               <script language="javascript" src="https://www.paneldecliente.com/feeds/productsinfo.php?pid=9&get=description"></script>
                                </ul>
                              </li>

                            </div>
                          </div>

                        <?php
endif; ?>
<BR>



  <!-- ======= FIN PRECIOS HOSTING ======= -->

<BR>

        <div class="section-title" data-aos="fade-up">
          <h2>Una empresa dedicada a su web</h2>
          <p>+ Mantenimiento de Webmaster</p>
        </div>

        <div class="row" data-aos="fade-left">

                      <!-- precio webmaster pyme -->
                          <?php if (strpos($proyecto, 'py') !== false): ?>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="200">
              <h3>Solo Mantenimiento</h3>
              <h4> <script language="javascript" src="https://www.paneldecliente.com/feeds/productsinfo.php?pid=17&get=price&billingcycle=annually&currency=<?php echo $c; ?>"></script><br><span>  anual</span></h4>
              <ul>
                <ul>
               <script language="javascript" src="https://www.paneldecliente.com/feeds/productsinfo.php?pid=17&get=description"></script>
                </ul>
              </ul>
              <div class="btn-wrap">
              <a target="_blank" href="https://www.paneldecliente.com/cart.php?a=add&pid=17&billingcycle=annually&currency=<?php echo $c; ?>" class="btn-buy">Comprar</a>
              </div>
            </div>
          </div>

          <?php
          elseif (strpos($proyecto, 'me') !== false): ?>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box featured" data-aos="zoom-in" data-aos-delay="300">
              <h3>Empresas</h3>
              <h4><script language="javascript" src="https://www.paneldecliente.com/feeds/productsinfo.php?pid=18&get=price&billingcycle=annually&currency=<?php echo $c; ?>"></script><br><span>  Anual</span></h4>
              <ul>
               <script language="javascript" src="https://www.paneldecliente.com/feeds/productsinfo.php?pid=18&get=description"></script>
              </ul>
              <div class="btn-wrap">
                <a target="_blank" href="https://www.paneldecliente.com/cart.php?a=add&pid=18&billingcycle=annually&currency=<?php echo $c; ?>" class="btn-buy">Comprar</a>
              </div>
            </div>
          </div>

          <!-- precio webmaster  corporativo -->

        <?php
        elseif (strpos($proyecto, 'co') !== false): ?>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="400">
              <span class="advanced">Advanced</span>
              <h3>Corporativo</h3>
              <h4><script language="javascript" src="https://www.paneldecliente.com/feeds/productsinfo.php?pid=19&get=price&billingcycle=annually&currency=<?php echo $c; ?>"></script><span>  Anual</span></h4>
              <ul>
               <script language="javascript" src="https://www.paneldecliente.com/feeds/productsinfo.php?pid=19&get=description"></script>
              </ul>
              <div class="btn-wrap">
                <a target="_blank"href="https://www.paneldecliente.com/cart.php?a=add&pid=19&billingcycle=annually&currency=<?php echo $c; ?>" class="btn-buy">Comprar</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->



    <?php
endif; ?>
<BR>





 
  <!-- ======= Footer ======= -->
  <footer id="footer">


    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Altomarketing</span></strong>. Todos los derechos reservados
      </div>
  <div class="credits">
        
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


	<a href="https://wa.me/14708231785?text=Quiero-Asesoramiento-Web" class="whatsapp" target="_blank"> <i class="fa fa-whatsapp whatsapp-icon"></i></a>
</body>

</html>