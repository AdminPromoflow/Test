<?php
if ($_POST["module"] == "testEmail") {
  if ($_POST["module"] == "testEmail") {
  //  $to = $_POST["email"];
  // Correo electrónico de destino y asunto
  $recipients = array(
  'adrrty93@gmail.com',
  'lonsus30@gmail.com',
  'srdaniela2711@gmail.com'
  );
  $to = implode(',', $recipients);
  $subject = "Correo con estilo";

  // Dirección de correo electrónico del remitente
  $from = "admin@alejandrarozo.com";

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
        <title>Lanyards for you</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    </head>
    <body>
    <div  class='background' style= 'position: relative; width: 100%; background: rgb(245,245,245); ' >
    <div class='background2' style='width: 70%; overflow-x: hidden; min-width: 300px; margin: 0 auto; position: relative; background: white;'>

      <div class='header' style= 'position: relative; background: rgb(63,152,237); background: linear-gradient(90deg, rgba(63,152,237,0.9) 0%, rgba(69,79,177,0.9) 53%, rgba(69,79,177,0.9) 75%, rgb(196, 56, 149) 100%);'>
        <img src='https://lanyardsforyou.com/Pages/General/Menu/Logo.png' alt='Imagen' style='display: block; margin: 35px; width: 40%;'>

      </div>
      <div class='titleContainer' style='background: white; position: relative; width: 85%; background: blue; margin: 0 auto;' >
      <h1 style='font-family: Oswald, sans-serif; font-size: calc(0vw + 1.2em); position: relative; margin: 0 auto; letter-spacing: 0px; color: #664A99; margin-top: 1.2vw; text-align: center; '>HELLO AND WELCOME TO LANYARDS FOR YOU</h1>
      <h2 style='font-family: Oswald, sans-serif; font-size: calc(40% + 0.1em); position: relative; margin: 0 auto; letter-spacing: 0px; color: #664A99; margin-top: 1vw; text-align: center; '>We're glad to have you here</h2>

      </div>
        </div>
    </div>
     </body>
  </html>
  ";



  // Envío del correo electrónico
  if (mail($to, $subject, $message, $headers)) {
      echo 'Correo enviado correctamente.';
  } else {

      echo 'Error al enviar el correo.2';
  }
  }
  $error = error_get_last();
    if ($error !== null) {
        echo $error."hola";
    }

}

 ?>
