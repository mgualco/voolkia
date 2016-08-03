<?php
$to = 'mjg_099@ymail.com';
$subject = 'Testing envio de correo';
$message = 'Este es un correo de prueba desde localhost';
$headers = 'From: mgualco@staffingit.com.ar'.'\r\n'.
			'MIME-Version: 1.0'.'\r\n'.
			'Content-Type: text/html; charset=iso-8859-1'.'\r\n'.
			'X-Mailer: PHP/'.phpversion();
if(mail($to,$subject,$message,$headers))
	echo "Email enviado";
else
	echo "Error en el envio de email";
?>