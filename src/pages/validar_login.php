<?php
    include("conexao.php");
    session_start();

    if ($_POST['usuario'] and $_POST['senha']) {

        $username = $_POST['usuario'];
        $password = $_POST['senha'];

        $sql = "SELECT * FROM `login` WHERE usuario = '{$username}';";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $resultado[] = $row;
            }
        } 

        $username_correto = $resultado[0]['usuario'];
        $password_correto = $resultado[0]['senha'];

        if ($username === $username_correto && $password === $password_correto) {
            $_SESSION['logged'] = true;
            $_SESSION['type'] = $resultado[0]['tipo'];
            $_SESSION['id'] = $resultado[0]['id'];
            $_SESSION['id_empresa'] = $resultado[0]['id_empresa'];
            header('Location: dashboard.php');
            exit();

        } else { ?>
            

            <!doctype html>
            <html lang="en">
            <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Bootstrap demo</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
            </head>
            <body>

            <!-- Modal -->
            <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Erro de autenticação</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Usuário ou senha inválidos!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
                </div>
            </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
            <script>
            var myModal = new bootstrap.Modal(document.getElementById('exampleModal'));
            myModal.show();
            </script>
            </body>
            </html>

            
        <?php
        }
    } else {
        header('Location: ../../index.php');
        exit();
    }

?>