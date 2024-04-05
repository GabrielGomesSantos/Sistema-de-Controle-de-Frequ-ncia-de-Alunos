<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style_menu.css">
    <title>Document</title>
</head>

<body>
<nav id="slide-menu">
    <div class="top">
        <ul>
            <li class="timeline"><button></button></li>
            <li class="events"><button onclick="window.location.href=('logout.php')">Log Out</button></li>
            <li class="calendar"><button onclick="window.location.href=('logout.php')">Log Out</button></li>
            <li class="sep settings"><button onclick="window.location.href=('logout.php')">Log Out</button></li>
            <li class="logout"><button onclick="window.location.href=('logout.php')">Sair <img src="https://www.svgrepo.com/show/132889/logout.svg" alt=""></button></li>
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
            slideMenu.style.left = '-75px'; // Retornar à posição inicial
        });
    });
</script>

</body>
</html>
