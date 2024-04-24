<?php include ('conexao.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\..\assets\css\style_cadastro.css">

    <?php include ('links_css.php') ?>



    <title>Document</title>
</head>
<header>
    <img src="https://www.fiemg.com.br/senai/wp-content/uploads/sites/12/2023/02/Branco_TAG_SENAI_.png" alt="">
</header>
<body>
    <div class="content">
        <div class="formulario">
        <header class="header1"></header>
        <form action="salvar_cadastro.php" method="post">
            
            <h1>Cadastrar</h1>
            <label for="usuario">Usuario:</label>
            <input  class="inputtext" type="text" id="usuario" name="usuario" required>

            <label for="password">Senha:</label>
            <input class="inputtext" type="text" id="password" name="password" required>

            <label for="tipo">Tipo:</label>
            
            <select class="inputtext" id="tipo" name="tipo"  required>
            <option value="1">Secretaria - Senai</option>
            <option value="2">Empresa</option>
            <div class="buttonsubmit">
                <input class="submit"type="submit" value="Enviar">
            </div>
        </form>
        </div>
    </div>
</body>
</html>