<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="img/logo2.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Kanit:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
        crossorigin="anonymous">
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>Servicios MAEE</title>
</head>

<header>
    <div class="contenedor_header">
        <div class="logo">
            <a href="index.php"><img src="img/logo2.png" alt="Logo Servicios Maee"></a>
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
                    <li><a href="#redes">Redes</a></li>
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
        <h1 class="titulo__texto">Servicios MAEE</h1>
        <p class="ubicacion__texto">Mantenimiento, Ampliaciones, Emergencias Electricas.</p>
        <p class="no-margin ubicacion__texto">Region Metropolitana. <i class="fa-solid fa-location-dot"></i></p>
        <a class="boton__contacto" href="contacto.php">Contactar</a>
    </div>
</section>


<h2 id="servicios" class="centrar_texto titulo_servicio" >Servicios</h2>


<div class="contenedor">

    <a class="boton__servicios" href="servicios.php">Ver mas</a>
    
    <div class="tarjetas">
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
    </div>
</div>

<h2 id="redes" class="centrar_texto titulo_redes">Redes Sociales</h2>

<div class="contenedor-sm">
        <div class="redes__tarjetas">
            <div class="face face1">
                <div class="content">
                    <div class="icon">
                        <i class="icono__card fa fa-linkedin-square" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <h3>
                        <a href="https://www.linkedin.com/in/maee-servicios-electricos-10a06a250" target="_blank">MAEE Servicios Electricos</a>
                    </h3>
                    <p>Este es mi linkedin en el cual me pueden contactar.</p>
                </div>
            </div>
        </div>
        <div class="redes__tarjetas">
            <div class="face face1">
                <div class="content">
                    <div class="icon">
                        <i class="icono__card fa fa-instagram-square" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <h3>
                        <a href="https://www.instagram.com/servicios_maee/" target="_blank">servicios_maee</a>
                    </h3>
                    <p>Este es mi instagram en el cual me pueden contactar.</p>
                </div>
            </div>
        </div>
        <div class="redes__tarjetas">
            <div class="face face1">
                <div class="content">
                    <div class="icon">
                        <i class="icono__card fa fa-facebook-square" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <h3>
                        <a href="https://www.facebook.com/profile.php?id=100086022601789" target="_blank">Servicios MAEE</a>
                    </h3>
                    <p>Este es mi facebook en el cual me pueden contactar.</p>
                </div>
            </div>
        </div>
        <div class="redes__tarjetas">
            <div class="face face1">
                <div class="content">
                    <div class="icon">
                        <i class="icono__card fa fa-whatsapp-square" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="face face2">
                <div class="content">
                    <h3>
                        <a href="https://wa.me/56964274913/?text=Quisiera%20consultar%20sobre%20los%20servicios" target="_blank">Servicios Maee</a>
                    </h3>
                    <p>Este es mi whatsapp en el cual me pueden contactar.</p>
                </div>
            </div>
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