<div class="main">
    <!-- <?php 
        date_default_timezone_set('America/Sao_Paulo');
        echo date("H:i");
    ?> -->
    <h4>Hora Local: </h4>
    <div class="filtro">
    
    <form action="index.php" method="GET" name="fdmPesquisa">

        <input type="text" name="page" id="page" hidden placeholder="" value="visualizarC">

        <input type="text" name="Nome" id="Nome" class="caixafiltro" placeholder="Nome" value="<?php if(isset($_GET['Nome'])){echo $_GET['Nome'];}?>">
        <input type="text" name="Endereco" id="Endereco" class="caixafiltro" placeholder="Endereço" value="<?php if(isset($_GET['Endereco'])){echo $_GET['Endereco'];}?>">
        
        <select name="Status" id="Status" class="caixafiltro" placeholder="Status">
            <option value="" hidden selected>Status</option>
            <option value="">Todos</option>
            <option value="Ativo">Ativo</option>
            <option value="Inativo">Inativo</option>
            <option value="Manutenção">Em manutenção</option>
            <option value="Indisponivel">Indisponível</option>
        </select>
        <input type="text" name="Admin" id="Admin" class="caixafiltro" placeholder="Admin" value="<?php if(isset($_GET['Admin'])){echo $_GET['Admin'];}?>">
        

    </div>
        <input type="submit" name="submit" class="btn-pesquisar" placeholder="Pesquisar">
        
    </form>
    
    <div class="container">
        
    <!-- Model/caixa/loader-caixa.php -->


        <div class="tableCaixas">
            <table>
                <tr>
                    <th class="canto-esq">Id</th>
                    <th>Nome</th>
                    <th>Endereço</th>
                    <th>Status</th>
                    <th>Admin</th>
                    <th class="canto-dir">Editar</th>
                </tr>
                <?php
                    include 'Model/caixa/loader-caixa.php';
                ?>
                
                
            </table>
        </div>


    </div>
</div>