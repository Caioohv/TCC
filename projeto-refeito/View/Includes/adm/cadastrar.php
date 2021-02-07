<div class="main">
    <div class="container">
        <h1>Cadastro</h1>
        <br>
        <div class="container-adm">
        <form action="Model/adm/inserirAdm.php" method="POST" name="fdmCadastro" class="form-cad-caixa">

            <p>Dados Básicos</p>
            <!-- <input type="text" name="Nome" id="Nome" class="caixaTexto" placeholder="Nome"> -->
            
                <input type="email" name="txtEmail" id="txtEmail" class="caixaTexto"  required placeholder="Email" autofocus>
                <input type="text" name="txtNome" id="txtNome" class="caixaTexto"  required placeholder="Nome">
                <input type="text" name="txtCpf" id="txtCpf" class="caixaTexto"  required placeholder="CPF">
                <br>
                <input type="password" name="txtSenha" id="txtSenha" class="caixaTexto" required placeholder="Senha">
                <input type="password" name="txtSenhaConfirm" id="txtSenhaConfirm" class="caixaTexto" required placeholder="Confirme sua senha">
                <br><br>
            <!-- Botão -->
                <div class="btn">
                    <input type="submit" name="submit" value="Cadastrar" class="btn-cad-caixa">
                </div>
            </div>

        </form>
    </div>
</div>