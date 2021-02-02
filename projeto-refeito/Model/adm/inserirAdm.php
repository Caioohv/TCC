<?php
       
//incluindo o arquivo de conexão
include_once ('conexao.php');
      
        //recebendo os dados que vieram do formulário
        $cpf_adm = $_POST['txtCpf'];
        $email_adm = $_POST['txtEmail'];
        $pass_adm = MD5($_POST['txtSenha']);
        $nm_adm = $_POST['txtNome'];

        //inserindo no banco de dados a query 
        $sql = "INSERT INTO admin (cpf_adm, email_adm, pass_adm, nm_adm) VALUES
        ('$cpf_adm', '$email_adm', '$pass_adm', '$nm_adm');";

        echo $sql;
        
        //validando erro
        if($con->query($sql) == TRUE){
            ?>
            <script>
                alert("Registo salvo com sucesso!");
                window.location = "../../index.php";
            </script>
            <?php
        }else{
            ?>
                <script>
                    alert("Erro ao inserir o registo");
                    window.history.back();
                </script>


            <?php
        }
?>

    
