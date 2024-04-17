<?php

    include('conexao.php');

    print_r($_POST);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        $user = $_POST["user"];
        $pass = $_POST["password"];
        $type = $_POST["tipo"];
        $id_empresa = $_POST["empresa"];


        $sql = "INSERT INTO `usuarios`(`usuario`, `senha`, `tipo`, `id_empresa`) VALUES ('$user','$pass','$type','$id_empresa')";

    }

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
            
            header('Location: ../../index.php');
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        
    
    mysqli_close($conn);

?>

