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
<<<<<<< Updated upstream

        header('Location: insert_empresa.php');
    
    mysqli_close($conn);

?>
=======
        </script>";
    }
    else{
        $sql_Insert = "INSERT INTO $nome_da_table (nomeEmpresa, cnpj, telefone) VALUES ('$nome', '$cnpj','$telefone')";
        if (!mysqli_query($conn,$sql_Insert)) {
            die("Error: ".mysqli_error($conn));
        }else{
            newFolder($nome);
            echo "<script> 
            if (confirm('Empresa inserida com sucesso! eseja inserir outra empresa?')) {                window.location.href = 'insert_empresa.php';
                
            } else {
                window.location.href = 'dashboard.php';
            }
            </script>";
        }
    }
}
?>
>>>>>>> Stashed changes
