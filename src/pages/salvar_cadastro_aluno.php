<?php

    include('conexao.php');

    print_r($_POST);

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["email"];
        $nome = $_POST["nome"];
        $pass = $_POST["pass_aluno"];
        $cpf = $_POST["cpf"];
        $telefone = $_POST["telefone"];   

        $sql = "SELECT * FROM `alunos` WHERE cpf = {$cpf}";

        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){
            echo "<script> 
            if (confirm('CPf já cadastrado! Deseja Logar??')) {
                window.location.href = '#####';
            } else {
                window.location.href = '#####';
            }
            </script>";
        
        }else{
            $sql_Insert = "INSERT INTO `alunos`(`nome`, `password`, `cpf`, `email`, `telefone`) VALUES ('$nome','$pass','$cpf','$email','$telefone')";
            if (!mysqli_query($conn,$sql_Insert)) {
                die("Error: ".mysqli_error($conn));
            }else{
                newFolder($nome);
                echo "<script> 
                if (confirm('Aluno cadastrado com sucesso! Deseja Logar??')) {
                    window.location.href = '#####';
                } else {
                    window.location.href = '#####';
                }
                </script>";
            }
        }
    }
?>