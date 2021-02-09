<?php
session_start();
//incluindo o arquivo de conexão
include_once '../conexao.php';

    if(isset($_POST['submit'])){
        //recebendo os dados que vieram do formulário
        $cpf_adm = $_POST['txtCpf'];
        $email_adm = $_POST['txtEmail'];
        $pass_adm = MD5($_POST['txtSenha']);
        $nm_adm = $_POST['txtNome'];

        //inserindo no banco de dados a query 
        $sql = "INSERT INTO admin (cpf_adm, email_adm, pass_adm, nm_adm) VALUES
        ('$cpf_adm', '$email_adm', '$pass_adm', '$nm_adm');";

        echo $sql;
        
        $result = mysqli_query($con, $sql);
        if($result){
            mysqli_close($con);
            echo "Admin cadastrado com sucesso!";
            header("location: ../../index.php?page=cadastrarA");
            
        }else{
            echo '<p style="color: red; font-size: 3rem;"> Erro ao cadastrar admin</p>';
            mysqli_close($con);
        }
    }
?>

