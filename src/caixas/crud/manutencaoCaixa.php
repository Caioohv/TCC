<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manutenção Caixa</title>
    <link rel="stylesheet" href="../../../src/styles/main.css">
    <link rel="stylesheet" href="../../../src/styles/caixas.css">
    <link rel="stylesheet" href="../../../src/styles/editarCaixa.css">


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
            <a href="../../../src/index.php"><h1>Início</h1></a>
            <a href="../../../src/adm/crudADM/visualizarADM.php"><img src="../../../src/icons/UserIcon.png" alt="" class="link-adm"></a>
        </div>
        <div class="links">
            <!-- Colocar 'class="selected" onde for o selecionado' -->
            <p><a href="../../../src/caixas/crud/cadastrarCaixa.php" class="link">Cadastrar Caixa</a></p>
            <p class="selected"><a href="../../../src/caixas/crud/manutencaoCaixa.html" class="link">Manutenção</a></p>
            <p><a href="../../../src/caixas/crud/visualizarCaixa.html" class="link">Visualizar Caixas</a></p>
            <p><a href="../../../src/caixas/crud/editarCaixa.html" class="link">Editar Caixa</a></p>
            <p><a href="../../../src/caixas/crud/pesquisarCaixa.html" class="link">Pesquisar Caixa</a></p>
        </div>
    </div>

    <!-- Conteúdo da Página -->
    <div class="main">
        <h1>Editar Caixa</h1>
        <br>
        <div class="textoCentral">
            <form action="" method="POST" name="fdmCadastro">
                <input type="text" name="codCaixa" id="codCaixa" class="caixaTexto" placeholder="Código do Caixa">
                <p>Status</p>
                
                <select name="statusCaixa" id="statusCaixa">
                    <option value="1">Ativo</option>
                    <option value="2">Em Manutenção</option>
                    <option value="1">Inativo/Inoperante</option>
                </select>
                
                <br><br><br>
                <div class="fbotao">
                    <input type="submit" value="Atualizar" class="btn btn-outline-primary">
                </div>
            </form>
        </div>

</body>

</html>