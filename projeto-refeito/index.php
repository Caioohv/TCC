<?php 
    session_start();
    include 'View/Includes/head.php';
    
?>

<body>
    
    <?php

        if(isset($_SESSION['userId'])){
            //após login
            
            include 'View/Includes/top-bar.php';

            if(isset($_GET['page'])){
                if($_GET['page']=='initial'){
                    include 'View/Includes/initial.php';
                }
                if($_GET['page']=='cadastrarC'){
                    include 'View/Includes/Caixa/cadastrar.php';
                }
                if($_GET['page']=='visualizarC'){
                    include 'View/Includes/Caixa/visualizar.php';
                }
                if($_GET['page']=='editarC'){
                    $idcaixa = $_GET['idcaixa'];
                    include 'View/Includes/Caixa/editar.php?idcaixa=$idcaixa';
                }
            }else{
                include 'View/Includes/initial.php';
            }
            





            echo '<body>';

        }else{

            include 'View/Includes/login.php';

        }

    ?>

</body>

