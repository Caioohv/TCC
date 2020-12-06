<?php
/* config do db */
define('DB_SERVER', '200.18.128.52');
define('DB_USERNAME', 'caio_isabella');
define('DB_PASSWORD', 'caio_isabella');
define('DB_NAME', 'caio_isabella');

/* conecta ao db */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// verifica conexao
if($link === false){
    die("ERRO: não foi possível conectar ao banco de dados. " . mysqli_connect_error());
}
?>