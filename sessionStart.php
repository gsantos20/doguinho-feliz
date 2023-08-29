<?php 

session_start();


    if(!isset($_SESSION["id_user"]) || $_SESSION["id_user"] == '' || $_SESSION["id_user"] == null){
        header('Location: login.php');
    };

?>