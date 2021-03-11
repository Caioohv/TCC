<div class="main">
    <div class="container">
        <?php
            echo '<h1>Atualização do Caixa '.$_GET['id'].'</h1>'
        ?>
        <br>
        <form action="Model/caixa/update_caixa.php" method="POST" name="fdmCadastro" class="form-cad-caixa">
            <p>Dados Básicos</p>


        <?php 
            include_once 'Model/conexao.php';
            if($con -> connect_error){
                die("Falha na conexão com o banco de dados: " . $con->connection_error);
            }
            $sql = 'SELECT * FROM caixa where id_caixa = '.$_GET['id'].';';
            
            $result = mysqli_query($con, $sql);
            
            $n = mysqli_fetch_assoc($result);

                    echo '<input type="text" name="Nome" id="Nome" class="caixaTexto" placeholder="Nome" value="'.$n['nm_caixa'].'">';
                    echo '<!-- Select Status -->';
                    echo '<select name="status" id="status" class="caixaTexto" value="'.$n['status_caixa'].'">';
                    echo '    <option value="Ativo">Ativo</option>';
                    echo '    <option value="Manutenção">Manutenção</option>';
                    echo '    <option value="Inativo">Inativo</option>';
                    echo '    <option value="Indisponivel">Indisponível</option>';
                    echo '</select>';
                    echo '<div class="div-time">';
                    echo '    <span class="hrr">Abertura</span>';
                    echo '    <input type="time" name="hrrAbrir"  id="hrrAbrir"  class="caixaTexto" value="'.$n['horario_inicio_caixa'].'">';
                    echo '    <br>';
                    echo '    <span class="hrr" >Fechamento</span>';
                    echo '    <input type="time" name="hrrFechar" id="hrrFechar" class="caixaTexto" value="'.$n['horario_fim_caixa'].'">';
                    echo '</div>';
                    echo '<!-- Endereço -->';
                    echo '<p>Endereço</p>';
                    echo '<input type="text" name="Cidade" id="Cidade" class="caixaTexto" placeholder="Cidade" value="'.$n['cidade'].'">';
                    echo '<input type="text" name="Bairro" id="Bairro" class="caixaTexto" placeholder="Bairro" value="'.$n['bairro'].'">';
                    echo '<br>';
                    echo '<input type="text" name="Rua"    id="Rua"    class="caixaTexto" placeholder="Rua" value="'.$n['rua'].'">';
                    echo '<input type="text" name="Numero" id="Numero" class="caixaTexto" placeholder="Numero" value="'.$n['numero'].'">';
                    echo '<br>';
                    echo '<input type="text" name="Estado" id="Estado" class="caixaTexto" placeholder="Estado" value="'.$n['estado'].'">';
                    echo '<input type="text" name="Pais"   id="Pais"   class="caixaTexto" placeholder="País" value="'.$n['pais'].'">';
                    echo '<br>';
                    $_SESSION['id-c'] = $_GET['id'];
            ?>

            

            <!-- Botão -->
            <div class="btn">
                <input type="submit" name="submit" value="Atualizar" class="btn-cad-caixa">
            </div>
            <div class="btn">
                <a href="javascript:void(0)" onClick="history.go(-1); return false;" class="btn-voltar">Voltar</a>
            </div>
            
        </form>
    </div>
</div>