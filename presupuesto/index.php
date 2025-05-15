<?php
// Obtener datos desde la URL
$proyecto = $_GET["proyecto"] ?? '';  // mi = migrar   ha = hacer  po = potenciar
//Nombre del cliente
$empresa = $_GET["e"] ?? '';
$nombre = $_GET["n"] ?? '';
$web = $_GET["w"] ?? '';
$red = $_GET["r"] ?? '';
$pais = $_GET["p"] ?? '';
// Obtener solo el número del proyecto
$pidunicavez = (int) filter_var($proyecto, FILTER_SANITIZE_NUMBER_INT);
// Configuración por país
$paises = [
    "Argentina" => ["codigo" => 8,   "cambio" => 1200, "moneda" => "ARS"],
    "Colombia"  => ["codigo" => 38,  "cambio" => 3900, "moneda" => "COP"],
    "Uruguay"   => ["codigo" => 152, "cambio" => 300,  "moneda" => "UYU"],
    "Spain"     => ["codigo" => 5,   "cambio" => 0.92, "moneda" => "EUR"],
    "Chile"     => ["codigo" => 36,  "cambio" => 950,  "moneda" => "CLP"],
    "Mexico"    => ["codigo" => 98,  "cambio" => 18,   "moneda" => "MXN"],
    "Default"   => ["codigo" => 1,   "cambio" => 1,    "moneda" => "USD"]
];
$config = $paises[$pais] ?? $paises["Default"];
$c = $config["codigo"];
$tipoDeCambio = $config["cambio"];
$moneda = $config["moneda"];
// Productos con descripción y precio
$productos = [
    "Hosting1" => [
        "precio" => 100,
        "descripcion" => "Plan básico de hosting para sitios pequeños."
    ],
    "Hosting2" => [
        "precio" => 250,
        "descripcion" => "Plan intermedio con más espacio y soporte."
    ],
    "BasicPlan" => [
        "precio" => 100,
        "descripcion" => "Incluye un webmaster para verificar que su web ande bien <br>.Webmaster: Actualización Semestralmente"
    ],
    "StandardPlan" => [
        "precio" => 200,
        "descripcion" => "Ideal para proyectos con tráfico medio.<br>Webmaster : 1 actualización Mensual<br>Soporte técnico : ✉ + Chat + WhatsApp"
    ],
    "PremiumPlan" => [
        "precio" => 400,
        "descripcion" => "Webmaster : Actualización Ilimitada, cuando ud quiera. <br>Soporte técnico : ✉ + 🗣 + Teléfono ."
    ],
    "VIP" => [
        "precio" => 700,
        "descripcion" => "Soporte personalizado y máxima velocidad."
    ],
    "OTRO" => [
        "precio" => 400,
        "descripcion" => "Paquete personalizado según tus necesidades."
    ]
];
// Catálogo que relaciona pidunicavez con nombre del producto
$catalogo = [
    19 => "Hosting Profesional",
    20 => "Hosting Empresa",
    120 => "BasicPlan",
    121 => "StandardPlan",
    122 => "PremiumPlan",
    6 => "VIP",
    7 => "OTRO"
];
// Verificar si el pid corresponde a un producto
if (isset($catalogo[$pidunicavez])) {
    $nombreProducto = $catalogo[$pidunicavez];
    $producto = $productos[$nombreProducto];
    $precioFinal = round($producto["precio"] * $tipoDeCambio);
} else {
    echo "Producto no encontrado para el código de proyecto: $pidunicavez";
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
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
           <!-- <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>-->
          </div>
           <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
            <h3>Obtendrá un Ejecutivo de cuentas dedicado a asesorarlo</h3>
            <p>Cada negocio es Particular. No es lo mismo B2B que B2C. Atendemos a grandes empresas y emprendedores. Y cada uno tienes sus propios objetivos, mercado y muchas variables que hacen que cada cliente sea conocido y asesorado de forma personalizada..</p>
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Personalización para
                      <?php
if (is_null($nombre))
{
    echo 'usted';
}
else
{
    echo $nombre;
}
?>
              </a></h4>
              <p class="description">Contara con un ejecutivo que lo asesorará en cada etapa de su crecimiento, conocerlo es nuestro primer paso</p>
            </div>
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Beneficios</a></h4>
              <p class="description">Tendrá descuentos y beneficios especiales que el ejecutivo podrá brindarle de manera personalizada.</p>
            </div>
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">Panel de Cliente</a></h4>
              <p class="description">Contará con un panel integrado para ver todos sus servicios, consultas, ya sea de manera particular o grupal, todo integrado en un simple panel.</p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->
    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Que brindamos</h2>
          <p>Nuestros servicios</p>
        </div>
        <div class="row" data-aos="fade-left">
          <div class="col-lg-3 col-md-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
              <i class="ri-store-line" style="color: #ffbb2c;"></i>
              <h3>Negocios Online</h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
              <h3>Estadisticas de Visitas</h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
              <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
              <h3>Identificacion de Leads </h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
              <h3>Mejoras estéticas</h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="250">
              <i class="ri-database-2-line" style="color: #47aeff;"></i>
              <h3>Bases Interactivas</h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
              <h3>Publicidad Segmentada</h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="350">
              <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
              <h3>Reportes detallados</h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
              <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
              <h3>Streaming</h3>
            </div>
          </div>
          </div>
        </div>
      </div>
    </section><!-- End Features Section -->
    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">
        <div class="row" data-aos="fade-up">
          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Clientes felices</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Proyectos</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <p>Soporte Tecnico</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p>Ejecutivos de Cuentas</p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Counts Section -->
    <!-- ======= Details Section ======= -->
    <section id="details" class="details">
      <div class="container">
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
              <strong>Motor de web 2025</strong>: El sitio web tendrá una estatica moderna adaptable a todos los telefonos y compatible con los estandares de la industria para posicionarse mejor en Google.
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
                  <p> Costos Detallados </p>
                </div>
                <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
                  <div class="box" data-aos="zoom-in" data-aos-delay="200">
                    <h3>Costo de Alta </h3>
                    <h4>
                       Sin Costo de Alta <br><span>  No hay desarrollo </span></h4>
                      <ul>
                      </ul>
                  </div>
                </div>
  <!-- ======= TITULOS HOSTING ======= -->
  <section id="pricing" class="pricing">
    <div class="container">
            <!-- precio hosting   --> 
                          <div class="section-title" data-aos="fade-up">
                            <h2>Alojamiento de su sitio web</h2>
                            <p>+ Hosting </p>
                          </div>
                          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
                            <div class="box" data-aos="zoom-in" data-aos-delay="200">
                              <h3>Hosting *Bonificado </h3>
                            <strike>  <h4>  0 $ !!<br><span>  Incluido con plan WEBMASTER</span></h4>
                            </strike>
                            </div>
                          </div>
  <!-- ======= FIN PRECIOS HOSTING ======= -->
<BR>
        <div class="section-title" data-aos="fade-up">
          <h2>Una empresa dedicada a su web</h2>
          <p>+ Mantenimiento de Webmaster</p>
        </div>
        <div class="row" data-aos="fade-left">
          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="400">
    <?php  echo "<h3><strong>$nombreProducto</strong></h3> <span class='advanced'>+ Pedido</span>";
    echo " {$producto['descripcion']}<br>";
    echo "<h5>Precio ANUAL: $precioFinal $moneda<br></h5>";
    ?>
              </ul>
              <div class="btn-wrap">
                <a target="_blank" href="https://customer.altomarketing.com/es/order-steps/hosting/<?php echo $pidunicavez; ?>?chc=<?php echo $c; ?>" class="btn-buy">Comprar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Pricing Section -->
<BR>
 <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Parte de nuestro Staff</h2>
          <p>Le presentamos a los Responsables de Equipos</p>
        </div>
        <div class="row" data-aos="fade-left">
          <div class="col-lg-3 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <div class="pic"><img src="https://raw.githubusercontent.com/altomarketing/cdn/main/uploads/staff/juan.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Anibal Irragizabal</h4>
                <span>Director/a Técnico/a (CTO) - Responsable de tecnología e infraestructura</span>
                <div class="social">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <div class="pic"><img src="https://raw.githubusercontent.com/altomarketing/cdn/main/uploads/staff/susana.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Noelia Fonzi</h4>
                <span>Lider Comercial - Encargado de ventas y nuevos clientes</span>
                <div class="social">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
              <div class="pic"><img src="https://raw.githubusercontent.com/altomarketing/cdn/main/uploads/staff/alberto.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Carlos Ongoniz</h4>
                <span>Director de Marketing Digital - Supervisa Equipo de marketing</span>
                <div class="social">
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="member" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="https://raw.githubusercontent.com/altomarketing/cdn/main/uploads/staff/tomas-altomarketing.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Marcos Iuspa</h4>
                <span>Director de Contenidos </span>
                <div class="social">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Team Section -->
  </main><!-- End #main -->
      <!-- ======= F.A.Q Section ======= -->
      <section id="faq" class="faq section-bg">
        <div class="container">
          <div class="section-title" data-aos="fade-up">
            <h2>F.A.Q</h2>
            <p>Preguntas frecuentes</p>
          </div>
          <div class="faq-list">
            <ul>
              <li data-aos="fade-up">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">¿Cuales son las formas de pago? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                  <p>
<?php if ($c == '10') { ?>
      Aceptamos pagos con tarjetas de credito/debito, efectivo, transferencia bancaria y MercadoPago.
      <br><strong>*Todos los precios no incluyen impuestos</strong> <em>en caso de requerir factura, consultenos.</em>
<?php } ?>
<?php if ($c == '7') { ?>
    en 🇺🇾Uruguay puedes pagar con tarjetas de credito, debito o paypal, Abitab, tarjeta Mi Dinero , red pagos o dep bancario.
    <br>Abonando con <strong> con Prex (tiene un descuento)</strong>
<?php } ?>
<?php if ($c == '3') { ?>
    en 🇨🇴 Colombia puedes pagar con tarjetas de credito, debito o paypal, Bancolombia, Daviplata, Nequi
    <br>Abonando con <strong> con Tarjeta (tiene un descuento)</strong>
<?php } ?>
<?php if ($c == '36') { ?>
    en 🇨🇱 Chile puedes pagar con BANCO ESTADO, tarjetas de credito, debito o paypal,
    <br>Abonando con <strong> Tarjeta de Debito (tiene un descuento)</strong>
<?php } ?>
<?php if ($c == '8') { ?>
    en 🇦🇷 Argentina puedes pagar mediante MercadoPago, tarjetas de credito, debito o efectivo (pago facil, rapipago),
    <br>Abonando con <strong> CBU ANUALMENTE (tiene un descuento)</strong>
<?php } ?>
                  </p>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">¿Puedo subir de plan en cualquier momento? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    Sí, por supuesto. Puede cambiar de plan las 24 horas mediante su paneldecliente, o solicitandoselo a su ejecutivo de cuentas que tendrá asignado. Recuerde que brindamos atención personalizada, asi que tendrá una persona dedicada a asesorarlo.
                  </p>
                </div>
              </li>
              <li data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">¿Tengo varios sitios web, me sirve? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                  <p>
                    El precio informado es por sitio web, si tiene varios sitios web y desea contratar algun plan mayorista, contacte a su ejecutivo de cuentas para un precio diferencial mayorista.
                  </p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </section><!-- End F.A.Q Section -->
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