<div class="main">
    <div class="filtro">
    
        <form action="index.php" method="GET" name="fdmPesquisa">

            <input type="text" name="page" id="page" hidden placeholder="" value="visualizarA">

            <input type="text" name="Nome" id="Nome" class="caixafiltro" placeholder="Nome" value="<?php if(isset($_GET['Nome'])){echo $_GET['Nome'];}?>">
            <input type="text" name="Cpf" id="Cpf" class="caixafiltro" placeholder="Cpf" value="<?php if(isset($_GET['Cpf'])){echo $_GET['Cpf'];}?>">
            <input type="text" name="Email" id="Email" class="caixafiltro" placeholder="Email" value="<?php if(isset($_GET['Email'])){echo $_GET['Email'];}?>">

    </div>
                <input type="submit" name="submit" class="btn-pesquisar" value="Pesquisar">
                
            </form>
    
    <div class="container">
        
        <div class="tableCaixas">
            <table>
                <tr>
                    <th class="canto-esq">Id</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Email</th>
                    <th class="canto-dir">Ações</th>
                    <!-- <th>Aprovar</th> -->
                </tr>
                <?php
                    include 'Model/adm/loader-adm.php';
                ?>
                
                
            </table>
        </div>


    </div>
</div>