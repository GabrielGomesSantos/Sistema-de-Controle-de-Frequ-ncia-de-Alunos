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
                
                <div class="campo-do-form">
                    <label for="modalidade">Qual a modalidade do seu curso?</label>

                    <select class="inputtext" id="modalidade" name="modalidade" required>
                        <option value=" " disabled selected hidden>Selecione uma opção</option>
                        <option value="">Aperfeiçoamento Profissional</option>
                        <option value="">Aprendizagem Industrial</option>
                        <option value="">Habilitação Técnica (Cursos Técnicos)</option>
                        <option value="">Iniciação Profissional</option>
                    </select>
                </div>
                <div class="campo-do-form">
                    <label for="nome-completo">
                        Nome completo:
                        <p>digite com letras MAISCULAS</p>

                    </label>
                    <input type="text" id="nome_completo" name="nome_completo" required placeholder="Seu nome aqui">
                </div>
                <div class="campo-do-form">
                    <label for="CPF">
                        CPF:
                    </label>
                    <input type="text" id="cpf" name="cpf" required placeholder="Seu CPF aqui">

                </div>
                <div class="campo-do-form">
                    <label for="curso">Qual é seu curso?</label>
                    <select class="inputtext" name="curso" id="curso" required>
                        <option value="">Curso1</option>
                        <option value="">Curso2</option>
                        <option value="">Curso3</option>
                    </select>
                </div>
                <div class="campo-do-form">
                    <label  class= "justificativa" for="">Sua justificativa refere-se a:</label>
                    <br><br>
                    <div class="campo-do-form-radio">
                        <input type="radio" id="entrada" name="motivo" value="HTML">
                        <label for="entrada">Entrada em atraso</label>
                    </div>
                    <div class="campo-do-form-radio">
                        <input type="radio" id="css" name="motivo" value="">
                        <label for="saida">Saída antecipada</label>
                    </div>
                    <div class="campo-do-form-radio">
                        <input type="radio" id="umoumais" name="motivo" value="">
                        <label for="umoumais">1 dia ou mais de falta</label>
                    </div>

                </div>
                <div class="campo-do-form">
                    <label for="empresa">Empresa contratante, se houver.</label>
                    <select class="inputtext" id="modalidade" name="modalidade">
                     <option value=" " disabled selected hidden>Selecione uma opção</option>
                     <option value=""></option>
                     <option value=""></option>
                     <option value=""></option>
                    </select>
                </div>
                <div class="campo-do-form">
                    <label for="Arquivo">Anexe aqui a justificativa. </label>
                    <input type="file" class="input-file" required name="fileInput" id="fileInput">
                </div>
                <div class="campo-do-form">
                    <label for="observacao">
                        Observação:
                    </label>
                    <input type="text" class="observacao" name="observacao" placeholder="Sua resposta aqui">
                </div>
                <div class="buttonsubmit">
                    <input class="submit" type="submit" value="Enviar">
                </div>
            </form>
        </div>
    </div>
</body>
</html>