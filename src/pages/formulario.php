<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\..\assets\css\style_formulario.css">
    <?php include ('links_css.php') ?>
    <title>Document</title>
</head>
<body>
<header>
    <img src="https://www.fiemg.com.br/senai/wp-content/uploads/sites/12/2023/02/Branco_TAG_SENAI_.png" alt="">
</header>
    <div class="content">
        <div class="formulario">
            <header class="header1"></header>
            <form action="" method="post">
                <h1>Envio de justificativa de falta</h1>
                <p class="descricao">Conforme Manual do Aluno, é direito do aluno valer-se de justificativas de falta, desde que o documento seja apresentado no prazo-limite de até (05) cinco dias consecutivos, contados a partir da 1ª data da falta.</p>
                <label for="modalidade">Qual a modalidade do seu curso ?</label>
                <select class="inputtext" id="modalidade" name="modalidade" required>
                    <option value=" " disabled selected hidden>Selecione uma opção</option>
                    <option value="">Aperfeiçoamento Profissional</option>
                    <option value="">Aprendizagem Industrial</option>
                    <option value="">Habilitação Técnica (Cursos Técnicos)</option>
                    <option value="">Iniciação Profissional</option>
                </select>
            </form>
        </div>

    </div>




</body>
</html>