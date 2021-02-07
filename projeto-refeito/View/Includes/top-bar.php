<header class="head">
<img src="images/logo-s-texto.jpg" alt="Gerencianet" height="60vh" class="img-gn">
    <nav class="top-nav">
        
        <ul class="link-list">
            
        <?php
        if(isset($_GET['page'])){
            if($_GET['page']=='initial'){
                echo '<li class="item-menu"><a href="index.php?page=cadastrarC">Cadastrar Caixa</a></li>';
                echo '<li class="item-menu"><a href="index.php?page=visualizarC">Visualizar Caixa</a></li>';
                echo '<li class="item-menu"><a href="index.php?page=cadastrarA">Página do Administrador</a></li>';
            }
            //Caixa
            if($_GET['page']=='cadastrarC'){
                echo '<li class="item-menu-selected"><a href="index.php?page=cadastrarC">Cadastrar Caixa</a></li>';
                echo '<li class="item-menu"><a href="index.php?page=visualizarC">Visualizar Caixa</a></li>';
                echo '<li class="item-menu"><a href="index.php?page=cadastrarA">Página do Administrador</a></li>';   
            }
            if($_GET['page']=='visualizarC'){
                echo '<li class="item-menu"><a href="index.php?page=cadastrarC">Cadastrar Caixa</a></li>';
                echo '<li class="item-menu-selected"><a href="index.php?page=visualizarC">Visualizar Caixa</a></li>';
                echo '<li class="item-menu"><a href="index.php?page=cadastrarA">Página do Administrador</a></li>';
            }
            if($_GET['page']=='editarC'){
                echo '<li class="item-menu"><a href="index.php?page=cadastrarC">Cadastrar Caixa</a></li>';
                echo '<li class="item-menu-selected"><a href="index.php?page=visualizarC">Visualizar Caixa</a></li>';
                echo '<li class="item-menu"><a href="index.php?page=cadastrarA">Página do Administrador</a></li>';
            }

            //Adm
            if($_GET['page']=='adm'){
                echo '<li class="item-menu"><a href="index.php?page=cadastrarA">Cadastrar Admin</a></li>';
                echo '<li class="item-menu"><a href="index.php?page=visualizarA">Visualizar Admin</a></li>';
                echo '<li class="item-menu-selected"><a href="index.php?page=cadastrarC">Página dos Caixas</a></li>';
            }
            if($_GET['page']=='cadastrarA'){
                echo '<li class="item-menu-selected"><a href="index.php?page=cadastrarA">Cadastrar Admin</a></li>';
                echo '<li class="item-menu"><a href="index.php?page=visualizarA">Visualizar Admin</a></li>';
                echo '<li class="item-menu"><a href="index.php?page=cadastrarC">Página do Administrador</a></li>';
            }
            if($_GET['page']=='visualizarA'){
                echo '<li class="item-menu"><a href="index.php?page=cadastrarA">Cadastrar Admin</a></li>';
                echo '<li class="item-menu-selected"><a href="index.php?page=visualizarA">Visualizar Admin</a></li>';
                echo '<li class="item-menu"><a href="index.php?page=cadastrarC">Página do Administrador</a></li>';
            }



        }else{
            echo '<li class="item-menu"><a href="index.php?page=cadastrar">Cadastrar Caixa</a></li>';
            echo '<li class="item-menu"><a href="index.php?page=visualizar">Visualizar Caixa</a></li>';
            echo '<li class="item-menu"><a href="index.php?page=adm">Página do Administrador</a></li>';
        }
        
        ?>
        
        </ul>
        <a href="Model/login/logout.php" class="logout">Logout</a>
    </nav>
</header>