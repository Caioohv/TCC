<?php
include 'conexao.php';

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
?>