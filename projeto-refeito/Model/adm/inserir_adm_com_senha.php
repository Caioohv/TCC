<?php
session_start();

//incluindo o arquivo de conexão
include_once '../conexao.php';

    if(isset($_GET['url-email'])){
        //recebendo os dados que vieram do formulário
        $email_adm = $_GET['txtEmail'];

        //inserindo no banco de dados a query 
        $sql = "INSERT INTO admin (cpf_adm, email_adm, nm_adm) VALUES
        ('$cpf_adm', '$email_adm', '$nm_adm');";

        echo $sql;
        
        $result = mysqli_query($con, $sql);
        if($result){
            mysqli_close($con);

            //encaminhando o email
            $url = "localhost/TCC/projeto-refeito/Model/adm/inserir_adm_com_senha.php?email=$email_adm";
            $_SESSION['url-email'] = $url;


            
            echo "Admin cadastrado com sucesso!";
            header("location: ../../index.php?page=cadastrarA");
            
        }else{
            echo '<p style="color: red; font-size: 3rem;"> Erro ao cadastrar admin</p>';
            mysqli_close($con);
        }
    }




    

?>
