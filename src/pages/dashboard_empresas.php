<?php 

    if(session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    
    include("conexao.php"); 
    include("links_css.php");
    
    $nome_da_table = 'empresa'; 

    $sql = "SELECT * FROM $nome_da_table WHERE id ={$_SESSION['id_empresa']}";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style_read.css">
    <link rel="stylesheet" href="../../assets/css/style_reads.css">
    <link rel="stylesheet" href="../../assets/css/style_footer.css">
 
</head>
<header>
    
    <img src="https://www.fiemg.com.br/senai/wp-content/uploads/sites/12/2023/02/Branco_TAG_SENAI_.png" alt="">
 
    <div class="botao">
     <button onclick="window.location=''">Sair</button>
    </div>
</header>
<body>
<div class="box">
        <div class="barra-lateral"></div>
            <div clas="content">
                <div class="titulo2">
                    <h1>ARQUIVOS:</h1>
                </div>
                <div class="pasta">
                <header class="header1"></header>  
                    <div class="pasta-content"> 
                         
                        <div class="arquivos">
                            <?php     
                                $caminhoDaPasta = "../../companies/" . $row['nomeEmpresa'] . "/";
                                $arquivos = scandir($caminhoDaPasta);
                                $arquivos = array_diff($arquivos, array('..', '.'));
                                foreach ($arquivos as $arquivo) {
                            ?>

                            <div class="arquivo" onclick="window.location='<?php echo $caminhoDaPasta . '/' . $arquivo; ?>'">
                                <img src="../../assets/img/pngwing.com.png" alt="">
          
                                <div class="nome_arquivo">
                                    <p><?php echo $arquivo;?></p>
                                </div>
                            </div>
                        
                            <?php }?> 
                        </div> 
                        
                    </div>
                </div>
            </div>
        
    </div>
    <?php include("footer.php");?>
</body>
