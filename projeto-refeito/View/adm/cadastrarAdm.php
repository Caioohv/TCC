<?php 
    include_once('../../Model/conexao.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Administrador</title>
    
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
 <!-- Conteúdo da Página -->
 
        <h1>Cadastrar Administrador</h1>
        <form action="../../Model/adm/inserirAdm.php" method="POST">
            <input type="email" name="txtEmail" id="txtEmail" class="caixaTexto"  required placeholder="Email" autofocus>
            <input type="text" name="txtNome" id="txtNome" class="caixaTexto"  required placeholder="Nome">
            <input type="text" name="txtCpf" id="txtCpf" class="caixaTexto"  required placeholder="CPF">
            <input type="password" name="txtSenha" id="txtSenha" class="caixaTexto" required placeholder="Senha">
            <input type="password" name="txtSenhaConfirm" id="txtSenhaConfirm" class="caixaTexto" required placeholder="Confirme sua senha">
            <br><br>

            <input type="submit" class="btn btn-primary" value="Cadastrar">
            <input type="reset" class="btn btn-warning" value="Cancelar">
        </form>

</body>
</html>