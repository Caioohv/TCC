<?php
       
//incluindo o arquivo de conexão
include_once 'conexao.php';
      
        //recebendo os dados que vieram do formulário
        $cpf_adm = $_POST['txtCpf'];
        $email_adm = $_POST['txtEmail'];
        $pass_adm = MD5($_POST['txtSenha']);
        $nm_adm = $_POST['txtNome'];

        //inserindo no banco de dados a query 
        $sql = "INSERT INTO admin (cpf_adm, email_adm, pass_adm, nm_adm) VALUES
        ('$cpf_adm', '$email_adm', '$pass_adm', '$nm_adm');";
        
        //validando erro
        if($con->query($sql) == TRUE){
            ?>
            <script>
                alert("Registo salvo com sucesso!");
                window.location = "../index.php";
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













?>



        echo $result;

        //executando query
        $result = mysqli_query($con, $result);

        //vereficando se o comando foi executado com sucesso
        if($result){
            echo"<script language='javascript' type='text/javascript'> 
                    alert('Administrador cadastrado com sucesso!');
                </script>";
            header('location:../adm/crudADM/cadastrarADM.php');
        }else{
        
            echo"<script language='javascript' type='text/javascript'> 
                    alert('Não foi possível cadastrar esse usuário');
                </script>";
            header('location:../adm/crudADM/cadastrarADM.php');
        }

        mysqli_close($con);
    
