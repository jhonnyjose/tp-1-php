<?php
$cantidad = $_POST['cantidad'];
$talle = $_POST['talle'];
$envio = $_POST['envio'];
$nombre = $_POST['nombre'];
$correo = $_POST['email'];
$tel = $_POST['phone'];



$enviaPara = 'jhonny.diaz@davinci.edu.ar';
$enviado="../index.php?s=gracias-compra";
$subject = "Nueva compra";


$mensaje = '';
$mensaje .= "<p>".$nombre."</p>";
$mensaje .= "<p>Su correo es: ".$correo."</p>";
$mensaje .= "<p>Su telefono es: ".$telefono."</p>";
$mensaje .= "<p>La cantidad de slips es: ".$cantidad ."</p>";
$mensaje .= "<p>de talle: ".$talle ."</p>";
$mensaje .= "<p>y quiere : ".$envio ."</p>";
$mensaje .= "<hr />";


$mail_headers  = "MIME-Version: 1.0\r\n";
$mail_headers .= "Content-type: text/html; charset=utf-8\r\n";
$mail_headers .= 'From: ' . $correo . "\r\n";

@mail($enviaPara, $subject, $mensaje, $mail_headers);


header("Location: $enviado");
?>

