<?php



function getSql(){
    $sql = " SELECT * FROM admin ";

    if(isset($_GET['submit'])){
        $setwhere = 0;
        $addor = 0;

        $nome = $_GET['Nome'];
        $cpf = $_GET['Cpf'];
        $email = $_GET['Email'];
        if($nome != ""){
            if($addor==1){
                $sql = $sql . " AND ";
            }
            if($setwhere == 0){
                $sql = $sql . " WHERE ";
                $setwhere = 1;
            }
            
            $sql = $sql . " nm_adm like '$nome%' ";
            $addor = 1;

        }
        if($cpf != ""){
            if($addor==1){
                $sql = $sql . " AND ";
            }
            if($setwhere == 0){
                $sql = $sql . "WHERE ";
                $setwhere = 1;
            }

            $sql = $sql . "cpf_adm like '$cpf%'";
            $addor = 1;

        }
        if($email != ""){
            if($addor==1){
                $sql = $sql . " AND ";
            }
            if($setwhere == 0){
                $sql = $sql . "WHERE ";
                $setwhere = 1;
            }

            $sql = $sql . "email_adm like '$email%'";
            $addor = 1;

        }
        

        

        


    }

    $sql = $sql . ";";
    //echo $sql;
    return $sql;
}




include_once 'Model/conexao.php';

if($con -> connect_error){
    die("Falha na conexão com o banco de dados: " . $con->connection_error);
}

$sql = getSql();//"SELECT * FROM admin ORDER BY nm_adm;";// WHERE id_caixa like".$_POST['txtcod']." AND endereco_caixa like ".$_POST['txtlocal']." AND nm_caixa like ".$_POST['txtnome'].";";
$result = mysqli_query($con, $sql);

if($result->num_rows > 0){
    while($row = $result -> fetch_assoc()){
        ?>
        <tr>
            
            <td><?php echo $row['id_adm']?></td>
            <td><?php echo $row['nm_adm']?></td>
            <td><?php echo $row['cpf_adm']?></td>
            <td><?php echo $row['email_adm']?></td> 
            <td>
                <div class="links-fas">
                    <a class="link-table" href="index.php?page=editarA&id=<?php echo $row['id_adm']?>"><i class="fas fa-edit"></i></a>
                    <a class="link-table" href="index.php?page=excluirA&id=<?php echo $row['id_adm']?>"><i class="fas fa-trash"></i></a>
                </div>
            </td>  
            
        </tr>
        <?php
    }
}

?>







