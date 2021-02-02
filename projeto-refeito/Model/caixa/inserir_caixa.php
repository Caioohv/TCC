<!-- <form action="Model/caixa/inserir_caixa.php" method="POST" name="fdmCadastro" class="form-cad-caixa">

            <p>Dados Básicos</p>
            <input type="text" name="Nome" id="Nome" class="caixaTexto" placeholder="Nome">
            
            <select name="status" id="status" class="caixaTexto">
                <option value="Ativo">Ativo</option>
                <option value="Manutenção">Manutenção</option>
                <option value="Inativo">Inativo</option>
                <option value="Indisponivel">Indisponível</option>
            </select>

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
            

            <div class="btn">
                <input type="submit" name="submit" value="Cadastrar" class="btn-cad-caixa">
            </div>
            
        </form> -->

<?php 

session_start();
        
include '../conexao.php';

    if(isset($_POST['submit'])){

        //passa os valores recebidos pelo post para variáveis
        
        $nm_caixa = $_POST['Nome'];
        
        $status_caixa = $_POST['status'];
        $fk_email_adm = $_SESSION['userId'];

        $cidade = $_POST['Cidade'];
        $bairro = $_POST['Bairro'];
        $rua = $_POST['Rua'];
        $numero = $_POST['Numero'];
        $estado = $_POST['Estado'];
        $pais = $_POST['Pais'];
        
        $horario_inicio_caixa = $_POST['hrrAbrir'];
        $horario_fim_caixa = $_POST['hrrFechar']; 
        
        //inserindo no banco de dados a querry 


        //$fk_email_adm = 'caioviier@gmail.com';
        $fk_email_adm = $_SESSION['userId'];
    
        $result = "
        insert into caixa(
        nm_caixa, horario_inicio_caixa, horario_fim_caixa, status_caixa, fk_email_adm, cidade, bairro, rua, numero, estado, pais)
        values(
        '$nm_caixa', '$horario_inicio_caixa', '$horario_fim_caixa', '$status_caixa', '$fk_email_adm', '$cidade',
        '$bairro', '$rua', '$numero', '$estado', '$pais');
        ";
        
        //echo $result;
        //executando querry
        $result = mysqli_query($con, $result);
        if($result){
            mysqli_close($con);
            echo "Caixa cadastrado com sucesso!";
            header("location: ../../index.php?page=visualizarC");
            
        }else{
            echo '<p style="color: red; font-size: 3rem;"> Erro ao cadastrar caixa</p>';
            mysqli_close($con);
        }

        

    }
  


?>