<?php

function gerarSenha($cpf){

    $senha = "035";

    //adcionando parte do cpf à senha
    $splited = str_split($cpf);
    $senha = $senha . $splited[5] . $splited[3] . $splited[7] . $splited[2] . $splited[1] . $splited[0];

    //26
    $letras = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
    //10
    $numeros = array('1','2','3','4','5','6','7','8','9','0');
    
    for($i = 0; $i < 4; $i++){
        //define uma letra aleatória
        $n = rand(0, 25);
        $letra = $letras[$n];
        
        //define um número aleatório
        $n = rand(0, 9);
        $numero = $numeros[$n];

        //adciona os dois à senha
        $senha = $senha . $letra . $numero;

    }
    echo $senha;
    return $senha;

    //CaioCrypto

}





session_start();
//incluindo o arquivo de conexão
include_once '../conexao.php';

    if(isset($_GET['txtEmail'])){
        //recebendo os dados que vieram do formulário
        $cpf_adm = $_GET['txtCpf'];
        $email_adm = $_GET['txtEmail'];
        $nm_adm = $_GET['txtNome'];
        $pass_adm = gerarSenha($cpf_adm);

        //inserindo no banco de dados a query 
        $sql = "INSERT INTO admin (cpf_adm, email_adm, nm_adm, pass_adm) VALUES
        ('$cpf_adm', '$email_adm', '$nm_adm', '$pass_adm');";

        echo $sql;
        
        $result = mysqli_query($con, $sql);
        if($result){
            mysqli_close($con);

            //encaminhando o email    
            echo "Admin cadastrado com sucesso!";
            header("location: ../PHPMailer/mailer.php?email=".$email_adm."&senha=".$pass_adm);
            
        }else{
            echo '<p style="color: red; font-size: 3rem;"> Erro ao cadastrar admin</p>';
            mysqli_close($con);
        }
    }




    

?>

