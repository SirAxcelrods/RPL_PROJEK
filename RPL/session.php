<?php 

    session_start();
    if(!($_SESSION['user'])){
        header("location: login.php?message=belum_login");
    }

?>