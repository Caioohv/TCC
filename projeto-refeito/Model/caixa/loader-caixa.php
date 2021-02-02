
<?php

include_once 'Model/conexao.php';

if($con -> connect_error){
    die("Falha na conexão com o banco de dados: " . $con->connection_error);
}

$sql = "SELECT * FROM caixa";// WHERE id_caixa like".$_POST['txtcod']." AND endereco_caixa like ".$_POST['txtlocal']." AND nm_caixa like ".$_POST['txtnome'].";";
$result = mysqli_query($con, $sql);

if($result->num_rows > 0){
    while($row = $result -> fetch_assoc()){
        echo '<tr>';
        echo '<td> '.$row['id_caixa'].'</td>';
        echo '<td> '.$row['nm_caixa'].'</td>';

        $id=$row['id_caixa'];
        $endereco = $row['rua']." n° ".$row['numero']." - ".$row['cidade'];
        echo '<td> '.$endereco.'</td>';
        


        echo '<td> '.$row['status_caixa'].'</td>';
        echo'<td> '.$row['fk_email_adm'].'</td>';
        echo '<td><div class="botoesEdit"><a href="index.php?page=editarC&id='.$id.'">Editar</a> <a href="index.php?page=excluirC&id='.$id.'">Excluir</a></div></td>';
        echo '</tr>';
    }
}

?>