<?php

include '../conexao.php';

$email_adm = $_POST['txtEmail'];
$pass_adm = ($_POST['txtPass']);
// $pass_adm = md5($_POST['txtPass']);
echo '<p>usr: '.$email_adm.' - pass: '.$pass_adm.'</p>';
$sql = "SELECT * FROM admin where email_adm = '$email_adm';";

$validasenha = 0;

$result = mysqli_query($con, $sql) ; //or die("Usuário ou senha inválidos")
while($row = mysqli_fetch_array($result)) {
    echo '<p>usr: '.$row['email_adm'].' - pass: '.$row['pass_adm'].'</p>';
    if($row['pass_adm'] == $pass_adm){
        echo '<p>senha correta</p>';
        $validasenha = 1;
        
    }else{
        echo 'senha incorreta';
    }
    echo '<br>';
}


    if($validasenha == 1){
        session_start();
        
        $_SESSION["userId"] = $email_adm;
        $_SESSION["userPass"] = $pass_adm;
        
        // $nm_cookie = 'usuario';
        // $vlr_cookie = $row['nm_adm'];
        
        // setcookie($nm_cookie, $vlr_cookie, time()+(86400), "/"); //86400 = 1 dia
        
        echo "<script language='javascript' type='text/javascript'>alert('Login efetuado com sucesso!');";
        echo "javascript:window.location='../../index.php';</script>";
    }else{
        //echo 'senha errada';
        echo "<script language='javascript' type='text/javascript'>alert('Usuário e/ou senha inválidos!');";
        echo "javascript:window.location='../../index.php';</script>";
    }

    mysqli_close($con); 
    
?>