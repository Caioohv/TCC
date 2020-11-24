<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <!-- Gerais -->
        <link rel="stylesheet" href="../styles/main.css">
        <link rel="stylesheet" href="../styles/sidenav.css">
        <link rel="stylesheet" href="../styles/central.css">
        <link rel="stylesheet" href="../styles/table.css">
        <link rel="stylesheet" href="../styles/button.css">
        <!-- Específicos -->
        

        
    </head>

    <body>
        <div class="div-central">
            <h1>Bem-vindo</h1>
            <form action="../../Model/login/login_auth.php" method="post">
                <input type="text" name="txtUser" id="txtUser" class="caixaTexto" placeholder="Usuário">
                <br>
                <input type="password" name="txtPass" id="txtPass" class="caixaTexto" placeholder="Senha">
                <br>
                <input type="submit" name="submit" value="Entrar" class="btn btn-outline-primary">
            </form>
        </div>
    </body>

</html>