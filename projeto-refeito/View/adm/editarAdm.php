<?php 
    session_start();
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar Amdinistrador</title>

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
        <!-- Conteúdo da Página -->
        <?php 
           
                        <form action="../../Model/updateAdm.php" method="POST" name="fdmEdicao">
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
                            <div class= "form-group">
                                <button type="submit" class="btn btn-success">Atualizar</button>
                            </div>
                        </form>
                    </div>';
            }else{
                echo '<p style="padding: 500px">Acesso restrito</p>';
            }
        ?>  
        
    </body>
    </html>