<?php
if ($_POST["module"] == "testEmail") {
  $to = $_POST["email"];
$subject = 'Asunto del correo';
$message = '<h1 style="color:red">Hola, esto es un ejemplo de correo enviado con PHP.</h1>';
$headers = 'From: admin@promoflow.net' . "\r\n" .
    'Reply-To: srdaniela2711@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if (mail($to, $subject, $message, $headers)) {
    echo 'Correo enviado correctamente.';
} else {
    echo 'Error al enviar el correo.';
}
}

 ?>
