<?php
include 'conexao.php';

if (isset($_POST["txtProduto"])) {
    $nmProduto = $_POST["txtProduto"];
    $descProduto = $_POST["txtDescricao"];
    $categoria = $_POST["ddlCategoria"];

    if (empty($nmProduto) && empty($categoria)) {
        echo "<div class=info>Preencha as informações corretamente.</div>";
        exit;
    } else {
        $SQL = "INSERT INTO tbProdutos (nmproduto, descproduto, idcategoria, idUser)";
        $SQL .= " VALUES('" . $nmProduto . "', '" . $descProduto . "',".$categoria.", ".$_SESSION['idUser'].")";
        
        echo $SQL;
        
        if ($con->query($SQL) === TRUE){
            echo "<script>alert('Produto cadastrado com sucesso.');</script>";
            echo "<script>window.location = 'listar.php';</script>";
        } else {
            echo "<script>alert('Erro ao cadastrar o produto.');</script>";
            echo "<script>window.location = 'novo.php';</script>";
        }
    }
}
?>