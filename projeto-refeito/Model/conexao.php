<?php
    $servidor = "200.18.128.52";
    $usuario = "caio_isabella";
    $senha = "caio_isabella";
    $nomeBD = "caio_isabella";
    $con = new mysqli($servidor, $usuario, $senha, $nomeBD);


    //conferindo conexão com o servidor
    if($con->connect_error){
        die("Falha na conexão".$con->connect_error);
    }

?>