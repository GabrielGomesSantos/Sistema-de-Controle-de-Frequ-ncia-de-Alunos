<?php
    include("conexao.php");
    session_start();

    if ($_POST['usuario'] and $_POST['senha']) {

        $username = $_POST['usuario'];
        $password = $_POST['senha'];

        $sql = "SELECT * FROM `login` WHERE usuario = '{$username}';";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $resultado[] = $row;
            }
        } 

        $username_correto = $resultado[0]['usuario'];
        $password_correto = $resultado[0]['senha'];

        if ($username === $username_correto && $password === $password_correto) {
            $_SESSION['logged'] = true;
            $_SESSION['type'] = $resultado[0]['tipo'];
            header('Location: dashboard.php');
            exit();

        } else {

            echo "<script> 
                if (confirm('Usuario e/ou Senha invalidos!')) {
                    window.location.href = '../../index.php';
                } else {
                    window.location.href = '../../index.php';
                }
                </script>";
        }
    } else {
        header('Location: ../../index.php');
        exit();
    }

?>