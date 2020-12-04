<?php

include '../conexao.php';

$email_adm = $_POST['txtEmail'];
echo $email_adm;
echo ' - ';
$pass_adm = md5($_POST['txtPass']);
echo $pass_adm;
echo '<br> ';
$sql = "SELECT * FROM admin where email_adm = '$email_adm';";
echo $sql;

$validasenha = 0;

$result = mysqli_query($con, $sql) ; //or die("Usuário ou senha inválidos")
echo '<br>';
echo '<br>';
echo '<br>';
echo '<h3>Resultados</h3>';
while($row = mysqli_fetch_array($result)) {
    echo $row['email_adm'];
    echo ' - ';
    echo $row['nm_adm'];
    echo ' - ';
    if($row['pass_adm'] == $pass_adm){
        echo 'senha correta';
        $validasenha = 1;
    }else{
        echo 'senha incorreta';
    }
    echo '<br>';
}
/*
//if (isset($senha)) {
    if (mysqli_num_rows($result)<=0 && $validasenha != 1){
        echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');</script>";
        die();
    }else{
        setcookie("login",$email_adm);
        setcookie("senha",$pass_adm);
        echo 'logou';
        //echo "<script language='javascript' type='text/javascript'>alert('Login efetuado com sucesso!');";
        //echo "javascript:window.location='../../index.php';</script>";
    }
    */
//}

    if($validasenha == 1){
        setcookie("login",$email_adm);
        setcookie("senha",$pass_adm);
        //echo 'logou';
        echo "<script language='javascript' type='text/javascript'>alert('Login efetuado com sucesso!');";
        echo "javascript:window.location='../../index.php';</script>";
    }else{
        //echo 'senha errada';
        echo "<script language='javascript' type='text/javascript'>alert('Usuário e/ou senha inválidos!');";
        echo "javascript:window.location='../../index.php';</script>";
    }

    mysqli_close($con); 
    
?>