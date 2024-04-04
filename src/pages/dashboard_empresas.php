<?php 
    include("conexao.php"); 
    include("links_css.php"); 
?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style_read.css">
    <link rel="stylesheet" href="assets/css/style_read.css">



</head>
<header>
    <img src="https://www.fiemg.com.br/senai/wp-content/uploads/sites/12/2023/02/Branco_TAG_SENAI_.png" alt="">
    <div class="titulo">
        <h1>Relatorio de Frequência</h1>
    </div>
    <div class="botao">
     <button onclick="window.location=''">Sair</button>
    </div>
</header>
<body>
    <div clas="content">
        <div class="titulo2">
        <h1>ARQUIVOS:</h1>
</div>
    <div class="pasta">
    <header class="header1">
    </header>    
    <div class="arquivos">
    
    <?php
        
        $caminhoDaPasta = '../../companies/peter';

        $arquivos = scandir($caminhoDaPasta);
        $arquivos = array_diff($arquivos, array('..', '.'));
        $count = 0;
         foreach ($arquivos as $arquivo) {
    ?>

        <div class="arquivo" onclick="window.location='<?php echo $caminhoDaPasta . '/' . $arquivo; ?>'">
            <img src="../../assets/img/pngwing.com.png" alt="">


            
            <div class="nome_arquivo">
                <p><?php echo $arquivo;?></p>
            </div
        </div>
   
          
    </div> 
    <?php }?> 
    </div>
    </div>
</body>
