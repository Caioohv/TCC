<?php 
    session_start();
?>

    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Pesquisar Caixa</title>
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
    <?php 
        
        if(isset($_SESSION['userId'])){
            echo '<!-- Sidebar -->
            <div class="sidenav">
                <div class="side-header">
                    <a href="../../index.php"><h1>Início</h1></a>
                    <a href="../adm/cadastrarADM.php"><img src="../styles/icons/UserIcon.png" alt="" class="link-adm"></a>
                    <a href="../login/logout.php"><img src="../styles/icons/logout.png" alt=""></a>
                </div>
                <div class="links">
                    
                    <p><a href="cadastrarCaixa.php" class="link">Cadastrar Caixa</a></p>
                    <p><a href="manutencaoCaixa.php" class="link">Manutenção</a></p>
                    <p><a href="visualizarCaixa.php" class="link">Visualizar Caixas</a></p>
                    <p><a href="editarCaixa.php" class="link">Editar Caixa</a></p>
                    <p class="selected"><a href="pesquisarCaixa.php" class="link">Pesquisar Caixa</a></p>
                    <a href="../../Model/login/logout.php"><img src="../styles/icons/logout.png" alt=""></a>
                </div>
            </div>
    ';
        }else{
            echo '<!-- Sidebar -->
            <div class="sidenav">
                
                <div class="links">
                    
                    <p><a href="../login/login.php" class="link">Login</a></p>

                </div>
            </div>';
            
        }
        
        
        ?>

        

        <!-- Conteúdo da página -->
        <?php 
            if(isset($_SESSION['userId'])){
                echo '<div class="main">
            <h1>Pesquisar Caixa</h1>
            <br>
            <div>
                <input style="width: 80%" type="text" name="txtCaixa" id="txtCaixa" class="caixaTexto" placeholder="Pesquisar por caixa">
            </div>
            <br>
            <div class="table-responsive" style="width: 100%; height: 150px;">
                <table>
                    <tbody>
                        <tr>
                            <th>Nome</th>
                            <th>Endereço</th>
                            <th>Latitude</th>
                            <th>Longetude</th>
                            <th>Funcionamento</th>
                            <th>Código</th>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <th>Caixa 1</th>
                            <th>Rua Narcisio de Queiroz, 225</th>
                            <th>-085862</th>
                            <th>678956</th>
                            <th>8:00 às 22:00</th>
                            <th>XXXXXXXXXX</th>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <th>Caixa 2</th>
                            <th>Rua Telésforo Cândido Rezende, 13</th>
                            <th>-085872</th>
                            <th>687556</th>
                            <th>9:00 às 21:00</th>
                            <th>XXXXXXXXXX</th>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <th>Caixa 3</th>
                            <th>Rua Maria Amélia, 998</th>
                            <th>-087592</th>
                            <th>875966</th>
                            <th>7:00 às 23:00</th>
                            <th>XXXXXXXXXX</th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        ';
            }else{
                echo '<p style="padding: 500px">Acesso restrito</p>';
            }
        ?>  
        
    </body>
    </html>
