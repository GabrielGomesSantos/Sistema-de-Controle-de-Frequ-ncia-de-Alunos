<?php include ('conexao.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< Updated upstream
=======
    <link rel="stylesheet" href="..\..\assets\css\style_cadastro.css">
    <?php include ('links_css.php') ?>
<<<<<<< Updated upstream

>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
    <title>Document</title>

</head>
<<<<<<< Updated upstream
=======

<header>
    <img src="https://www.fiemg.com.br/senai/wp-content/uploads/sites/12/2023/02/Branco_TAG_SENAI_.png" alt="">
</header>
>>>>>>> Stashed changes
<body>

    <h1>Cadastrar</h1>

        <form action="salvar_cadastro.php" method="post">
<<<<<<< Updated upstream

            <label for="usuario">Usuario:</label><br>
            <input type="text" id="usuario" name="usuario" required><br>
=======
            
<<<<<<< Updated upstream
            <h1>Cadastrar</h1>
            <label for="user">Usuario:</label>
            <input  class="inputtext" type="text" id="user" name="user" required>

            <label for="password">Senha:</label>
            <input class="inputtext" type="password" id="password" name="password" required>
>>>>>>> Stashed changes
=======
            <h1>Cadastrar Usuarios</h1>
            <label for="usuario">Usuario:</label>
            <input  class="inputtext" type="text" id="usuario" name="usuario" required>

            <label for="password">Senha:</label>
            <input class="inputtext" type="password" id="password" name="password" required>
>>>>>>> Stashed changes

            <label for="password">Senha:</label><br>
            <input type="text" id="password" name="password" required><br>

            <label for="tipo">Tipo:</label><br>
            <input type="text" id="tipo" name="tipo" required><br><br>

            <input type="submit" value="Enviar">
        </form>
    
</body>
</html>