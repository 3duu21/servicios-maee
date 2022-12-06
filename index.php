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
                    <li><a id="selected" href="#">Inicio</a></li>
                    <li><a href="#nosotros">Nosotros</a></li>
                    <li><a href="#certificacion">SEC</a></li>
                    <li><a href="#garantia">Garantía</a></li>
                    <li><a href="#servicios">Servicios</a></li>
                    <li><a href="#redes">Redes</a></li>
                    <li><a href="#contacto">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<body>

<section class="fondo">
    <div class="wave"></div>
    <div class="header__texto" >
        <h1 class="no-margin ">Servicios MAEE</h1>
        <p class="ubicacion__texto">Mantenimiento, Ampliaciones, Emergencias Electricas.</p>
        <p class="no-margin ubicacion__texto">Region Metropolitana. <i class="fa-solid fa-location-dot"></i></p>
        
    </div>
</section>

<div class="contenedor nosotros" id="nosotros">
    <div class="imagen_nosotros">
        <img loading="lazy" src="img/nosotros.jpg" alt="Servicios MAEE Nosotros">
    </div>
    <div class="contenido_nosotros">
        <h2>Nosotros</h2>
        MAEE (Mantenimiento, Ampliaciones y Emergencias Eléctricas) Está conformada por los mejores profesionales certificados ante SEC, quienes estan orientados en la calidad de servicio, ofreciendo confianza en el servicio técnico e servicio al cliente, satisfaciendo las necesidades para clientes particulares, empresas e industrias, entregando soluciones inteligentes y profesionales de manera rápida y segura.
    </div>
</div>

<div class="contenedor certificacion" id="certificacion">
    <div class="imagen_certificacion">
        <img loading="lazy" src="img/ServicioSEC.jpg" alt="SEC Servicios Maee">
    </div>
    <div class="contenido_certificacion">
        <h2>Certificacion SEC</h2>
        Somos especialistas en Electricidad y contamos con el documento oficial que certifica que una instalación cumple con todos los 
        requisitos necesarios para suministrar energía, así como su calificación de eficiencia 
        energética y su máxima potencia admisible. 
    </div>
</div>

<div class="contenedor garantia" id="garantia">
    <div class="imagen_garantia">
        <img loading="lazy" src="img/garantia.jpg" alt="Servicios MAEE Garantia">
    </div>
    <div class="contenido_garantia">
        <h2>Garantía</h2>
        Todos nuestros trabajos cuentan con garantías, las cuales parten de los 3 meses a 1 año, esto dependerá del tipo de trabajo y acuerdo mutuo que se llegue con el cliente, demostrando nuestro fiel cumplimiento y asegurando los trabajos realizados.(3, 6 y 12 meses).
    </div>
</div>


<div class="fondo-tarjetas">
<h2 id="servicios" class="centrar_texto titulo_servicio" >Servicios</h2>
    <!-- Prueba servicios -->
    <div class="contenedor tarjetas">
        <div class="card">
            <img loading="lazy" class="img_servicio" src="img/instalaciones-electricas.png" alt="Instalaciones Electricas">
            <h4 class="titulo_servicio_prueba">Instalaciones Eléctricas</h4>
            <ul><li><span class="servicios_span">Instalación de tableros eléctricos.</span></li></ul>
            <ul><li><span class="servicios_span">Instalación de enchufes y lamparas.</span></li></ul>
            <ul><li><span class="servicios_span">Instalación de sistemas de puesta a tierra.</span></li></ul>
        </div>
        <div class="card">
            <img loading="lazy" class="img_servicio" src="img/serviciodomicilio.jpg" alt="Servicio a Domicilio">
            <h4 class="titulo_servicio_prueba titulo_servicio_domicilio">Servicio a Domicilio</h4>
            <ul><li><span class="servicios_span">Instalaciones cumpliendo normativa SEC vigente.</span></li></ul>
            <ul><li><span class="servicios_span">Reparación y armado de tableros eléctricos.</span></li></ul>
            <ul><li><span class="servicios_span">Instalación de automáticos y diferenciales.</span></li></ul>
        </div>
        <div class="card">
            <img loading="lazy" class="img_servicio" src="img/ServiciosMantencion.jpg" alt="Servicios de Mantencion">
            <h4 class="titulo_servicio_prueba">Mantención eléctrica</h4>
            <ul><li><span class="servicios_span">Mantenimiento eléctrico preventivo.</span></li></ul>
            <ul><li><span class="servicios_span">Mantenimiento eléctrico correctivo y predictivo.</span></li></ul>
            <ul><li><span class="servicios_span">Planes de mantenimientos eléctricos.</span></li></ul>
            <ul><li><span class="servicios_span">Análisis termográfico y termografía.</span></li></ul>
        </div>
        <div class="card">
            <img loading="lazy" class="img_servicio" src="img/instalacioniluminacion.jpg" alt="Instalacion de Iluminarias">
            <h4 class="titulo_servicio_prueba">Instalacion y Montajes de iluminación</h4>
            <ul><li><span class="servicios_span">Instalaciones y modificaciones de circuitos.</span></li></ul>
            <ul><li><span class="servicios_span">Reparación y armado de tableros eléctricos.</span></li></ul>
            <ul><li><span class="servicios_span">Instalación de automáticos y diferenciales.</span></li></ul>
        </div>
        <div class="card">
            <img loading="lazy" class="img_servicio" src="img/servicioalarmas.jpg" alt="Servicio de Alarmas y Citofonia">
            <h4 class="titulo_servicio_prueba">Servicios de citofonía, alarmas y corrientes débiles</h4>
            <ul><li><span class="servicios_span">Servicios citofonía por corte o interrupción de señal.</span></li></ul>
            <ul><li><span class="servicios_span">Instalación de cámaras CCTV.</span></li></ul>
            <ul><li><span class="servicios_span">Red inalámbrica, TV cable.</span></li></ul>
            <ul><li><span class="servicios_span">Cableado estructurado para redes.</span></li></ul>
        </div>
    </div>
    <!-- Fin prueba servicios -->
