




<?php

include_once 'Model/conexao.php';

if($con -> connect_error){
    die("Falha na conexão com o banco de dados: " . $con->connection_error);
}

$sql = "SELECT * FROM admin";// WHERE id_caixa like".$_POST['txtcod']." AND endereco_caixa like ".$_POST['txtlocal']." AND nm_caixa like ".$_POST['txtnome'].";";
$result = mysqli_query($con, $sql);

if($result->num_rows > 0){
    while($row = $result -> fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $row['id_adm']?></td>
            <td><?php echo $row['nm_adm']?></td>
            <td><?php echo $row['cpf_adm']?></td>
            <td><?php echo $row['email_adm']?></td> 
            <td><a href="editarAdm.php?id_adm=<?php echo $exibir['id_adm']?>">Editar</a></td>  
            <td><a href="#" onclick="confirmarExclusao('<?php echo $exibir['id_adm']?>','<?php echo $exibir['nm_adm ']?>')">Excluir</a></td>                     
            <?php
            if($row['aprov_adm'] == "0"){

                ?><td><a href="#">Aprovar</a></td><?php

            }else{
                ?><td>aprovado</td><?php
            }
            
            
            ?>
        </tr>
        <?php
    }
}

?>







