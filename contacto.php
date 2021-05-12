<?php 
//ENVIO DE MAIL
require "phpmailer/PHPMailerAutoload.php";




if (isset($_POST["asunto"])) {

$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$email = $_POST['email'];
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
	$empresa = $_POST['empresa'];
	$email = $_POST['email'];
	$telefono = $_POST['telefono'];
	$consulta = $_POST['consulta'];
	
	
	$mail = new PHPMailer;
	
	$mail->SMTPDebug=3;
	
	$mail->setFrom($email, $nombre);
	$mail->addAddress('contact@plannet.cc', 'plannet');
	$mail->addReplyTo($email, $nombre);
	
	$mail->isHTML(true);
	
	$mail->Subject='Contacto desde el sitio web: ' . $nombre;
	
	$mail->Body = utf8_decode('Nombre: ' . $nombre . '<br>
				   Empresa: ' . $empresa . '<br>
				   Email: ' . $email . '<br>
				   Telefono: ' . $telefono . '<br>
				   Consulta: ' . $consulta . '<br>');

}


if(!$mail->send()){
	echo 'No se pudo enviar';
}else{
	echo 'exito';
}
//TERMINA ENVIO DE MAIL CON PHP MAILER











 ?>


 