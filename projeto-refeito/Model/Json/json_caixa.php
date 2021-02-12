
<?php

include_once 'Model/conexao.php';

    if($con -> connect_error){
        die("Falha na conexão com o banco de dados: " . $con->connection_error);
    }

    $sql = "SELECT * FROM caixa";
    $result = mysqli_query($con, $sql);

    if($result->num_rows > 0){
        while($row = $result -> fetch_assoc()){
            $objJson->cidade = .$row['cidade'];
            $objJson->bairro = .$row['bairro'];
            $objJson->rua = .$row['rua'];
            $objJson->numero = .$row['numero'];
            $objJson->estado = .$row['estado'];
            $objJson->pais = .$row['pais'];
    
            $objJson = json_encode($objJson);
    
            echo $objJson;
        }
}

?>
