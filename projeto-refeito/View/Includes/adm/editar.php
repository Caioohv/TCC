<div class="main">
    <div class="container">
        <?php
            echo '<h1>Atualização do Admin '.$_GET['id'].'</h1>'
        ?>
        <br>
        <form action="Model/adm/updateAdm.php" method="POST" name="fdmCadastro" class="form-cad-caixa">
            <p>Dados Básicos</p>


        <?php 
            include_once 'Model/conexao.php';
            if($con -> connect_error){
                die("Falha na conexão com o banco de dados: " . $con->connection_error);
            }
            $sql = 'SELECT * FROM admin where id_adm';// = '.$_GET['id'].';';
            $n = mysqli_fetch_assoc(mysqli_query($con, $sql));
            ?>
                <input type="email" name="txtEmail" id="txtEmail" class="caixaTexto"  required placeholder="Email" autofocus value="<?php echo $n['email_adm']?>">
                <input type="text" name="txtNome" id="txtNome" class="caixaTexto"  required placeholder="Nome" value="<?php echo $n['nm_adm']?>">
                <input type="text" name="txtCpf" id="txtCpf" class="caixaTexto"  required placeholder="CPF" value="<?php echo $n['cpf_adm']?>">
                <input type="password" name="txtSenha" id="txtSenha" class="caixaTexto" placeholder="Nova Senha">
                <br><br>
            <!-- Botão -->
            <?php
                $_SESSION['id-a'] = $_GET['id'];
            ?>
                <div class="btn">
                    <input type="submit" name="submit" value="Atualizar" class="btn-cad-caixa">
                </div>
            </form>
        </div>
    </div>