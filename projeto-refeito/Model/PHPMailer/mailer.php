<?php
require_once('src/PHPMailer.php');
require_once('src/SMTP.php');
require_once('src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

$link = '';

try {
	$mail->SMTPDebug = SMTP::DEBUG_SERVER;
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'tccifmg2020@gmail.com';
	$mail->Password = 'IsaCaio123@';
	$mail->Port = 587;

	$mail->setFrom('tccifmg2020@gmail.com');
	$mail->addAddress($_GET['email']);

	$mail->isHTML(true);
	$mail->Subject = 'Cadastro Gerencianet';
	$mail->Body = 'email.php?senha='.$_GET['senha'].'&link='.$link;
	$mail->AltBody = "Acesse o link ".$link;

	if($mail->send()) {
		echo 'Email enviado com sucesso';
	} else {
		echo 'Email nao enviado';
	}
} catch (Exception $e) {
	echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
}