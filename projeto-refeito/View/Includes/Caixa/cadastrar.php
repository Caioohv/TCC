<div class="main">
    <div class="container">
        <h1>Cadastro</h1>
        <br>
        <form action="../../Model/caixa/inserir_caixa.php" method="POST" name="fdmCadastro">
            <p>Dados Básicos</p>
            <input type="text" name="txtNome" id="txtNome" class="caixaTexto" placeholder="Nome">
            <input type="text" name="txtEndereco" id="txtEndereco" class="caixaTexto" placeholder="Endereço">
            <p>Localizações</p>
            <input type="text" name="txtX" id="txtX" class="caixaTexto" placeholder="Localização X">
            <input type="text" name="txtY" id="txtY" class="caixaTexto" placeholder="Localização Y">
            <p>Horários: </p>
            <input type="time" name="hrrAbrir" id="hrrAbrir" class="caixaTexto">
            <input type="time" name="hrrFechar" id="hrrFechar" class="caixaTexto">
            <div class="fbotao">
                <input type="submit" name="submit" value="Cadastrar" class="btn btn-outline-primary">
            </div>
        </form>
    </div>
</div>