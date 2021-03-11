<div class="main">
    <div class="container">
        <?php
            echo '<h1>Exclusão do Admin '.$_GET['id'].'</h1>';
        ?>
        <br>
        <form action="Model/adm/delete.php" method="POST" name="fdmCadastro" class="form-cad-caixa">
            <p>Deseja mesmo excluir?</p>


            <input type="hidden" name="id-adm" id="id-adm" placeholder="" value="'<?php echo $_GET['id']; ?>'">
        

            

            <!-- Botão -->
            <div class="btn">
                <input type="submit" name="submit" value="Excluir" class="btn-cad-caixa">
            </div>
            <div class="btn">
                <a href="javascript:void(0)" onClick="history.go(-1); return false;" class="btn-voltar">Voltar</a>
            </div>
            <div class="btn">
                <a href="javascript:void(0)" onClick="history.go(-1); return false;" class="btn-voltar">Voltar</a>
            </div>
            
        </form>
    </div>
</div>