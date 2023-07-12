<?php
if ($_POST["module"] == "testEmail") {
  $to = 'lonsus30@gmail.com';
$subject = 'Asunto del correo';
$message = 'Hola, esto es un ejemplo de correo enviado con PHP.';
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
