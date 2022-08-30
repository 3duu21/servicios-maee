<?php 

// var_dump('Correcto');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

try {
    
        //Crear el objeto de email
        $mail = new PHPMailer();
    
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "tls";
        $mail->Port = 465;
        $mail->Username = 'e5470943@gmail.com';
        $mail->Password = 'zslhxkmzwzgdwdoe';
    
        $mail->setFrom('e5470943@gmail.com', ' Nos Ha Contactado!!!');
        $mail->addAddress($email, $nombre);

        //Set html
        $mail->isHTML(TRUE);
        $mail->CharSet = 'UTF-8';
    
        $mail->Body = "
        <html>
        <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap');
        h2 {
            font-size: 25px;
            font-weight: 500;
            line-height: 25px;
        }
    
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #ffffff;
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
        }
    
        p {
            line-height: 18px;
        }
    
        a {
            position: relative;
            z-index: 0;
            display: inline-block;
            margin: 20px 0;
        }
    
        a button {
            padding: 0.7em 2em;
            font-size: 16px !important;
            font-weight: 500;
            background: #000000;
            color: #ffffff;
            border: none;
            text-transform: uppercase;
            cursor: pointer;
        }
        p span {
            font-size: 12px;
        }
        div p{
            border-bottom: 1px solid #000000;
            border-top: none;
            margin-top: 40px;
        }
    </style>
    <body>
        <h1>Servicios MAEE</h1>
        <h2>¡Gracias por Contactarnos ". $nombre. "!</h2>
        <p>Telefono: " .$telefono. "</p>
        <p>Correo: " .$email. "</p>
        <p>Mensaje: " .$mensaje. "</p>
        <p>Nos pondremos en contacto a la brevedad, Por favor espera nuestra respuesta, o contactanos por nuestras redes sociales que estan en la pagina web.</p>
        <p>Si tú no eres el receptor, por favor ignora este correo electrónico.</p>
        <div><p></p></div>
        <p><span>Este correo electrónico fue enviado desde una dirección solamente de notificaciones que no puede aceptar correo electrónico entrante. Por favor no respondas a este mensaje.</span></p>
    </body>
    </html>";
    
        //Enviar el mail
        $mail->send();
        echo json_encode('exito');
    } catch (Exception $e) {
        echo json_encode('error');
    }




