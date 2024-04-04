<?php 
    include("conexao.php"); 
    include("links_css.php"); 

    $busca = isset($_GET['busca']) ? $_GET['busca'] : '';
    $nome_da_table = 'empresa'; 
    
    if (!empty($busca)) { 
        $sql = "SELECT * FROM $nome_da_table WHERE nome LIKE '%$busca%'";
    } else {
        $sql = "SELECT * FROM $nome_da_table";
    }

    $result = mysqli_query($conn, $sql); // Executa a consulta SQL
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
<<<<<<< Updated upstream
<<<<<<< Updated upstream
    
    <div class="content">
         <div class="arquivo"><img src="https://img.freepik.com/vetores-premium/icone-de-pasta-de-arquivo-em-estilo-simples-documentos-arquivo-ilustracao-vetorial-no-fundo-branco-isolado-conceito-de-negocios-de-armazenamento_157943-627.jpg" alt=""></div>
=======
    <div clas="content">
        <div class="titulo2">
        <h1>ARQUIVOS:</h1>
</div>
    <div class="pasta">
    <header class="header1">

    </header>    
    <div class="arquivos" >
    
    <?php
        
        $caminhoDaPasta = '../../companies/peter';
=======
    <div class="box">
        <div class="barra-lateral">teste</div>
            <div clas="content">
                <div class="titulo2">
                    <h1>ARQUIVOS:</h1>
                </div>
                <div class="pasta">
                <header class="header1"></header>  
                    <div class="pasta-content"> 
                         
                        <div class="arquivos">
                            <?php     
                                $caminhoDaPasta = '../../companies/peter';
                                $arquivos = scandir($caminhoDaPasta);
                                $arquivos = array_diff($arquivos, array('..', '.'));
                                $count = 0;
                                foreach ($arquivos as $arquivo) {
                            ?>
>>>>>>> Stashed changes

                            <div class="arquivo" onclick="window.location='<?php echo $caminhoDaPasta . '/' . $arquivo; ?>'">
                                <img src="../../assets/img/pngwing.com.png" alt="">
          
<<<<<<< Updated upstream
>>>>>>> Stashed changes
    </div> 
    <?php }?> 
    </div>
=======
                                <div class="nome_arquivo">
                                    <p><?php echo $arquivo;?></p>
                                </div>
                            </div>
                        
                            <?php }?> 
                        </div> 
                        
                    </div>
                </div>
            </div>
        
>>>>>>> Stashed changes
    </div>
    <?php include("footer.php");?>
</body>
