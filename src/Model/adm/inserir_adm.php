<?php

        
//importanto arquivo de conexao
include 'conexao.php';


    //verifica se algum valor foi definido
    
        
        // $cpf_adm = filter_input(INPUT_POST, 'txtCpf', FILTER_SANITIZE_STRING);
        // $email_adm = filter_input(INPUT_POST, 'txtEmail', FILTER_SANITIZE_EMAIL);
        // $pass_adm = filter_input(INPUT_POST, 'txtSenha', FILTER_SANITIZE_STRING);
        // $nm_adm = filter_input(INPUT_POST, 'txtNome', FILTER_SANITIZE_STRING);            
        
        $cpf_adm = $_POST['txtCpf'];
        $email_adm = $_POST['txtEmail'];
        $pass_adm = MD5($_POST['txtSenha']);
        $nm_adm = $_POST['txtNome'];

        //inserindo no banco de dados a query 
        $result = "
        insert into admin (cpf_adm, email_adm, pass_adm, nm_adm) values 
        ('$cpf_adm', '$email_adm', '$pass_adm', 
        '$nm_adm');
        ";
        
        echo $result;
        //executando query
        $result = mysqli_query($con, $result);
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
    
?>



<!-- 
?php
/*session_start();

//importanto arquivo de conexao
include 'conexao.php';


//recebendo os dados do formulário
$nm_adm = filter_input(INPUT_POST, 'txtNome', FILTER_SANITIZE_STRING);
$cpf_adm = filter_input(INPUT_POST, 'txtCpf', FILTER_SANITIZE_STRING);
$email_adm = filter_input(INPUT_POST, 'txtEmail', FILTER_SANITIZE_EMAIL);
$pass_adm = filter_input(INPUT_POST, 'txtSenha', FILTER_SANITIZE_STRING);

//inserindo no banco de dados a query 
<<<<<<< Updated upstream:src/Model/adm/inserir_adm.php
$result_adm = "INSERT INTO admin (nm_adm,cpf_adm, email_adm, pass_adm) VALUES 
('$nm_adm', '$cpf_adm, '$email_adm, '$pass_adm')";
echo $result_adm;
=======
$result_adm = "INSERT INTO admin (nm_adm,cpf_adm, email_adm, pass_adm) VALUES ('$nm_adm', '$cpf_adm, '$email_adm, '$pass_adm')";
//echo $result_adm;
>>>>>>> Stashed changes:src/php/inserir_ADM.php
//executando query
$result_adm = mysqli_query($con, $result_adm);


//verificando se salvou com sucesso com base ao id_adm
if(mysqli_insert_id($con)){
    $_SESSION['msg'] = "<p style='color:green;'>Administrador cadastrado com sucesso</p>";
    header("location: cadastrarADM.php");
}else{
    $_SESSION['msg'] = "<p style='color:red;'>Administrador não foi cadastrado com sucesso</p>";
    header("location: cadastrarADM.php");
}
?>


if (isset($_POST["txtCpf"])) {
    $cpf_adm = $_POST["txtCpf"];
    $email_adm = $_POST["txtEmail"];
    $pass_adm = $_POST["txtSenha"];
    $nm_adm = $_POST["txtNome"];

        
    if (empty($cpf_adm) && empty($nm_adm)) {
        echo "<div class=info>Preencha as informações corretamente.</div>";
        exit;
    } else {
        $SQL = "INSERT INTO p.admin (cpf_adm, email_adm, pass_adm, nm_adm)";
        $SQL .= " VALUES('" . $cpf_adm . "', '" . $email_adm . "','" . $pass_adm . "', '" . $nm_adm . "', ".$_SESSION['id_adm'].")"
        echo $SQL;
        
        if ($con->query($SQL) === TRUE){
            echo "<script>alert('Administrador cadastrado com sucesso.');</script>";
        } else {
            echo "<script>alert('Erro ao cadastrar administrador.');</script>";
        }
    }
} 
*/-->
