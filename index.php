<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Kanit:wght@400;700&display=swap" rel="stylesheet">
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <title>ServiciosMAEE</title>
</head>
<header class="header">
    <div class="contenedor">
        <div class="barra">
            <a href="/">
                <img class="logo" loading="lazy" src="img/logo.png" alt="Logo ServiciosMAEE">
            </a>
            
            <div class="mobile-menu">
                <img loading="lazy" src="img/barras.svg" alt="icono menu responsive">
            </div>

            <nav class="navegacion">
                <a class="enlace_navegacion" href="#">Inicio</a>
                <a class="enlace_navegacion" href="#nosotros">Nosotros</a>
                <a class="enlace_navegacion" href="#certificacion">SEC</a>
                <a class="enlace_navegacion" href="#servicios">Servicios</a>
                <a class="enlace_navegacion" href="#redes">Redes</a>
                <a class="enlace_navegacion" href="#contacto">Contacto</a>
            </nav>
        </div><!-- Barra-->
    </div>
</header>

<body>

<section class="fondo">
    <div class="wave"></div>
    <div class="header__texto" >
        <h1 class="no-margin ">Servicios MAEE</h1>
        <p class="ubicacion__texto">Mantenimiento, Ampliaciones, Emergencias Electricas.</p>
        <p class="no-margin ubicacion__texto">Santiago, Maipu. <i class="fa-solid fa-location-dot"></i></p>
        
    </div>
</section>

<div class="contenedor nosotros" id="nosotros">
    <div class="imagen_nosotros">
        <img loading="lazy" src="img/nosotros.jpg" alt="Servicios MAEE Nosotros">
    </div>
    <div class="contenido_nosotros">
        <h2>Nosotros</h2>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatum architecto 
        nobis quam eaque officia rem voluptates enim, mollitia quia accusamus ea fugiat 
        sint, assumenda vero, incidunt et quae natus provident eius expedita similique 
        corrupti? Nulla facere qui nam, magnam rerum, nostrum, impedit blanditiis nesciunt 
        ducimus nisi eius eaque expedita repellendus.
    </div>
</div>

<div class="contenedor certificacion" id="certificacion">
    <div class="contenido_certificacion">
        <h2>Certificacion SEC</h2>
        Somos especialistas en Electricidad y contamos con el documento oficial que certifica que una instalación cumple con todos los 
        requisitos necesarios para suministrar energía, así como su calificación de eficiencia 
        energética y su máxima potencia admisible. Tambien contamos con una garantía de 3, 6 y hasta 12 meses.
    </div>
    <div class="imagen_certificacion">
        <img loading="lazy" src="img/SEC-Logo.jpg" alt="Logo SEC">
    </div>
</div>


<div class="fondo-tarjetas">
<h2 id="servicios" class="centrar_texto titulo_servicio" >Servicios</h2>
    <!-- Prueba servicios -->
    <div class="contenedor tarjetas">
        <div class="card">
            <img loading="lazy" class="img_servicio" src="img/instalaciones-electricas.png" alt="Instalaciones Electricas">
            <h4 class="titulo_servicio_prueba">Instalaciones Eléctricas</h4>
            <span class="servicios_span">Instalación de tableros eléctricos.</span>
            <span class="servicios_span">Instalación de enchufes y lamparas.</span>
            <span class="servicios_span">Instalación de sistemas de puesta a tierra.</span>
            <span class="servicios_span">Instalación de tableros eléctricos.</span>
        </div>
        <div class="card">
            <img loading="lazy" class="img_servicio" src="img/ServicioSEC.jpg" alt="Servicio Con Certificacion SEC">
            <h4 class="titulo_servicio_prueba">Certificación SEC</h4>
            <span class="servicios_span">Técnicos autorizados SEC.</span>
            <span class="servicios_span">Elaboración de presupuestos.</span>
            <span class="servicios_span">Regularizaciones eléctricas.</span>
            <span class="servicios_span">Proyectos eléctricos.</span>
            <span class="servicios_span">Garantías de 3, 6 y 12 meses.</span>
        </div>
        <div class="card">
            <img loading="lazy" class="img_servicio" src="img/ServiciosMantencion.jpg" alt="Servicios de Mantencion">
            <h4 class="titulo_servicio_prueba">Mantención eléctrica</h4>
            <span class="servicios_span">Mantenimiento eléctrico preventivo.</span>
            <span class="servicios_span">Mantenimiento eléctrico correctivo y predictivo.</span>
            <span class="servicios_span">Planes de mantenimientos eléctricos.</span>
            <span class="servicios_span">Análisis termográfico y termografía.</span>
        </div>
        <div class="card">
            <img loading="lazy" class="img_servicio" src="img/instalacioniluminacion.jpg" alt="Instalacion de Iluminarias">
            <h4 class="titulo_servicio_prueba">Instalacion y Montajes de iluminación</h4>
            <span class="servicios_span">Instalaciones y modificaciones de circuitos.</span>
            <span class="servicios_span">Reparación y armado de tableros eléctricos.</span>
            <span class="servicios_span">Instalación de automáticos y diferenciales.</span>
            <span class="servicios_span">Electromovilidad(Cargadores de Autos).</span>
        </div>
        <div class="card">
            <img loading="lazy" class="img_servicio" src="img/servicioalarmas.jpg" alt="Servicio de Alarmas y Citofonia">
            <h4 class="titulo_servicio_prueba">Servicios de citofonía, alarmas y corrientes débiles</h4>
            <span class="servicios_span">Servicios citofonía por corte o interrupción de señal.</span>
            <span class="servicios_span">Instalación de cámaras CCTV.</span>
            <span class="servicios_span">Red inalámbrica, TV cable.</span>
            <span class="servicios_span">Cableado estructurado para redes.</span>
        </div>
        <div class="card">
            <img loading="lazy" class="img_servicio" src="img/serviciodomicilio.jpg" alt="Servicio a Domicilio">
            <h4 class="titulo_servicio_prueba">Servicio a Domicilio</h4>
            <span class="servicios_span">Instalaciones cumpliendo normativa SEC vigente.</span>
            <span class="servicios_span">Reparación y armado de tableros eléctricos.</span>
            <span class="servicios_span">Instalación de automáticos y diferenciales.</span>
            <span class="servicios_span">Electromovilidad(Cargadores de Autos).</span>
        </div>
    </div>
    <!-- Fin prueba servicios -->
</div>

<h2 id="redes" class="centrar_texto titulo_redes">Redes Sociales</h2>
<div class="contenedor contenedor-redes">
    <ul>
        <li>
            <a href="https://www.instagram.com/servicios_maee/">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span class="fa-brands fa-instagram"></span>
            </a>
        </li>
        
        <li>
            <a href="https://wa.me/56964274913/?text=Quisiera%20consultar%20sobre%20los%20servicios">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span class="fa-brands fa-whatsapp"></span>
            </a>
        </li>
    </ul>
</div>

<section>
    <h2 id="contacto" class="centrar_texto titulo_contacto">Contacto</h2>
    <form class="formulario contenedor" id="formulario">
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
                <input class="boton w-sm-100" type="submit" value="Enviar">
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