<?php 
//ENVIO DE MAIL
require "phpmailer/PHPMailerAutoload.php";




if (isset($_POST["asunto"])) {

$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$email = $_POST['mail'];
$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];


$mail = new PHPMailer;

$mail->SMTPDebug=3;

$mail->setFrom($email, $nombre);
$mail->addAddress('contact@plannet.cc', 'plannet');
$mail->addReplyTo($email, $nombre);

$mail->isHTML(true);

$mail->Subject= $nombre . ' quiere agendar una videollamada.';

$mail->Body = utf8_decode('Nombre: ' . $nombre . '<br>
			   Email: ' . $email . '<br>
			   Hora: ' . $hora . '<br>
			   Fecha: ' . $fecha . '<br>
			   Asunto: ' . $asunto . '<br>');
			   

}else{
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$telefono = $_POST['telefono'];
	$mensaje = $_POST['mensaje'];
	
	
	$mail = new PHPMailer;
	
	$mail->SMTPDebug=3;
	
	$mail->setFrom($email, $nombre);
	$mail->addAddress('contact@plannet.cc', 'plannet');
	$mail->addReplyTo($email, $nombre);
	
	$mail->isHTML(true);
	
	$mail->Subject='Contacto desde la página: ' . $nombre;
	
	$mail->Body = utf8_decode('Nombre: ' . $nombre . '<br>
				   Email: ' . $email . '<br>
				   Telefono: ' . $telefono . '<br>
				   Mensaje: ' . $mensaje . '<br>');

}


if(!$mail->send()){
	echo 'No se pudo enviar';
}else{
	echo 'exito';
}
//TERMINA ENVIO DE MAIL CON PHP MAILER











 ?>