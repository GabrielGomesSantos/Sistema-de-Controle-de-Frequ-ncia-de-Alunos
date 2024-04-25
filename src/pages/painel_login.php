<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets\css\style_login.css">
  <?php include ('links_css.php') ?>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>

  <script src="..\..\assets\js\botao_mostrar_senha.js"></script>
  
  <title>Document</title>
</head>

<header>
    <img src="https://www.fiemg.com.br/senai/wp-content/uploads/sites/12/2023/02/Branco_TAG_SENAI_.png" alt="">
    
    <a href="registrar_aluno.php"><button>Area Do <br> aluno</button></a>
    
</header>

<body>

    <?php
        if(isset($_GET['error'])){
          ?> 

              <div class="row">
                <div class="col-4 offset-8">
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                  <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                  <div>
                    <p>Usuario e/ou senha errados!</p>
                  </div>
                </div>
                </div>
              </div>



        <?php 
        }
    ?>

    <div class="content">
     
      <div class="formulario">
        <header class="header1"></header>  

        <form action="src/pages/validar_login.php" method="post">

          <h1>Entrar</h1>

          <label for="usuario">Usuário</label>
          <input class="inputtext" name="usuario" type="text" required>

          <div class="container-senha">
                <label for="senha">Senha</label>
                <input class="inputtext" type="password" id="password" name="senha" required >
                <span class="exibir-senha" onclick="togglePassword()">Mostrar</span>
          </div>


          <div class="buttonsubmit">
                <input class="submit"type="submit" value="Enviar">
                
          </div>

        </form>

      </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>