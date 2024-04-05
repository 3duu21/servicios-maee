<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contacto.css">
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
        <h1 class="no-margin ">Contacto</h1>
        <p class="no-margin ubicacion__texto">Region Metropolitana.<i class="fa-solid fa-location-dot"></i></p>
        
    </div>
</section>


<section>
    <h2 id="contacto" class="centrar_texto titulo_contacto">Envíanos un Mensaje</h2>
    <form id="formulario" class="formulario contenedor">
        <div class="seccion__info">
            <p class="info__telefono">+56 9 6427 4913</p>
            <h3 class="info__direccion">Santiago, Region Metropolitana</h3>
            <a href="https://wa.me/56964274913/?text=Quisiera%20consultar%20sobre%20los%20servicios"><i class="icono_what fa-brands fa-whatsapp"></i> </a>
        </div>
        <div class="seccion__campos">
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
                    <input class="boton__enviar" name="enviar" type="submit" value="Enviar">
                </div>
            </fieldset>
        </div>
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