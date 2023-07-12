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
      <table style='background:red' border='0' cellspacing='0' cellpadding='0'>
          <tr>
              <td style='vertical-align: top;'>
                  <img src='https://lanyardsforyou.com/Pages/General/Menu/Logo.png' alt='Imagen' style='display: block; margin-right: 10px; width: 120px;'>
              </td>
              <td style='vertical-align: top;'>
                  <h1>Título de la tabla</h1>
                  <p>Contenido de la tabla...</p>
              </td>
          </tr>
      </table>
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
