<div class="main">
    <div class="container">
        <?php
            echo '<h1>Exclusão do Caixa '.$_GET['id'].'</h1>';
        ?>
        <br>
        <form action="Model/caixa/delete.php" method="POST" name="fdmCadastro" class="form-cad-caixa">
            <p>Deseja mesmo excluir?</p>


        

            

            <!-- Botão -->
            <div class="btn">
                <input type="submit" name="submit" value="Excluir" class="btn-cad-caixa">
            </div>
            
        </form>
    </div>
</div>