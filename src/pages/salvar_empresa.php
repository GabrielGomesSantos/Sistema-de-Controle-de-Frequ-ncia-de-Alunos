<?php

include('conexao.php');

$nome_da_table = 'empresa';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $cnpj = $_POST["cnpj"];
    $telefone = $_POST["telefone"];
    
    $sql = "SELECT * FROM $nome_da_table WHERE cnpj LIKE '$cnpj'";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0){
        echo "<script> 
        if (confirm('CNPJ já existente! Deseja prosseguir?')) {
            window.location.href = 'insert_empresa.php';
        } else {
            window.location.href = 'insert_empresa.php';
        }
        </script>";
    }
    else{
        $sql_Insert = "INSERT INTO $nome_da_table (nomeEmpresa, cnpj, telefone) VALUES ('$nome', '$cnpj','$telefone')";
        if (!mysqli_query($conn,$sql_Insert)) {
            die("Error: ".mysqli_error($conn));
        }else{
            newFolder($nome,1);
            echo "<script> 
            if (confirm('Empresa inserida com sucesso! <BR> Deseja inserir outra empresa?')) {
                window.location.href = 'insert_empresa.php';
            } else {
                window.location.href = 'dashboard.php';
            }
            </script>";
        }
    }
}
?>
