<?php
session_start();

//incluindo o arquivo de conexão
include_once '../conexao.php';

    if(!isset($_SESSION['userId'])){
        //recebendo os dados que vieram do formulário
        $pass = $_GET['pass1'];
        $lastpass = $_GET['antiga'];

        //inserindo no banco de dados a query 
        $sql = "UPDATE admin SET pass_adm='".$pass."' WHERE pass_adm='".$lastpass."';";

        echo $sql;
        
        $result = mysqli_query($con, $sql);
        if($result){
            mysqli_close($con);            


            
            echo "Admin atualizado com sucesso!";
            header("location: ../../index.php?page=visualizarA");
            
        }else{
            echo '<p style="color: red; font-size: 3rem;"> Erro ao atualizar senha pelo link</p>';
            echo $sql;
            mysqli_close($con);
        }
    }else{
        //recebendo os dados que vieram do formulário
        $pass = $_POST['pass1'];
 
        //inserindo no banco de dados a query 
        $sql = "UPDATE admin SET pass_adm=".$pass." WHERE emaill_adm=".$_SESSION['userId'];
 
        //echo $sql;
        
        $result = mysqli_query($con, $sql);
        if($result){
            mysqli_close($con);            
 
 
             
            echo "Admin atualizado com sucesso!";
            header("location: ../../index.php?page=visualizarA");
             
        }else{
            echo '<p style="color: red; font-size: 3rem;"> Erro ao atualizar admin</p>';
            mysqli_close($con);
        }
    }




    

?>
