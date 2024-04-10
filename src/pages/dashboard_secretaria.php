<?php 
    include("conexao.php"); 
    include("links_css.php"); 

    $nome_da_table = 'empresa'; 

    $sql = "SELECT * FROM $nome_da_table";
   

    $result = mysqli_query($conn, $sql); // Executa a consulta SQL
?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/style_read.css">
    <link rel="stylesheet" href="assets/css/style_read.css">
    <script src="..\..\assets\js\botao_adicionar.js"></script>


</head>
<header>
    <?php  include('navbar.php'); ?>
    <div class="titulo">
        <h1>Empresa Cadastradas</h1>
    </div>
</header>
<body>
    <div class="content">
        
        <div class="table">
        
        <table>
        
            <thead>
    
                <?php 
                    if (mysqli_num_rows($result) > 0) { // Verifica se existem resultados
                ?>
                
                <tr>
                    <th>NOME</th>
                    <th>TELEFONE</th>
                    <th>CNPJ</th>
                    <th>Enviar </button></a></th>
                </tr>
                
                <?php }
                 else {
                ?>

                <div class="resultado">
                    <img src="../../assets/img/notificacao.svg" width="712px" alt="">
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
                    <td class='botao-enviar'> <a href='Formulario_send.php?id=<?php echo $row["id"]; ?>'><button class="button_acao">ENVIAR</button></a></td>
                </tr>

                <?php } ?>
            </tbody>
        </table>
        </div>    
    </div> 
        
    
</body>
