<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Php CRUD</title>
</head>

<body>

    <!-- Barra de navegação Por Bootstrap -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="main.php">Site.com</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" aria-current="page" href="main.php">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=novo">Novo Usuário</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=listar">Lista de Usuários</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div classs="row">
            <div class="col mt-5">

                <!-- Ligaçao da navbar aos outros arquivos, por meio do REQUEST-->
                <?php
                include("conexao.php");

                switch (@$_REQUEST["page"]) {
                    case "novo":
                        include("newUser.php");
                        break;
                    case "listar":
                        include("listUser.php");
                        break;
                    case "salvar":
                        include("salvarUser.php");
                        break;
                    case "editar":
                        include("editUser.php");
                        break;
                    default:
                        echo "<h1>Bem vindo</h1><h3>Escolha uma das Opções Acima</h3>";
                }
                ?>
            </div>
        </div>
    </div>




    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>