<?php
    include_once('../conexao.php');

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