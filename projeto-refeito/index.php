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
                    $_POST['id-c'] = $_GET['id'];
                    include 'View/Includes/Caixa/editar.php';//.$idcaixa;
                }
                if($_GET['page']=='excluirC'){
                    $_POST['id-c'] = $_GET['id'];
                    include 'View/Includes/Caixa/excluir.php';//.$idcaixa;
                }
                if($_GET['page']=='visualizarA'){
                    include 'View/Includes/adm/visualizar.php';//.$idcaixa;
                }
                if($_GET['page']=='cadastrarA'){
                    include 'View/Includes/adm/cadastrar.php';//.$idcaixa;
                }
                if($_GET['page']=='editarA'){
                    $_POST['email-a'] = $_GET['id'];
                    include 'View/Includes/adm/editar.php';//.$idcaixa;
                }
                if($_GET['page']=='excluirA'){
                    $_POST['email-a'] = $_GET['id'];
                    include 'View/Includes/adm/excluir.php';//.$idcaixa;
                }
                if($_GET['page']=='adm'){
                    header("location: index.php?page=visualizarA");
                }
                if($_GET['page']=='bymail'){

                    include 'View/Includes/adm/finalizarCadastro.php';
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

