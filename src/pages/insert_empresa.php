<?php include ('conexao.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Insira os Dados da empresa</h1>

        <form action="salvar_empresa.php" method="post">
            <label for="nome">Nome da empresa:</label><br>
            <input type="text" id="nome" name="nome" required><br>

            <label for="cnpj">cnpj:</label><br>
            <input type="text" id="cnpj" name="cnpj" required><br>

            <label for="telefone">telefone:</label><br>
            <input type="text" id="telefone" name="telefone" required><br><br>

            <input type="submit" value="Enviar">
        </form>
        <a href="read_empresa.php">Voltar</a>
    
</body>
</html>