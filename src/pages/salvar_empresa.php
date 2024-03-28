<?php

    include('conexao.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        $nome = $_POST["nome"];
        $cnpj = $_POST["cnpj"];
        $telefone = $_POST["telefone"];

        $sql = "INSERT INTO `empresa`(`nomeEmpresa`, `cnpj`, `telefone`) VALUES ('$nome','$cnpj','$telefone')";

    }

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        header('Location: insert_empresa.php');
    
    mysqli_close($conn);

?>