<?php

$suscritor = $_POST['suscribir'];


$enviaPara = 'jhonny.diaz@davinci.edu.ar';
$enviado="../index.php?s=gracias";
$subject = "Nuevo suscriptor";


$mensaje = '';
$mensaje .= "<p>Se acaba de suscribir: ".$suscritor."</p>";



$mail_headers  = "MIME-Version: 1.0\r\n";
$mail_headers .= "Content-type: text/html; charset=utf-8\r\n";
$mail_headers .= 'From: ' . $suscritor . "\r\n";
@mail($enviaPara, $subject, $mensaje, $mail_headers);

header("Location: $enviado");
?>