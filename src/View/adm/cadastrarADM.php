<?php
//session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Admin</title>
    <!-- Gerais -->
    <link rel="stylesheet" href="../styles/main.css">
    <link rel="stylesheet" href="../styles/sidenav.css">
    <link rel="stylesheet" href="../styles/central.css">
    <link rel="stylesheet" href="../styles/table.css">
    <link rel="stylesheet" href="../styles/button.css">
    <!-- Específicos -->




    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&amp;family=Poppins:wght@400;600&amp;display=swap" rel="stylesheet">
    
</head>


<body>
    <!-- Sidebar -->
    <div class="sidenav">
        <div class="side-header">
            <a href="../../index.php"><h1>Início</h1></a>
            <a href="../caixa/cadastrarCaixa.php"><img src="../styles/icons/UserIcon.png" alt=""></a>
            <a href="../login/login.php"><img src="../styles/icons/logoout_icon.png" alt=""></a>
        </div>
        <div class="links">
            <!-- Colocar 'class="selected" onde for o selecionado' -->

            <p class="selected"><a href="cadastrarADM.php" class="link">Cadastrar Admin</a></p>
            <p><a href="editarADM.php" class="link">Editar Admin</a></p>
            <p><a href="visualizarADM.php" class="link">Visualizar Admin</a></p>
            <p><a href="validarADM.php" class="link">Validar Admin</a></p>

        </div>
    </div>

    <!-- Conteúdo da Página -->
    <div class="main">
        <h1>Cadastrar Administrador</h1>
        <?php
            //imprime o valor da variável global da mensagem, e a destrói depois disso
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset ($_SESSION['msg']);
            }
        ?>
        <form action="../../Model/adm/inserir_adm.php" method="POST" name="fdmCadastro">
                <div class="textoCentral">
                    <input type="email" name="txtEmail" id="txtEmail" class="caixaTexto" placeholder="Email">
                    <input type="text" name="txtNome" id="txtNome" class="caixaTexto" placeholder="Nome">
                    <input type="text" name="txtCpf" id="txtCpf" class="caixaTexto" placeholder="CPF">
                    <input type="password" name="txtSenha" id="txtSenha" class="caixaTexto" placeholder="Senha">
                    <br><br>
                </div>
                <div class="fbotao">
                    <input type="submit" value="Cadastrar" class="btn btn-outline-primary">
                </div>
        </form>
    </div>
</body>
</html>