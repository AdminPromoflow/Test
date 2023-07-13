<?php
if ($_POST["module"] == "testEmail") {
//  $to = $_POST["email"];
// Correo electrónico de destino y asunto
$to = $_POST["email"];
$subject = "Correo con estilo";

// Dirección de correo electrónico del remitente
$from = "admin@promoflow.net";

// Cabeceras del correo electrónico
$headers = "From: $from\r\n";
$headers .= "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
$headers .= "<style type='text/css'>
        @import url('https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap');                /* Estilos adicionales */
                body {
                    font-family: 'Oswald', 'sans-serif';
                }
              </style>";
// Estilos CSS
$css = "
<style>

</style>
";

// Contenido del correo electrónico
$message = $css . "
<html>
  <head>
      <title>Correo con estilo</title>
  </head>
  <body>
  <div class='background' style= 'position: relative; width: 100%; background: rgb(245,245,245); ' >
    <div class='background2' style='width: 60%; min-width: 30px; margin: 0 auto; position: relative; background: white;'>


    <div class='header' style= 'width: 60%; min-width: 300px; margin:0 auto; position: relative; background: rgb(63,152,237); background: linear-gradient(90deg, rgba(63,152,237,0.9) 0%, rgba(69,79,177,0.9) 53%, rgba(69,79,177,0.9) 75%, rgb(196, 56, 149) 100%);'>
      <img src='https://lanyardsforyou.com/Pages/General/Menu/Logo.png' alt='Imagen' style='display: block; margin: 20px; width: 45%;'>

    </div>
    <div style='min-width: 280px; width: 60%; margin: 0 auto; background: white; ' class='titleContainer'>
    <h1 style='font-family: Oswald, sans-serif; font-size: calc(0.5vw + 1.4em); letter-spacing: 1px; color: #664A99; margin-top: 25px; text-align: center; '>HELLO AND WELCOME TO LANYARDS FOR YOU</h1>
    </div>
      </div>
  </div>  </body>
</html>
";

// Envío del correo electrónico
if (mail($to, $subject, $message, $headers)) {
    echo 'Correo enviado correctamente.';
} else {
    echo 'Error al enviar el correo.';
}
}

 ?>
