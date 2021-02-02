<?php
include_once('../conexao.php');

    //recebendo o id do registro que será excluido
    if(isset($_GET["id_adm"])){

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
    }else{
        //caso de erro
        ?>
        <script>
                alert("Erro ao excluir registro");
                window.location = "../../View/adm/visualizarADM.php";
            </script>
        <?php
    }
?>