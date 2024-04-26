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

//Funçoes 


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

function newFolder($nome, $tipo){
    
    $diretorio = '../../companies'; 
    $nomeDiretorio = $nome;

    if (!is_dir($diretorio . '/' . $nomeDiretorio)) {
        if (mkdir($diretorio . '/' . $nomeDiretorio, 0777)) {
            echo 'Diretório criado com sucesso: ' . $diretorio . '/' . $nomeDiretorio;
        } else {
            echo 'Erro ao criar o diretório';
        }
    }
}

function criarRelatorio($empresa) {

    // Define o locale para português do Brasil
    setlocale(LC_TIME, 'pt_BR.utf8');

    $diretorioBase = "../../companies/{$empresa}";

    $caminhoDiretorio = $diretorioBase . '/';

    // Restaura o locale padrão
    setlocale(LC_TIME, '');

    // Verifica se o diretório já existe
    if (!is_dir($caminhoDiretorio)) {

        if (mkdir($caminhoDiretorio, 0777, true)) { 

            // Define o locale para português do Brasil
            setlocale(LC_TIME, 'pt_BR.utf8');

            $diretorioBase = "../../companies/{$empresa}";

            // Obtém o nome do mês e o ano atual
            $nomeMes = strftime('%B'); // %B retorna o nome completo do mês
            $ano = date('Y'); 
            
            $nomeRelatorio = $ano . '_' . $nomeMes.'.pdf';

            // Restaura o locale padrão
            setlocale(LC_TIME, '');
             
            $pdfDestino = $caminhoDiretorio . $nomeRelatorio; 
        
            if (file_exists($arquivo)) {
                if (copy($arquivo, $pdfDestino)) {
                    echo 'Arquivo PDF copiado com sucesso para: ' . $pdfDestino;
                } else {
                    echo 'Erro ao copiar o arquivo PDF';
                }
            } else {
                echo 'O arquivo PDF original não foi encontrado';
            }
        } else {
            echo 'Erro ao criar o diretório';
        }
        
    } else {

        echo"Diretorio ja existente <br>";

        setlocale(LC_TIME, 'pt_BR.utf8');

        $diretorioBase = "../../companies/{$empresa}";

        $nomeMes = strftime('%B'); // %B retorna o nome completo do mês
        $ano = date('Y'); 
        
        $nomeRelatorio = $ano . '_' . $nomeMes.'.pdf';

        // Restaura o locale padrão
        setlocale(LC_TIME, '');
        
        $arquivo = '../../assets/relatorios/Relatorio Modelo.pdf'; 
        $pdfDestino = $caminhoDiretorio . $nomeRelatorio; 
    
        if (file_exists($arquivo)) {
            if (copy($arquivo, $pdfDestino)) {
                echo 'Arquivo PDF copiado com sucesso para: ' . $pdfDestino;
            } else {
                echo 'Erro ao copiar o arquivo PDF';
            }
        } else {
            echo 'O arquivo PDF original não foi encontrado';
        }

    }
}
?>