<?php 
    session_start();

    include 'includes/header.php';

    if(isset($_SESSION['userId'])){

        include 'includes/initial.php';

    }else{

        include 'includes/login.php';

    }

?>

