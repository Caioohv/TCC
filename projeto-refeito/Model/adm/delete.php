<?php 
    include_once '../../Model/conexao.php';
    if($con -> connect_error){
        die("Falha na conexão com o banco de dados: " . $con->connection_error);
    }
    $sql = 'DELETE FROM admin WHERE id_adm = '.$_POST['id-adm'];
        //echo $sql;
    $result = mysqli_query($con, $sql);
            
    if($result){
        echo '<p>Excluido com sucesso</p>';
        header("location:../../index.php?page=visualizarA");
    }
    
    
?>