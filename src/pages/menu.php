<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style_menu.css">
    <title>Document</title>
    <style>
        /* Adicione o estilo CSS necessário para a animação */
        #slide-menu {

        }

        #slide-menu:hover {
            
        }
    </style>
</head>
<body>
<nav id="slide-menu">
    <div class="top">
        <ul>
            <li class="calendar"><button onclick="window.location.href=('https://www.fiemg.com.br/senai/')">Home<img src="../../assets/img/home.png" alt=""></button></li>
            <li class="sep settings"><button onclick="window.location.href=('insert_empresa.php')">Add<img src="../../assets/img/plus.png" alt=""></button></li>
            <li class="logout"><button onclick="window.location.href=('logout.php')">Sair<img src="../../assets/img/leave.png" alt=""></button></li>
        </ul>
    </div>
</nav>

<script>
    // Adicione um ouvinte de evento para fazer a animação quando o mouse passar por cima da nav
    document.addEventListener('DOMContentLoaded', function () {
        var slideMenu = document.getElementById('slide-menu');
        
        // Adicionando um ouvinte de evento para fazer a animação quando o mouse passar por cima da nav
        slideMenu.addEventListener('mouseover', function () {
            slideMenu.style.left = '0'; // Mover para a direita
        });

        // Adicionando um ouvinte de evento para retornar ao estado original quando o mouse sair da nav
        slideMenu.addEventListener('mouseout', function () {
            slideMenu.style.left = '-110px'; // Retornar à posição inicial
        });
    });
</script>

</body>
</html>
