<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/src/styles/main.css">
        <link rel="stylesheet" href="/src/styles/login.css">

        <title>Login</title>
    </head>

    <body>
        <div class="div-central">
            <h1>Bem-vindo</h1>
            <form action="php/login_auth.php">
                <input type="text" name="txtUser" id="txtUser" placeholder="Usuário">
                <br>
                <input type="password" name="txtPass" id="txtPass" placeholder="Senha">
                <br>
                <input type="submit" name="submit" value="Entrar" class="btn btn-outline-primary">
            </form>
        </div>
    </body>

</html>