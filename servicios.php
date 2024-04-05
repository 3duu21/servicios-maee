<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/servicios.css">
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
        <h1 class="no-margin ">Nuestros Servicios.</h1>
        <p class="no-margin ubicacion__texto">Region Metropolitana. <i class="fa-solid fa-location-dot"></i></p>
        
    </div>
</section>

<h2 id="servicios" class="centrar_texto titulo_servicio" >Servicios</h2>

<div class="tarjetas contenedor">

    <div class="card">
        <img loading="lazy" class="img_servicio" src="img/instalaciones-electricas.png" alt="Instalaciones Electricas">
        <h4 class="titulo_servicio_prueba">Instalaciones Eléctricas</h4>
        <div class="servicios_descripcion">
            <ul><li>- Instalación de tableros eléctricos.</li></ul>
            <ul><li>- Instalación de enchufes y lamparas.</li></ul>
            <ul><li>- Instalación de sistemas de puesta a tierra.</li></ul>
        </div>
    </div>
    <div class="card">
        <img loading="lazy" class="img_servicio" src="img/serviciodomicilio.jpg" alt="Servicio a Domicilio">
        <h4 class="titulo_servicio_prueba titulo_servicio_domicilio">Servicio a Domicilio</h4>
        <div class="servicios_descripcion">
            <ul><li>- Instalaciones cumpliendo normativa SEC vigente.</li></ul>
            <ul><li>- Reparación y armado de tableros eléctricos.</li></ul>
            <ul><li>- Instalación de automáticos y diferenciales.</li></ul>
        </div>
    </div>
    <div class="card">
        <img loading="lazy" class="img_servicio" src="img/ServiciosMantencion.jpg" alt="Servicios de Mantencion">
        <h4 class="titulo_servicio_prueba">Mantención eléctrica</h4>
        <div class="servicios_descripcion">
            <ul><li>- Mantenimiento eléctrico preventivo.</li></ul>
            <ul><li>- Mantenimiento eléctrico correctivo y predictivo.</li></ul>
            <ul><li>- Planes de mantenimientos eléctricos.</li></ul>
            <ul><li>- Análisis termográfico y termografía.</li></ul>
        </div>
    </div>
    <div class="card">
        <img loading="lazy" class="img_servicio" src="img/instalacioniluminacion.jpg" alt="Instalacion de Iluminarias">
        <h4 class="titulo_servicio_prueba">Instalacion y Montajes de iluminación</h4>
        <div class="servicios_descripcion">
            <ul><li>- Instalaciones y modificaciones de circuitos.</li></ul>
            <ul><li>- Reparación y armado de tableros eléctricos.</li></ul>
            <ul><li>- Instalación de automáticos y diferenciales.</li></ul>
        </div>
    </div>
    <div class="card">
        <img loading="lazy" class="img_servicio" src="img/servicioalarmas.jpg" alt="Servicio de Alarmas y Citofonia">
        <h4 class="titulo_servicio_prueba">Servicios de citofonía, alarmas y corrientes débiles</h4>
        <div class="servicios_descripcion">
            <ul><li>- Servicios citofonía por corte o interrupción de señal.</li></ul>
            <ul><li>- Instalación de cámaras CCTV.</li></ul>
            <ul><li>- Red inalámbrica, TV cable.</li></ul>
            <ul><li>- Cableado estructurado para redes.</li></ul>
        </div>
    </div>
</div>


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