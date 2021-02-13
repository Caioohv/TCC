<?php
include '../conexao.php';

$email_adm = $_POST['email'];
$pass_adm = ($_POST['pass']);


$sql = "SELECT * FROM admin where email_adm = '$email_adm';";

$validasenha = 0;

$result = mysqli_query($con, $sql) ; //or die("Usuário ou senha inválidos")
while($row = mysqli_fetch_array($result)) {
    if($row['pass_adm'] == $pass_adm){
        $validasenha = 1;
        
        
        break;
    }
}


    if($validasenha == 1){
        session_start();
        
        $_SESSION["userId"] = $email_adm;
        $_SESSION["userPass"] = $pass_adm;
        
        echo "<script language='javascript' type='text/javascript'>";
        echo "javascript:window.location='../../index.php?page=initial';</script>";
    }else{
        //echo 'senha errada';
        echo "<script language='javascript' type='text/javascript'>alert('Usuário e/ou senha inválidos!');";
        echo "javascript:window.location='../../index.php';</script>";
    }

    mysqli_close($con); 
    
?>