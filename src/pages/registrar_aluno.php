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

        <form action="src/pages/validar_login.php" method="post">

          <h1>Cadastrar aluno</h1>

          <label for="usuario">CPF</label>
          <input class="inputtext" id="cpfInput" name="usuario" type="text" placeholder="Digite seu cpf" required>

          <div class="container-senha">
                <label for="senha">Senha</label>
                <input class="inputtext" type="password" id="password" name="senha" placeholder="Insira sua senha" required >
                <span class="exibir-senha" onclick="togglePassword()">Mostrar</span>
          </div>
          <div class="container-senha">
                <label for="senha">Confirmar senha</label>
                <input class="inputtext" type="password" id="confirmar_senha" name="senha" placeholder="Insira sua senha" required >
                <span class="exibir-senha" onclick="togglePassword2()">Mostrar</span>
          </div>
          
          <div class="buttonsubmit">
                <input class="submit"type="submit" value="ENTRAR">
                <div>
                    <p><a href="registrar_aluno.php">Não tem uma conta? Registre-se</a></p>
                </div>
          </div>
        </form>

      </div>

    </div>
    <script>
    document.getElementById('cpfInput').addEventListener('input', function (event) {
    let value = event.target.value;
    // Remove qualquer caractere que não seja número
    value = value.replace(/\D/g, '');

    // Limita o tamanho máximo do CPF para 11 dígitos
    if (value.length > 11) {
        value = value.slice(0, 11);
    }

    // Formata o CPF (###.###.###-##)
    value = value.replace(/(\d{3})(\d)/, '$1.$2');
    value = value.replace(/(\d{3})(\d)/, '$1.$2');
    value = value.replace(/(\d{3})(\d{1,2})$/, '$1-$2');

    event.target.value = value;
});
function confirmarSenha() {
    var senha = document.getElementById('password').value;
    var confirmarSenha = document.getElementById('confirmar_senha').value;

    if (senha === confirmarSenha) {
        alert('Senhas coincidem!');
    } else {
        alert('As senhas não coincidem. Por favor, tente novamente.');
    }
}
</script>
</body>
</html>