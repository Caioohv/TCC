<?php
    session_start();
    
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Gerencianet</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel="stylesheet" href="styles/main.css">
        <link rel="stylesheet" href="styles/page-landing.css">
        <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&amp;family=Poppins:wght@400;600&amp;display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="barra-lateral-adm"> 

        <?php
            if(isset($_SESSION['userId'])){
                echo '<h1>Início</h1>
                <p class="header-text">Caixas</p>
                <p class="link-text"> <a href="View/caixa/cadastrarCaixa.php">Cadastrar Caixas</a></p>
                <p class="link-text"> <a href="View/caixa/editarCaixa.php">Editar Caixa</a></p>
                <p class="link-text"> <a href="View/caixa/manutencaoCaixa.php">Manutenção dos caixas</a></p>
                <p sclass="link-text"> <a href="View/caixa/visualizarCaixa.php">Visualizar Caixa</a></p>
                
                <p class="header-text">Admin</p>
                <p class="link-text"> <a href="View/adm/cadastrarADM.php">Cadastrar Admin</a></p>
                <p class="link-text"> <a href="View/adm/editarADM.php">Editar Admin</a></p>
                <p class="link-text"> <a href="View/adm/visualizarADM.php">Visualizar Admin</a></p>
                <br>';
            }else{
                echo '<p>Acesso restrito</p>';
                header('location: View/login/login.php');
            }

        ?>
            
        </div>
    </body>
</html>