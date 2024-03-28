<?php include ('conexao.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Cadastrar</h1>

        <form action="salvar_cadastro.php" method="post">

            <label for="usuario">Usuario:</label><br>
            <input type="text" id="usuario" name="usuario" required><br>

            <label for="password">Senha:</label><br>
            <input type="text" id="password" name="password" required><br>

            <label for="tipo">Tipo:</label><br>
            <input type="text" id="tipo" name="tipo" required><br><br>

            <input type="submit" value="Enviar">
        </form>
    
</body>
</html>