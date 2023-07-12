<?php
if ($_POST["module"] == "testEmail") {
//  $to = $_POST["email"];
// Correo electrónico de destino y asunto
$to = $_POST["email"];
$subject = "Correo con estilo";

// Cabeceras del correo electrónico
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";

// Estilos CSS
$css = "
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
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
    <h1>Título del correo</h1>
    <p>Este es un correo con estilo enviado desde PHP.</p>
</body>
</html>
";

// Envío del correo electrónico
mail($to, $subject, $message, $headers);

}

 ?>