</div>

<h2 id="redes" class="centrar_texto titulo_redes">Redes Sociales</h2>
<div class="contenedor contenedor-redes">
    <ul class="lista_efectos">
        <li class="efectos">
            <a href="https://www.instagram.com/servicios_maee/">
                <span class="efecto_rd"></span>
                <span class="efecto_rd"></span>
                <span class="efecto_rd"></span>
                <span class="efecto_rd"></span>
                <span class="efecto_rd fa-brands fa-instagram"></span>
            </a>
        </li>
        
        <li class="efectos">
            <a href="https://wa.me/56964274913/?text=Quisiera%20consultar%20sobre%20los%20servicios">
                <span class="efecto_rd"></span>
                <span class="efecto_rd"></span>
                <span class="efecto_rd"></span>
                <span class="efecto_rd"></span>
                <span class="efecto_rd fa-brands fa-whatsapp"></span>
            </a>
        </li>
        
        <li class="efectos">
            <a href="https://www.linkedin.com/in/maee-servicios-electricos-10a06a250">
                <span class="efecto_rd"></span>
                <span class="efecto_rd"></span>
                <span class="efecto_rd"></span>
                <span class="efecto_rd"></span>
                <span class="efecto_rd fa-brands fa-linkedin"></span>
            </a>
        </li>
        
        <li class="efectos">
            <a href="https://www.facebook.com/profile.php?id=100086022601789">
                <span class="efecto_rd"></span>
                <span class="efecto_rd"></span>
                <span class="efecto_rd"></span>
                <span class="efecto_rd"></span>
                <span class="efecto_rd fa-brands fa-facebook"></span>
            </a>
        </li>
    </ul>
</div>

<section>
    <h2 id="contacto" class="centrar_texto titulo_contacto">Contacto</h2>
    <form id="formulario" class="formulario contenedor">
        <fieldset>
            <legend>Contactame, llena todos los campos</legend>
            <div class="contenedor-campos">
                <div class="campo">
                    <label for="nombre">Nombre</label>
                    <input id="nombre" class="input-text" type="text" placeholder="Nombre" name="nombre" required>
                </div>
                <div class="campo">
                    <label for="telefono">Telefono</label>
                    <input id="telefono" class="input-text" type="tel" placeholder="Telefono" name="telefono" required>
                </div>
                <div class="campo">
                    <label for="email">Correo</label>
                    <input id="email" class="input-text" type="email" placeholder="Tu Email" name="email" required>
                </div>
                <div class="campo">
                    <label for="mensaje">Mensaje</label>
                    <textarea id="mensaje" class="input-text" name="mensaje" id="" cols="30" rows="10" required></textarea>
                </div>  
            </div>

            <div class="alinear-derecha flex">
                <input class="boton w-sm-100" name="enviar" type="submit" value="Enviar">
            </div>
        </fieldset>
    </form>
</section>




    
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