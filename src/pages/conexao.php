<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bd_frequencia";

// Cria a conexão
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verifica a conexão
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Define o conjunto de caracteres para utf8
mysqli_set_charset($conn, "utf8");
?>
