<?php 
    include("conexao.php"); 

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
<body>

    <div class="content">
        <table>

            <thead>
    
                <?php 
                    if (mysqli_num_rows($result) > 0) { // Verifica se existem resultados
                ?>
                
                <tr>
                    <th>NOME</th>
                    <th>TELEFONE</th>
                    <th>CNPJ</th>
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
                </tr>

                <?php } ?>
            </tbody>
        </table>    
    </div> 
        
    
</body>
