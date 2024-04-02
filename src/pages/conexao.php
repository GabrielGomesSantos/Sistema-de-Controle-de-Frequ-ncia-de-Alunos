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

mysqli_set_charset($conn, "utf8");

function leitura(){
    $filename = 'documento.pdf';

    if (file_exists($filename)) {
        header('Content-Type: application/pdf');
        header('Content-Disposition: inline; filename="' . $filename . '"');
        header('Content-Transfer-Encoding: binary');
        header('Accept-Ranges: bytes');

        readfile($filename);
    } else {
        echo 'O arquivo não existe.';
    }
}

function newFolder(){
    
    $diretorio = '../../empresas'; 
    $nomeDiretorio = 'teste';

    if (!is_dir($diretorio . '/' . $nomeDiretorio)) {
        if (mkdir($diretorio . '/' . $nomeDiretorio, 0777)) {
            echo 'Diretório criado com sucesso: ' . $diretorio . '/' . $nomeDiretorio;
        } else {
            echo 'Erro ao criar o diretório';
        }
    }
}

?>
