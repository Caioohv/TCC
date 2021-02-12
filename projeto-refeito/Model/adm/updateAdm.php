<?php

session_start();

include_once '../conexao.php';

    if(isset($_POST['submit'])){
        //receber os dados do form
        $email_adm = $_POST['txtEmail'];
        $nm_adm = $_POST['txtNome'];
        $cpf_adm = $_POST['txtCpf'];

        $id = $_SESSION['id-a'];
        echo $id;
        
        

        //criar comando sql
        $sql = "UPDATE admin SET email_adm='$email_adm', nm_adm='$nm_adm' ,cpf_adm='$cpf_adm' WHERE id_adm=$id;";
        echo $sql;
        
        $result = mysqli_query($con, $sql);
        
        // executar comando
        if($result){
            mysqli_close($con);
            echo "Admin cadastrado com sucesso!";
            header("location: ../../index.php?page=visualizarA");
        }else{
            echo '<p style="color: red; font-size: 3rem;"> Erro ao atualizar caixa</p>';
            echo '<a href="../../index.php?page=visualizarA"> Retornar</a>';
            mysqli_close($con);
        }
    }



?>