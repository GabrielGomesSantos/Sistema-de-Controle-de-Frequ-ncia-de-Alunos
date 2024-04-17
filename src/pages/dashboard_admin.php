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


</head>
<header>

    <?php  include('navbar.php'); ?>
    <p>Admin</p>
</header>
<body>
    

    <div class="contairner">

        <div class="buttons">
            <button>Ver Empresas</button>

            <button>Ver Alunos</button>

            <button>Ver Cursos</button>

            <button>Ver Turmas</button>

            
        </div>




    </div>
    
</body>

<?php include('footer.php') ?>     