<?php
session_start();

//incluindo o arquivo de conexão
include_once '../conexao.php';

    if(isset($_GET['link'])){
        //recebendo os dados que vieram do formulário
        

        //inserindo no banco de dados a query 
        $sql = "UPDATE admin SET pass_adm=".$_GET.['senha']." WHERE ;

        echo $sql;
        
        $result = mysqli_query($con, $sql);
        if($result){
            mysqli_close($con);            


            
            echo "Admin atualizado com sucesso!";
            header("location: ../../index.php?page=visualizarA");
            
        }else{
            echo '<p style="color: red; font-size: 3rem;"> Erro ao cadastrar admin</p>';
            mysqli_close($con);
        }
    }




    

?>
