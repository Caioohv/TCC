<?php
    include_once('conexao.php');

    //recebendo o id do registro que será excluido

    //comando sql de exclusão 
    $sql = "DELETE FROM PESSOA WHERE id_adm =" . $_GET["id_adm"];

    //executando o comando 
    if($con->query($sql)===TRUE){
        ?>
        <script>
            alert("Registo excluído com sucesso");
            window.location = "../../View/adm/visualizarADM.php";
        </script>

        <?php
    }

    //retornar para o selecionar

?>