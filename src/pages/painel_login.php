<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets\css\style_login.css">
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

        <form action="src/pages/validar_login.php" method="post">

          <h1>Entrar</h1>

          <label for="usuario">Usuário</label>
          <input class="inputtext" name="usuario" type="text" required>

          <label for="senha">Senha</label>
          <input class="inputtext" name="senha" type="text" required>


          <div class="buttonsubmit">
                <input class="submit"type="submit" value="Enviar">
                
          </div>

        </form>

      </div>

    </div>

</body>
</html>