<?php 
    include("conexao.php"); 
    include("links_css.php"); 
    
    $sql = "SELECT * FROM alunos";

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
    <h1>Relatorio de Alunos Cadastrados</h1>
    </div>
    
    
</header>
<body>
    
    <div class="content">
        
        <div class="table">
        <h1>Alunos Registradas:</h1>  
        <table>
        
            <thead>
    
                <?php 
                    if (mysqli_num_rows($result) > 0) { // Verifica se existem resultados
                ?>
                
                <tr>
                    <th>NOME</th>
                    <th>EMAIL</th>
                    <th>CPF</th>
                    <th>TELEFONE</th>
                    <th>Status</th>
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
                    <td onclick = "windows.location"><?php echo $row["nome"]; ?></td>
                    <td><?php echo $row["email"]; ?></td>
                    <td><?php echo $row["cpf"]; ?></td>
                    <td><?php echo $row["telefone"]; ?></td>
                    <td></td>   
                </tr>

                <?php } ?>
            </tbody>
        </table>
        </div>    
    </div> 
        
    
</body>
