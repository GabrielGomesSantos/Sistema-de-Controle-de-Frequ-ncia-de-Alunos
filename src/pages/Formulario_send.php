<?php
    include("conexao.php");

    $id = $_GET['id'];

    $sql = "SELECT nomeEmpresa FROM `empresa` WHERE id ={$id}";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/Formulario_send.css">
    <?php include("links_css.php");?>
    
    <title>Document</title>
</head>
<body>
    <div class="content">
        
        <div class="formulario">
        <header class="header-1"></header>
            
        <form action="send.php" method="post" enctype="multipart/form-data">
        <h1><?php echo $row['nomeEmpresa']; ?></h1>

            <input type="hidden" name="id" value="<?php echo $id;?>" >

            <label for="arquivo">Escolha o Arquivo:</label>
            <input type="file" class="input-file" required name="fileInput" id="fileInput">

            <input type="submit" class="submit" value="Enviar">
        </form>
        </div>
    </div>
</body>
</html>