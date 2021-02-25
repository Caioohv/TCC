
<?php

include_once 'Model/conexao.php';

    if($con -> connect_error){
        die("Falha na conexão com o banco de dados: " . $con->connection_error);
    }


    $sql = "SELECT * FROM caixa";
    $result = mysqli_query($con, $sql);
    $arrayCaixas = array();
    if($result->num_rows > 0){
        while($row = $result -> fetch_assoc()){
            array_push($arrayCaixas, array("Id"=>$row["id_caixa"],"Latitute"=>$row["latitude"], "Longetude"=>$row["longetude"]));
           
        }
        $objJson = json_encode($arrayCaixas);

        if(file_put_contents("caixas.json", $objJson)){
            echo 'Arquivo gerado com sucesso';
        }else{
            echo 'Erro ao gerar arquivo';
        }
}

?>
