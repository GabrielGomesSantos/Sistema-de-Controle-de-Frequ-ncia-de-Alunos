<?php
    session_start();
    
    if($_SESSION['type'] == 1){
        include("dashboard_secretaria.php");
    }elseif($_SESSION['type'] == 2){
        include("dashboard_empresas.php");
    }else{
        header('Location: ../../index.php');
        exit();
    }

?>