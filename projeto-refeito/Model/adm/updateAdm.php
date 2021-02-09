<?php
session_start();
    include_once '../conexao.php';

    if(isset($_POST['submit'])){
        //receber os dados do form
        $email_adm = $_POST['txtEmail'];
        $nm_adm = $_POST['txtNome'];
        $cpf_adm = $_POST['txtCpf'];


        $validasenha = -1;
        if(isset($_POST['txtSenha'])){
            $pass_adm = MD5($_POST['txtSenha']);
            $validasenha = 1;
        }else{
            $validasenha = 0;
        }
        

        //criar comando sql
        $sql = "";
        if($validasenha == 1){
            $sql = "UPDATE admin SET email='$email_adm', nome='$nm_adm' ,cpf='$cpf_adm' ,senha='$pass_adm' WHERE id_adm=" . $_SESSION['id-a'];
        }else{
            $sql = "UPDATE admin SET email='$email_adm', nome='$nm_adm' ,cpf='$cpf_adm' WHERE id_adm=" . $_SESSION['id-a'];
        }

        echo $sql;
        echo $validasenha;
        echo $pass_adm;
        
        
        
        // executar comando
        if($con->query($sql) == TRUE){
            ?>
            <script>
                alert("Alteração salva com sucesso!");
                //window.location = "../../View/adm/";
            </script>
            <?php
        }else{
            ?>
                <script>
                    alert("Erro ao alterar o registo - Valida senha: " +<?php echo $validasenha?>+"\nString sql:\n"+<?php echo $sql?>);
                    //window.history.back();
                </script>


            <?php
        }
    }



?>