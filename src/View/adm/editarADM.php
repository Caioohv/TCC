<?php 
    session_start();
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar Admin</title>

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
        <link
            href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&amp;family=Poppins:wght@400;600&amp;display=swap"
            rel="stylesheet">

    </head>

    <body>
        <!-- Sidebar -->
        <?php 
            if(isset($_SESSION['userId'])){
                echo '<div class="sidenav">
                            <div class="side-header">
                                <a href="../../index.php"><h1>Início</h1></a>
                                <a href="../caixa/cadastrarCaixa.php"><img src="../styles/icons/UserIcon.png" alt=""></a>
                                <a href="../login/logout.php"><img src="../styles/icons/logout.png" alt=""></a>
                            </div>
                            <div class="links">
                                <p><a href="cadastrarADM.php" class="link">Cadastrar Admin</a></p>
                                <p class="selected"><a href="editarADM.php" class="link">Editar Admin</a></p>
                                <p><a href="visualizarADM.php" class="link">Visualizar Admin</a></p>
                                <p><a href="validarADM.php" class="link">Validar Admin</a></p>
                            </div>
                        </div>';
            }else{
                echo '<!-- Sidebar -->
                        <div class="sidenav">
                            
                            <div class="links">
                                
                                <p><a href="../login/login.php" class="link">Login</a></p>

                            </div>
                        </div>';
            }
        ?>

        <!-- Conteúdo da Página -->
        <?php 
            if(isset($_SESSION['userId'])){
                echo '<div class="main">
                        <h1>Minha Conta</h1>
                        <form action="" method="POST" name="fdmCadastro">
                            <div class="textoCentral">
                                <input type="text" name="txtCpf" id="txtCpf" class="caixaTexto" placeholder="CPF" disabled>
                                <br><br>
                                <input type="text" name="txtEmail" id="txtEmail" class="caixaTexto" placeholder="Email">
                                <input type="text" name="txtNome" id="txtNome" class="caixaTexto" placeholder="Nome">
                                <br><br>
                            </div>
                            <div class="textoCentral">
                                <input type="password" name="txtSenha" id="txtSenha" class="caixaTexto" placeholder="Nova Senha">
                                <input type="password" name="txtSenhaC" id="txtSenhaC" class="caixaTexto" placeholder="Confirmar senha">
                            </div>
                            <br><br>
                            <div class="fbotao">
                                <input type="submit" value="Atualizar" class="btn btn-outline-primary">
                            </div>
                        </form>
                    </div>';
            }else{
                echo '<p style="padding: 500px">Acesso restrito</p>';
            }
        ?>  
        
    </body>
    </html>
