<?php 
            include_once '../../Model/conexao.php';
            if($con -> connect_error){
                die("Falha na conexão com o banco de dados: " . $con->connection_error);
            }
            $sql = 'DELETE FROM caixa WHERE id_caixa = '.$_SESSION['id-delete-adm'];
            //echo $sql;
            $result = mysqli_query($con, $sql);
            
            if($result){
                echo '<p>Excluido com sucesso</p>';
                echo '<?php header(location=index.php?page=visualizarA)>';
            }

            $_SESSION['id-c'] = $_GET['id'];
            ?>