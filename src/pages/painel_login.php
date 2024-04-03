<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="..\..\assets\css\style_login.css">

  <?php include ('links_css.php') ?>

  <script src="..\..\assets\js\botao_mostrar_senha.js"></script>
  
  <title>Document</title>
</head>
<header>
    <img src="https://www.fiemg.com.br/senai/wp-content/uploads/sites/12/2023/02/Branco_TAG_SENAI_.png" alt="">
    
</header>
<body>
    <div class="content">
     
      <div class="formulario">
      <header class="header1"></header>  
          <form action="read_empresa.php" method="post">

          <h1>Entrar</h1>

          <label for="usuario">Usuário</label>
          <input class="inputtext" type="text">

          <div class="container-senha">
                <label for="senha">Senha</label>
                <input class="inputtext" type="password" id="password" name="password" required >
                <span class="exibir-senha" onclick="togglePassword()">Mostrar</span>
          </div>


          <div class="buttonsubmit">
                <input class="submit"type="submit" value="Enviar">
                
          </div>

          <h3>Não possui uma conta ? <a href="cadastrar.php">Cadastre-se !</a></h3>

          </form>
      </div>
    </div>
</body>
</html>