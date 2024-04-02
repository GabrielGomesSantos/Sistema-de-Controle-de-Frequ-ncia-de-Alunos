<?php include ('conexao.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\..\assets\css\style_cadastro.css">

    <?php include ('links_css.php') ?>


    
    <title>Cadastrar</title>
    <script src="..\..\assets\js\botao_mostrar_senha.js"></script>
</head>
<body>

    
    <div class="content">
        <div class="formulario">
        <form action="salvar_cadastro.php" method="post">

            <h1>Cadastrar</h1>
            <div class="container-senha">
                <label for="password">Senha:</label>
                <input class="inputtext" type="password" id="password" name="password" required >
                <span class="exibir-senha" onclick="togglePassword()">Mostrar</span>
            </div>

            <label for="tipo">Tipo:</label>
            
            <select class="inputtext" id="tipo" name="tipo"  required>
            <option value="" disabled selected hidden>Selecione uma opção</option>
            <option value="1">Secretaria - Senai</option>
            <option value="2">Empresa</option>
            </select>
            
            <div class="buttonsubmit">
                <input class="submit"type="submit" value="Enviar">

            </div>
        </form>
        </div>
    </div>
</body>
</html>
