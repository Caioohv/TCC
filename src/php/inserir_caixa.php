<?php

        
//importanto arquivo de conexao
include 'conexao.php';


    //verifica se algum valor foi definido
    if(isset($_POST['submit'])){
        // - - exibe os valores no console
        // echo $_POST['txtNome'];
        // echo $_POST['txtEndereco'];
        // echo $_POST['txtX'];
        // echo $_POST['txtY'];
        // echo $_POST['hrrAbrir'];
        // echo $_POST['hrrFechar'];

        //passa os valores recebidos pelo post para variáveis
        $nome = filter_input(INPUT_POST, 'txtNome' FILTER_SANITIZE_STRING];
        $endereco = filter_input(INPUT_POST, 'txtEndereco' FILTER_SANITIZE_STRING];
        $X = $_POST['txtX'];
        $Y = $_POST['txtY'];
        $abertura = $_POST['hrrAbrir'];
        $fechamento = $_POST['hrrFechar'];
        
        
        
        //recebendo os dados do formulário
        $nm_adm = filter_input(INPUT_POST, 'txtNome', FILTER_SANITIZE_STRING);
        $cpf_adm = filter_input(INPUT_POST, 'txtCpf', FILTER_SANITIZE_STRING);
        $email_adm = filter_input(INPUT_POST, 'txtEmail', FILTER_SANITIZE_EMAIL);
        $pass_adm = filter_input(INPUT_POST, 'txtSenha', FILTER_SANITIZE_PASSWORD);
        
        //inserindo no banco de dados a querry 
        $result_adm = "INSERT INTO p.admin (nm_adm,cpf_adm, email_adm, pass_adm) VALUES ('$nm_adm', '$cpf_adm, '$email_adm, '$pass_adm";
        //executando querry
        $result_adm = mysqli_querry($con, $result_adm);
        
        
        //verificando se salvou com sucesso com base ao id_adm
        if(mysqli_insert_id($con)){
            $_SESSION['msg'] = "<p style='color:green;'>Administrador cadastrado com sucesso</p>";
            header("Location: cadastrarADM.php");
        }else{
            $_SESSION['msg'] = "<p style='color:red;'>Administrador não foi cadastrado com sucesso</p>";
            header("Location: cadastrarADM.php");
        }
        ?>
        