<?php
require_once('PHPMailer.php');
require_once('SMTP.php');
require_once('Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);
$senha = $_GET['senha'];
$email = $_GET['email'];


// $link = 'http://localhost/TCC/projeto-refeito/Model/adm/atualizarSenha?senha='.$senha.'&link=true';
$link = 'http://localhost/TCC/projeto-refeito/alterarSenha.php?senha='.$senha;

$conteudo = "
	<h1>Confirmação de Cadastro</h1>
	<br>
	<p>Sua senha atual é: ".$senha." </p>
	<p>Ao acessar o link abaixo, você irá ser redirecionado para a página onde você poderá alterar sua senha.</p>
	<a href=".$link.">Cadastrar Senha</a>
";


try {
	//$mail->SMTPDebug = SMTP::DEBUG_SERVER;
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'tccifmg2020@gmail.com';
	$mail->Password = 'IsaCaio123@';
	$mail->Port = 587;

	$mail->setFrom('tccifmg2020@gmail.com');
	$mail->addAddress($email);

	$mail->isHTML(true);
	$mail->Subject = 'Cadastro Gerencianet';
	$mail->Body = $conteudo;
	$mail->AltBody = "Acesse o link ".$link;

	if($mail->send()) {
		echo 'Email enviado com sucesso';
		header("location: ../../index.php?page=visualizarA");
	} else {
		echo 'Email nao enviado';
	}
} catch (Exception $e) {
	echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
}