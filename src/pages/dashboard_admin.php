<?php 
    include("conexao.php"); 
    include("links_css.php"); 
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style_read.css">
    <link rel="stylesheet" href="../../assets/css/style_footer.css">
    <script src="..\..\assets\js\botao_adicionar.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


</head>
<header>

    <?php  include('navbar.php'); ?>
    <h1 class="admin">Admin</h1>

</header>
<body>
    

    <div class="conteiner">

        <!-- cards -->
        <div class="row row-cols-1 row-cols-md-3 g-4">


            <div class="col-2 d-flex justify-content-center">
                <div onclick="window.location.href='read_alunos.php'" class="card">
                    <img src="../../assets/img/alunos.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Ver alunos cadastrados </h5>
                        </div>
                </div>
            </div>

            <div class="col-2 d-flex justify-content-center">
                <div onclick="window.location.href='read_empresa.php'" class="card">
                    <img src="../../assets/img/empresas_icone.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Ver empresas cadastrados </h5>
                        </div>
                </div>
            </div>

            <div class="col-2 d-flex justify-content-center">
                <div onclick="window.location.href='read_turmas.php'" class="card">
                    <img src="../../assets/img/turmas.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Ver turmas abertas </h5>
                        </div>
                </div>
            </div>

            <div class="col-2 d-flex justify-content-center">
                <div onclick="window.location.href='read_turmas.php'" class="card">
                    <img src="../../assets/img/turmas.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Ver turmas abertas </h5>
                        </div>
                </div>
            </div>

            <div class="col-2 d-flex justify-content-center">
                <div onclick="window.location.href='read_turmas.php'" class="card">
                    <img src="../../assets/img/turmas.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Ver turmas abertas </h5>
                        </div>
                </div>
            </div>

            <div class="col-2 d-flex justify-content-center">
                <div onclick="window.location.href='read_turmas.php'" class="card">
                    <img src="../../assets/img/turmas.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Ver turmas abertas </h5>
                        </div>
                </div>
            </div>


        </div>

        <!-- cards -->

    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
<?php include('footer.php') ?>     