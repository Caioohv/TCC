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

<<<<<<< HEAD


    
=======
>>>>>>> 9cf1bbedc1547f6e1c75755896d07c49c882a595
?>