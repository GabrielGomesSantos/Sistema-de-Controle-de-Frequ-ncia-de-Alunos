<?php 
    include ('conexao.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\..\assets\css\style_cadastro.css">
    <?php include ('links_css.php') ?>
    <title>Cadastrar</title>
</head>
<header>
    <img src="https://www.fiemg.com.br/senai/wp-content/uploads/sites/12/2023/02/Branco_TAG_SENAI_.png" alt="">
</header>
<body>
    
    <div class="content">
        
        <div class="formulario">

            <header class="header1">
                
            </header>

            <form action="salvar_cadastro_aluno.php" method="post">

                <h1>Cadastrar</h1>

                <label for="nome">Nome Completo: </label>
                <input class="inputtext" type="text" id="user" name="nome" required>

                <label for="email">Email: </label>
                <input class="inputtext" type="text" id="Email" name="email" required>

                <label for="CPF">CPF: </label>
                <input class="inputtext" type="text" id="user" name="CPF" required>

                <label for="telefone">telefone: </label>
                <input class="inputtext" type="text" id="telefone" name="telefone" required>

                <div class="container-senha">
                    <label for="pass_aluno">Senha:</label>
                    <input class="inputtext" type="password" id="password" name="pass_aluno" required >
                    <span class="exibir-senha" onclick="togglePassword()"><button >M</button></span>
                </div>

                
                        
                <div class="buttonsubmit">
                    <input class="submit" type="submit" value="Enviar">
                </div>

            </form>

        </div>

    </div>
    <script src="..\..\assets\js\botao_mostrar_senha.js"></script>
</body>
</html>
