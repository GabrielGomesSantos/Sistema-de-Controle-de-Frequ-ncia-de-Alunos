<?php 
    include ('conexao.php');

    session_start();
    if($_SESSION['logged'] and $_SESSION['type'] == 1){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="..\..\assets\css\style_inserir-empresa.css">
    <?php include ('links_css.php') ?>
</head>
<header>
    <img src="https://www.fiemg.com.br/senai/wp-content/uploads/sites/12/2023/02/Branco_TAG_SENAI_.png" alt="">
</header>
<body>

    
    <div class="content">
        <div class="formulario">
        <header class="header1"></header>
        <form action="salvar_empresa.php" method="post">
        
            <h1>Insira os dados</h1>
            <label for="nome">Nome da empresa:</label>
            <input class="inputtext" type="text" id="nome" name="nome" required>

            <label for="cnpj">CNPJ:</label>
            <input class="inputtext" type="text" id="cnpj" name="cnpj" required>

            <label for="telefone">Telefone:</label>
            <input class="inputtext" type="text" id="telefone" name="telefone" required>

            <div class="buttonsubmit">
                <input class="submit" type="submit" value="Enviar">
                <button type="button" class="submit" onclick="window.location='cadastrar.php'">Voltar</button>
            </div>
        </form>
        
        </div>
    </div>
</body>
</html>

<?php 
    }else{
        echo "<script> 
        if (confirm('Sem permisão para acessar essa pagina!')) {
            window.location.href = '../../index.php';
        } else {
            window.location.href = '../../index.php';
        }
        </script>";
    }
?>