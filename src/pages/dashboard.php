<?php
    session_start();
    
    if($_SESSION['logged']){
        
        if($_SESSION['type'] == 1){
            include("dashboard_secretaria.php");
        }elseif($_SESSION['type'] == 2){
            include("dashboard_empresas.php");
        }else{
            header('Location: ../../index.php');
            exit();
        }
    }else{
        echo "<script> 
        if (confirm('Sem permisão para acessar essa pagina!')) {
            window.location.href = '../../index.php';
        } else {
            window.location.href = '../../index.php';
        }
        </script>";
    }

?>