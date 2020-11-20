<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>





    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Caixa</title>
    <!-- <link rel="stylesheet" href="/src/styles/main.css"> -->
    <link rel="stylesheet" href="../../../src/styles/main.css">
    <link rel="stylesheet" href="../../../src/styles/caixas.css">
    <link rel="stylesheet" href="../../../src/styles/cadastrarCaixa.css">

    <link
        href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;700&amp;family=Poppins:wght@400;600&amp;display=swap"
        rel="stylesheet">
</head>

<body>
    <!-- Sidebar -->
    <div class="sidenav">
        <div class="side-header">
            <a href="/src/index.html"><h1>Início</h1></a>
            <a href="/src/adm/crudADM/visualizarADM.html"><img src="/src/icons/UserIcon.png" alt="" class="link-adm"></a>
        </div>
        <div class="links">
            <!-- Colocar 'class="selected" onde for o selecionado' -->
            <p class="selected"><a href="/src/caixas/crud/cadastrarCaixa.php" class="link">Cadastrar Caixa</a></p>
            <p><a href="../../../src/caixas/crud/manutencaoCaixa.php" class="link">Manutenção</a></p>
            <p><a href="../../../src/caixas/crud/visualizarCaixa.php" class="link">Visualizar Caixas</a></p>
            <p><a href="../../../src/caixas/crud/editarCaixa.php" class="link">Editar Caixa</a></p>
            <p><a href="../../../src/caixas/crud/pesquisarCaixa.php" class="link">Pesquisar Caixa</a></p>
            


        </div>
    </div>

    <!-- Conteúdo da Página -->
    <div class="main">
        <h1>Cadastro</h1>
        <br>
        <section class="container">
            <form action="../../php/inserir_caixa.php" method="POST" name="fdmCadastro">
                <p>Dados Básicos</p>
                <input type="text" name="txtNome" id="txtNome" class="caixaTexto" placeholder="Nome">
                <input type="text" name="txtEndereco" id="txtEndereco" class="caixaTexto" placeholder="Endereço">

                <p>Localizações</p>
                <input type="text" name="txtX" id="txtX" class="caixaTexto" placeholder="Localização X">
                <input type="text" name="txtY" id="txtY" class="caixaTexto" placeholder="Localização Y">

                <p>Horários: </p>
                <input type="time" name="hrrAbrir" id="hrrAbrir" class="caixaTexto">
                <input type="time" name="hrrFechar" id="hrrFechar" class="caixaTexto">
                <p>Código do Caixa: XXXXXXXX</p>
                
                <div class="fbotao">
                    <input type="submit" name="submit" value="Cadastrar" class="btn btn-outline-primary">
                </div>
            </form>
        </section>
    </div>

</body>

</html>