<!DOCTYPE html>
<html lang="en">
<?php 

    include("View/Includes/head.php");

?>
<body>
<div class="main">
    <div class="container">
        <h1>Cadastro</h1>
        <br>
        <div class="container-adm">
            <!--   -->
            <form action="Model/adm/atualizarSenha.php" method="GET" name="fdmCadastro" class="form-cad-caixa">

                <p>Nova Senha:</p>
                <input type="password" name="pass1" id="pass1" class="caixaTexto"  required placeholder="Senha">
                <input type="password" name="pass1" id="pass1" class="caixaTexto"  required placeholder="Senha">

                <?php 
                
                     $email = $_GET['email'];

                ?>
                <input type="hidden" name="antiga" id="antiga" class="caixaTexto" value="<?php echo $email; ?>">

                <br><br>
            <!-- Botão -->
                <div class="btn">
                    <input type="submit" name="submit" value="Alterar Senha" class="btn-cad-caixa" onClick="validarSenha()">
                </div>
            </form>
        </div>
        
    </div>
</div>




</body>
</html>