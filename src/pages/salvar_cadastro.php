<?php

    include('conexao.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        $user = $_POST["user"];
        $pass = $_POST["password"];
        $type = $_POST["tipo"];

        $sql = "INSERT INTO `login`(`usuario`, `senha`, `tipo`) VALUES ('$user','$pass','$type')";

    }

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
            
            header('Location: insert_empresa.php');
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        
    
    mysqli_close($conn);

?>








if (mysqli_num_rows($result) > 0) { 