<?php
    include("conexao.php");
    $id = $_POST['id'];
    print_r($id);
    $sql = "SELECT nomeEmpresa FROM `empresa` WHERE id ={$id}";

    $result = mysqli_query($conn,$sql);

    $row = mysqli_fetch_assoc($result);

    $empresa = $row['nomeEmpresa'];
 
  if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["fileInput"])) {
      $file = $_FILES["fileInput"];

      if ($file["error"] == UPLOAD_ERR_OK) {
          $targetDir = "../../companies/{$empresa}/";
          setlocale(LC_TIME, 'pt_BR.utf8');
          $nomeMes = strftime('%B'); 
          $ano = date('Y'); 

          $fileName =  $ano . '_' . $nomeMes.'.pdf';

          $targetPath = $targetDir . $fileName;

          setlocale(LC_TIME, '');

          
          // Move o arquivo temporário para o destino final
          if (move_uploaded_file($file["tmp_name"], $targetPath)) {
              echo "O arquivo foi enviado com sucesso. Caminho: " . $targetPath;
          } else {
              echo "Ocorreu um erro ao enviar o arquivo.";
          }
      } else {
          echo "Erro no envio do arquivo.";
      }
  } else {
      echo "O formulário não foi submetido corretamente.";
  }
?>
