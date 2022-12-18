<?php


    include('config/connection.php');
    session_start();
    if(!isset($_SESSION['dangnhapadmin'])){
        header('Location:login.php');
    }
    include ("modules/header.php");
    include ("modules/menu.php");
    include ("modules/main.php");
    include ("modules/footer.php");

  
?>
