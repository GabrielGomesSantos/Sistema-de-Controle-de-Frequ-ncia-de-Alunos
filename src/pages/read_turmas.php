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
    
    
</header>
<body>
    
    <div class="content">
        
        <div class="table">
        <h1>Empresas Registradas:</h1>  
        <table>
        
            <thead>
    
                <?php 
                    if (mysqli_num_rows($result) > 0) { // Verifica se existem resultados
                ?>
                
                <tr>
                    <th>NOME</th>
                    <th>TELEFONE</th>
                    <th>CNPJ</th>
                    <th><a href='src/pages/send.php'><button class="button_acao">ENVIAR TODOS</button></a></th>
                    
                </tr>
                
                <?php }
                 else {
                ?>

                <div class="resultado">
                    <img src="assets/img/notificacao.svg" width="712px" alt="">
                    <br>
                    <p class="error_busca">NENHUM RESULTADO ENCONTRADO</p>
                </div>

                <?php } ?>
                
            </thead>
            
            <tbody> 
                <?php 
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>

                <tr id='<?php echo $row["id"]; ?>'>
                    <td onclick = "windows.location"><?php echo $row["nomeEmpresa"]; ?></td>
                    <td><?php echo $row["telefone"]; ?></td>
                    <td><?php echo $row["cnpj"]; ?></td>
                    <td class='botao-enviar'> <a href='send.php?id=<?php echo $row["id"]; ?>'><button class="button_acao">ENVIAR</button></a></td>
                </tr>

                <?php } ?>
            </tbody>
        </table>
        </div>    
    </div> 
        
    
</body>
