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

// Estilos CSS
$css = "
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: red;
    }

    h1 {
        color: #333;
    }

    p {
        color: #777;
    }
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
    <div class='header' style= 'width: 80%; min-width: 300px; margin:0 auto; position: relative; background: rgb(63,152,237); background: linear-gradient(90deg, rgba(63,152,237,0.9) 0%, rgba(69,79,177,0.9) 53%, rgba(69,79,177,0.9) 75%, rgb(196, 56, 149) 100%);'>
      <img src='https://lanyardsforyou.com/Pages/General/Menu/Logo.png' alt='Imagen' style='display: block; margin: 15px; width: 120px;'>

    </div>
  </div>

  </body>
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
