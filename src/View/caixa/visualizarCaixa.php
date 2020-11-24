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
    <div class="main">
        <h1>Caixas</h1>
        <br>
        <div class="formPesquisa">
            <form action="" method="POST" name="fdmView">
                <input type="text" name="txtcod" id="txtcod" class="caixaTexto" placeholder="Código">
                <input type="text" name="txtlocal" id="txtlocal" class="caixaTexto" placeholder="Cidade">
                <input type="text" name="txtnome" id="txtnome" class="caixaTexto" placeholder="Nome">
        </div>
        <br>
        <div class="tableCaixas">
            <table>
                <tr>
                    <th class="id">Id</th>
                    <th>Cidade</th>
                    <th>Nome</th>
                    <th>Atividade</th>
                    <th>Editar</th>
                </tr>
                <tr>
                    <td class="id">c000001</td>
                    <td>Ouro Preto</td>
                    <td>Caixa da praça 7</td>
                    <td>08:00h - 22:00h</td>
                    <td>
                        <div class="botoesEdit">
                            <a href="editarCaixa.php">Editar</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="id">c000002</td>
                    <td>Ouro Preto</td>
                    <td>Caixa da Igreja do Centro</td>
                    <td>09:00h - 21:00h</td>
                    <td>
                        <div class="botoesEdit">
                            <a href="editarCaixa.php">Editar</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="id">c000003</td>
                    <td>Ouro Preto</td>
                    <td>Caixa da Avenida</td>
                    <td>06:00h - 00:00h</td>
                    <td>
                        <div class="botoesEdit">
                            <a href="editarCaixa.php">Editar</a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td class="id">c000004</td>
                    <td>Ouro Preto</td>
                    <td>Caixa da Vila</td>
                    <td>08:00h - 20:00h</td>
                    <td>
                        <div class="botoesEdit">
                            <a href="editarCaixa.php">Editar</a>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

        
    </div>

</body>

</html>