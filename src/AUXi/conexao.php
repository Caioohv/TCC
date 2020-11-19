<?php
    //startou a session aqui para não ter que ficar fazendo isso
    //em todas as páginas php que precisam da session
    session_start();
    //parâmetros de acesso ao BD
    $servidor = "200.18.128.52";
    $usuario = "caio_isabella";
    $senha = "caio_isabella";
    $nomeBD = "caio_isabella";
    $con = new mysqli($servidor, $usuario, $senha, $nomeBD);

?>
