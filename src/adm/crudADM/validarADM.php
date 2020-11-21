<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validar Admin</title>
    <link rel="stylesheet" href="../../../src/styles/main.css">
    <link rel="stylesheet" href="../../../src/styles/caixas.css">
    <link rel="stylesheet" href="../../../src/styles/cadastroADM.css">

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
            <a href="../../../src/caixas/crud/cadastrarCaixa.php"><img src="../../../src/icons/UserIcon.png" alt=""></a>
        </div>
        <div class="links">
            <!-- Colocar 'class="selected" onde for o selecionado' -->
            <p><a href="../../../src/adm/crudADM/cadastrarADM.php" class="link">Cadastrar Admin</a></p>
            <p><a href="../../../src/adm/crudADM/editarADM.php" class="link">Editar Admin</a></p>
            <p><a href="../../../src/adm/crudADM/visualizarADM.php" class="link">Visualizar Admin</a></p>
            <p class="selected"><a href="../../../src/adm/crudADM/validarADM.php" class="link">Validar Admin</a></p>
        </div>
    </div>


    <!-- Conteúdo da página -->
    <div class="admin">
        <h1>Validar Administradores</h1>
        <div class="table-responsive" style="width: 100%; height: 200px;">
            <table>
                <tbody>
                    <tr>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>Email</th>
                        <th colspan="2">Validar</th>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <th>Carlos Eduardo</th>
                        <th>12536574198</th>
                        <th>carloseduardo@gmail.com</th>
                        <th><input type="submit" value="Permitir" class="btn btn-outline-success"></th>
                        <th><input type="submit" value="Recusar" class="btn btn-outline-danger"></th>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <th>Saulo Costa</th>
                        <th>12536574485</th>
                        <th>sauloeduardo@gmail.com</th>
                        <th><input type="submit" value="Permitir" class="btn btn-outline-success"></th>
                        <th><input type="submit" value="Recusar" class="btn btn-outline-danger"></th>
                    </tr>
                </tbody>
                <tbody>
                    <tr>
                        <th>Daniela Ferriera</th>
                        <th>14536574485</th>
                        <th>danielaferreira@gmail.com</th>
                        <th><input type="submit" value="Permitir" class="btn btn-outline-success"></th>
                        <th><input type="submit" value="Recusar" class="btn btn-outline-danger"></th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>