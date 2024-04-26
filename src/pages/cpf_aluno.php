<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style_read.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Document</title>
</head>
<header>
    <?php include("navbar.php") ?>
</header>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <div class="container">
        <div class="row">
            <div class="col bg-secondary d-flex justify-content-center flex-direction-column mt-5 bg">
                <form action="verificar_aluno.php"     method="post">
                <div class="mb-3">
                   <label for="cpf" class="form-label">Qual seu cpf?</label>
                   <input type="text" class="form-control" id="cpf" aria-describedby="cpfhelp">
                   <div id="cpfhelp" class="form-text"></div>
                </div>
                        <div class="alert alert-warning" role="alert">
                           Digite sem pontuação!
                        </div> 
                        <input class="btn btn-primary offset-4   mb-3" type="submit" value="Enviar">
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>