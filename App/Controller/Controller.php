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
  <div class='bacground' style= 'position: relative; width: 100%; background: rgb(245,245,245);' >
    <div class='header' style= 'width: 300px; background: red; left: 50%; transform: translateX(-50%); position: relative;'>
      <img src='https://lanyardsforyou.com/Pages/General/Menu/Logo.png' alt='Imagen' style='display: block; margin-left: 15px; margin-top: 15px; width: 120px;'>

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
