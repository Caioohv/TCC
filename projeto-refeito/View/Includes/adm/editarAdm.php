<?php
    include_once('../../Model/conexao.php');
        //receber os dados do form
        $email_adm = $_POST['txtEmail'];
        $nm_adm = $_POST['txtNome'];
        $cpf_adm = $_POST['txtCpf'];
        $pass_adm = MD5($_POST['txtSenha']);
    
        //criar comando sql
        $sql = "UPDATE admin SET email='$email_adm', nome='$nm_adm' ,cpf='$cpf_adm' ,senha='$pass_adm' WHERE id_adm=" . $_GET['id_adm'];
        
        //executar comando
        if($con->query($sql) == TRUE){
            ?>
            <script>
                alert("Alteração salva com sucesso!");
                window.location = "../../View/adm/visualizarAdm/php";
            </script>
            <?php
        }else{
            ?>
                <script>
                    alert("Erro ao alterar o registo");
                    window.history.back();
                </script>
    
    
            <?php
        }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Administrador</title>
</head>
<body>
            <h1>Editar Administrador</h1>

            <?php
            //selecionando registro a ser editado
            if(isset( $_GET['id_adm'])){
                $sql = "SELECT * FROM admin WHERE id_adm = ". $_GET['id_adm'];

                //executa o comando
                $consulta = $con->query($sql);

                //recebe os valores da consulta
                $administrador = $consulta->fetch_assoc();
            } 
            ?>
        <form action="editarAdm.php?id_adm=<?php echo$_GET['id_adm']?>" method="POST">
            <input type="email" name="txtEmail" id="txtEmail" class="caixaTexto"  required placeholder="Email" autofocus value="<?php echo $administrador['email_adm']?>">
            <input type="text" name="txtNome" id="txtNome" class="caixaTexto"  required placeholder="Nome" value="<?php echo $administrador['nm_adm']?>">
            <input type="text" name="txtCpf" id="txtCpf" class="caixaTexto"  required placeholder="CPF"value="<?php echo $administrador['cpf_adm']?>">
            <input type="password" name="txtSenha" id="txtSenha" class="caixaTexto" required placeholder="Senha"value="<?php echo $administrador['pass_adm']?>">
            <input type="password" name="txtSenhaConfirm" id="txtSenhaConfirm" class="caixaTexto" required placeholder="Confirme sua senha">
            <br><br>

            <input type="submit" class="btn btn-primary" value="Salvar">
            <input type="reset" class="btn btn-warning" value="Cancelar">
        </form>



    
</body>
</html>