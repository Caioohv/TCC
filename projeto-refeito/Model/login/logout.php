<?php
	//inicia a session
	session_start();
	//indefine variaveis
	session_unset();
	//destroi a session
	session_destroy();
	//redireciona para o index.php
	header("location: ../../index.php");
?>