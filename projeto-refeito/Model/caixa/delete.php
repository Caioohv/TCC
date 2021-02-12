<?php 
    include_once '../../Model/conexao.php';
    if($con -> connect_error){
        die("Falha na conexão com o banco de dados: " . $con->connection_error);
    }
    $sql = 'DELETE FROM caixa WHERE id_caixa = '.$_POST['id-caixa'];
        //echo $sql;
    $result = mysqli_query($con, $sql);
            
    if($result){
        echo '<p>Excluido com sucesso</p>';
        header("location:../../index.php?page=visualizarC");
    }
    
    
?>