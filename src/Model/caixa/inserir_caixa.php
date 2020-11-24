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
        $nm_caixa = $_POST['txtNome'];
        $endereco_caixa = $_POST['txtEndereco'];
        $local_x_caixa = $_POST['txtX'];
        $local_y_caixa = $_POST['txtY'];
        $horario_inicio_caixa = $_POST['hrrAbrir'];
        $horario_fim_caixa = $_POST['hrrFechar'];
        
        //inserindo no banco de dados a querry 
    
        $result = "
        insert into caixa (nm_caixa, endereco_caixa, local_x_caixa, 
        local_y_caixa, horario_inicio_caixa, horario_fim_caixa) 
        values ('$nm_caixa', '$endereco_caixa', '$local_x_caixa', 
        '$local_y_caixa', '$horario_inicio_caixa', '$horario_fim_caixa');
        ";
        
        //echo $result;
        //executando querry
        $result = mysqli_query($con, $result);
        if($result){
            header('location:../caixas/crud/cadastrarCaixa.php');
        }else{
            echo '<p style="color: red; font-size: 3rem;"> Erro ao cadastrar caixa</p>';
        }

        mysqli_close($con);

    }
?>
        