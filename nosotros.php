<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/nosotros.css">
    <link rel="shortcut icon" href="img/logo2.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Kanit:wght@400;700&display=swap" rel="stylesheet">
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Servicios MAEE</title>
</head>

<header>
    <div class="contenedor_header">
        <div class="logo">
            <img src="img/logo2.png" alt="Logo Servicios Maee">
        </div>
        <div class="menu">
            <i class="fa-solid fa-bars" id="btn_menu"></i>
            <div id="back_menu"></div>
            <nav id="nav">
                <img src="img/logo2.png" alt="">
                <ul>
                    <li><a id="selected" href="index.php">Inicio</a></li>
                    <li><a href="nosotros.php">Nosotros</a></li>
                    <li><a class="" href="servicios.php">Servicios</a></li>
                    <li><a href="index.php?#redes">Redes</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<body>

<section class="fondo">
    <div class="wave"></div>
    <div class="header__texto" >
        <h1 class="no-margin ">Quiénes Somos</h1>
        <p class="no-margin ubicacion__texto">Region Metropolitana. <i class="fa-solid fa-location-dot"></i></p>
        
    </div>
</section>
<div class="contenedor nosotros" id="nosotros">
        <div class="imagen_nosotros">
            <img loading="lazy" src="img/nosotros.jpg" alt="Servicios MAEE Nosotros">
        </div>
        <div class="contenido_nosotros">
            <h2>Nosotros</h2>
            MAEE (Mantenimiento, Ampliaciones y Emergencias Eléctricas). Está conformada por los mejores profesionales certificados ante SEC, quienes estan orientados en la calidad de servicio, ofreciendo confianza en el servicio técnico e servicio al cliente, satisfaciendo las necesidades para clientes particulares, empresas e industrias, entregando soluciones inteligentes y profesionales de manera rápida y segura.
        </div>
</div>


<!-- pruebas -->
<div class="row1-container">
    <div class="box box-down cyan">
      <h3>Certificacion SEC</h3>
      <p>Somos especialistas en Electricidad y contamos con el documento oficial que certifica que una instalación cumple con todos los 
            requisitos necesarios para suministrar energía, así como su calificación de eficiencia 
            energética y su máxima potencia admisible. </p>
      <img class="img__box" src="https://assets.codepen.io/2301174/icon-supervisor.svg" alt="">
    </div>

    <!-- <div class="box red">
      <h3>Team Builder</h3>
      <p>Scans our talent network to create the optimal team for your project</p>
      <img class="img__box" src="https://assets.codepen.io/2301174/icon-team-builder.svg" alt="">
    </div> -->

    <div class="box box-down blue">
      <h3>Garantía</h3>
      <p>Todos nuestros trabajos cuentan con garantías, las cuales parten de los 3 meses a 1 año, esto dependerá del tipo de trabajo y acuerdo mutuo que se llegue con el cliente, demostrando nuestro fiel cumplimiento y asegurando los trabajos realizados.(3, 6 y 12 meses).</p>
      <img class="img__box" src="https://assets.codepen.io/2301174/icon-calculator.svg" alt="">
    </div>
  </div>
  <div class="row2-container">
    <!-- <div class="box orange">
      <h3>Karma</h3>
      <p>Regularly evaluates our talent to ensure quality</p>
      <img class="img__box" src="https://assets.codepen.io/2301174/icon-karma.svg" alt="">
    </div> -->
  </div>

<!-- fin pruebas -->


<footer class="footer">
    <div class="contenido_footer">
        <p>Servicios MAEE</p>
        <p>Todos los derechos reservados. Eduardo Zapata Freelancer &copy;</p>
        <div class="enlaces_redes">
            <a class="enlaces_footer" href="https://www.instagram.com/servicios_maee/"><i class="fa-brands fa-instagram"></i></a>
            <a class="enlaces_footer" href="https://wa.me/56964274913/?text=Quisiera%20consultar%20sobre%20los%20servicios"><i class="fa-brands fa-whatsapp"></i></a>
            <a class="enlaces_footer" href="https://www.linkedin.com/in/maee-servicios-electricos-10a06a250"><i class="fa-brands fa-linkedin"></i></a>
        </div>
    </div>
</footer>

<div class="go-top">
    <div class="go-top-button">
        <i class="fa-solid fa-circle-arrow-up"></i>
    </div>
</div>

</body>

<script src="js/app.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</html>