<?php

$nombre = $_POST['fname'];
$correo = $_POST['email'];
$tel = $_POST['phone'];
$subject = $_POST['subject'];
$mensaje = $_POST['message'];

$enviaPara = 'jhonny.diaz@davinci.edu.ar';
$enviado="../index.php?s=gracias";


$textoCorreo = '';
$textoCorreo .= "<p>".$nombre."</p>";
$textoCorreo .= "<p>Su correo es: ".$correo."</p>";
$textoCorreo .= "<p>Su telefono es: ".$telefono."</p>";
$textoCorreo .= "<p>dice: ".$mensaje ."</p>";
$textoCorreo .= "<hr />";



$mail_headers  = "MIME-Version: 1.0\r\n";
$mail_headers .= "Content-type: text/html; charset=utf-8\r\n";
$mail_headers .= 'From: ' . $correo . "\r\n";
@mail($enviaPara, $subject, $textoCorreo, $mail_headers);

header("Location: $enviado");
?>