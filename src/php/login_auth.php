<?php

include 'conexao.php';

$id_adm = $_POST['txtUser'];
$pass_adm = md5($_POST['txtPass']);

$verifica = mysql_query("SELECT (id_adm, pass_adm) FROM admin where id_adm = '$id_adm' AND pass_adm = '$pass_adm'") or die("Usuário ou senha inválidos");

if (isset($senha)) {
    if (mysql_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');</script>";
        die();
    }else{
        setcookie("login",$id_adm);
        setcookie("senha",$pass_adm);
        header("Location:../../../index.html");
    }
}
?>