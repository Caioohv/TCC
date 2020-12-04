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
    <!--aaaaaaaaaaa-->

    <?php
        session_start();
        if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true)){
            unset($_SESSION['login']);
            unset($_SESSION['senha']);
            header('location:View/login/login.php');
        }
        $logado = $_SESSION['login'];
    ?>

</head>
<body>
    <div class="barra-lateral-adm"> 
        <h1>Início</h1>
        <p class="header-text">Caixas</p>
        <p class="link-text"> <a href="caixas/crud/cadastrarCaixa.php">Cadastrar Caixas</a></p>
        <p class="link-text"> <a href="caixas/crud/editarCaixa.php">Editar Caixa</a></p>
        <p class="link-text"> <a href="caixas/crud/manutencaoCaixa.php">Manutenção dos caixas</a></p>
        <p sclass="link-text"> <a href="caixas/crud/visualizarCaixa.php">Visualizar Caixa</a></p>
        
        <p class="header-text">Admin</p>
        <p class="link-text"> <a href="adm/crudADM/cadastrarADM.php">Cadastrar Admin</a></p>
        <p class="link-text"> <a href="adm/crudADM/editarADM.php">Editar Admin</a></p>
        <p sclass="link-text"> <a href="adm/crudADM/visualizarADM.php">Visualizar Admin</a></p>
        <br>
        
    </div>
</body>
</html>