
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Visualizar Caixa</title>
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
        <div class="sidenav">
            <div class="side-header">
                <a href="../../index.php"><h1>Início</h1></a>
                <a href="../adm/cadastrarADM.php"><img src="../styles/icons/UserIcon.png" alt="" class="link-adm"></a>
                <a href="../login/logout.php"><img src="../styles/icons/logout.png" alt=""></a>
            </div>
            <div class="links">
                <!-- Colocar 'class="selected" onde for o selecionado' -->
                <p><a href="cadastrarCaixa.php" class="link">Cadastrar Caixa</a></p>
                <p><a href="manutencaoCaixa.php" class="link">Manutenção</a></p>
                <p class="selected"><a href="visualizarCaixa.php" class="link">Visualizar Caixas</a></p>
                <p><a href="editarCaixa.php" class="link">Editar Caixa</a></p>
                <p><a href="pesquisarCaixa.php" class="link">Pesquisar Caixa</a></p>
            </div>
        </div>

        <!-- Conteúdo da Página -->
        <div class="teste">
            <div class="main">
                <h1>Caixas</h1>
                <br>
                <div class="formPesquisa">
                    <form action="visualizarCaixa.php" method="POST" name="fdmView">
                        <input type="text" name="txtcod" id="txtcod" class="caixaTexto" placeholder="Código">
                        <input type="text" name="txtlocal" id="txtlocal" class="caixaTexto" placeholder="Cidade">
                        <input type="text" name="txtnome" id="txtnome" class="caixaTexto" placeholder="Nome">
                        <input type="submit" value="Pesquisar">
                    </form>
                </div>
                <br>
                <div class="tableCaixas">
                    <table>
                        <tr>
                            <th class="id">Id</th>
                            <th>Nome</th>
                            <th>Endereço</th>
                            <th>Status</th>
                            <th>Editar</th>
                        </tr>
                        <!-- <tr>
                            <td class="id">c000001</td>
                            <td>Ouro Preto</td>
                            <td>Caixa da praça 7</td>
                            <td>08:00h - 22:00h</td>
                            <td>
                                <div class="botoesEdit">
                                    <a href="editarCaixa.php">Editar</a>
                                </div>
                            </td>
                        </tr> -->
                        <?php
                        
                        include_once '../../Model/conexao.php';

                        if($con -> connect_error){
                            die("Falha na conexão com o banco de dados: " . $con->connection_error);
                        }
                        
                        $sql = "SELECT * FROM caixa";// WHERE id_caixa like".$_POST['txtcod']." AND endereco_caixa like ".$_POST['txtlocal']." AND nm_caixa like ".$_POST['txtnome'].";";
                        $result = mysqli_query($con, $sql);
                        
                        if($result->num_rows > 0){
                            while($row = $result -> fetch_assoc()){
                                echo '<tr>';
                                echo '<td> '.$row['id_caixa'].'</td>';
                                echo '<td> '.$row['nm_caixa'].'</td>';
                                echo '<td> '.$row['endereco_caixa'].'</td>';
                                echo '<td> '.$row['endereco_caixa'].'</td>';
                                echo '<td><div class="botoesEdit"><a href="editarCaixa.php">Editar</a></div></td>';
                                echo '</tr>';
                            }
                        }

                        ?>
                    </table>
                </div>

                
            </div>
        </div>
        
    </body>

</html>
    