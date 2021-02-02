<div class="main">
    <div class="container">
        <?php
            echo '<h1>Atualização do Caixa '.$_GET['id'].'</h1>'
        ?>
        <br>
        <form action="Model/caixa/update_caixa.php" method="POST" name="fdmCadastro" class="form-cad-caixa">
            <p>Deseja mesmo excluir o caixa <?php  ?></p>


        <?php 
            include_once 'Model/conexao.php';
            if($con -> connect_error){
                die("Falha na conexão com o banco de dados: " . $con->connection_error);
            }
            $sql = 'SELECT * FROM caixa where id_caixa = '.$_GET['id'].';';
            
            $result = mysqli_query($con, $sql);
            
            $n = mysqli_fetch_assoc($result);

            $_SESSION['id-c'] = $_GET['id'];
            ?>

            

            <!-- Botão -->
            <div class="btn">
                <input type="submit" name="submit" value="Atualizar" class="btn-cad-caixa">
            </div>
            
        </form>
    </div>
</div>