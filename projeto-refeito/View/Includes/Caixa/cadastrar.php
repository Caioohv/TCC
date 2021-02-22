<div class="main">
    <div class="container">
        <h1>Cadastro</h1>
        <br>
        <form action="Model/caixa/inserir_caixa.php" method="POST" name="fdmCadastro" class="form-cad-caixa">

            <p>Dados Básicos</p>
            <input type="text" name="Nome" id="Nome" class="caixaTexto" placeholder="Nome">
            
            <!-- Select Status -->
            <select name="status" id="status" class="caixaTexto">
                <option value="Ativo">Ativo</option>
                <option value="Manutenção">Manutenção</option>
                <option value="Inativo">Inativo</option>
                <option value="Indisponivel">Indisponível</option>
            </select>
            <div class="div-time">
                <span class="hrr">Abertura</span>
                <input type="time" name="hrrAbrir"  id="hrrAbrir"  class="caixaTexto">
                <br>
                <span class="hrr" >Fechamento</span>
                <input type="time" name="hrrFechar" id="hrrFechar" class="caixaTexto">
            </div>
            <!-- Endereço -->
            <p>Endereço</p>
            <input type="text" name="Cidade" id="Cidade" class="caixaTexto" placeholder="Cidade">
            <input type="text" name="Bairro" id="Bairro" class="caixaTexto" placeholder="Bairro">
            <br>
            <input type="text" name="Rua"    id="Rua"    class="caixaTexto" placeholder="Rua">
            <input type="text" name="Numero" id="Numero" class="caixaTexto" placeholder="Numero">
            <br>
            <input type="text" name="Estado" id="Estado" class="caixaTexto" placeholder="Estado">
            <input type="text" name="Pais"   id="Pais"   class="caixaTexto" placeholder="País">
            <br>
            
            

            <!-- Botão -->
            <div class="btn">
                <input type="submit" name="submit" value="Cadastrar" class="btn-cad-caixa">
                <a href='Model/Json/json_caixa.php'>Cadastrar</a>
            </div>
            
        </form>
    </div>
</div>