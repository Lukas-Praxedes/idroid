
<?php
error_reporting(0);
$token = date('YmdHis');
?>
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro</title>
    <meta name="description" content="">
    <!-- Link para o Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        body {
            background-image: url('./index.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }

        .card:hover {
            transform: scale(1.2);
            cursor: pointer;
        }

        /* Estilo personalizado para a tag <h2> */
        h2 {
            background: linear-gradient(to bottom, #000080, #87CEFA);
            -webkit-background-clip: text;
            color: transparent;
            display: inline-block;
        }
        
        /* Estilo para a barra de pesquisa */
        .input-group {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div id="menu" name="menu">
        <nav class="navbar navbar-expand-md bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><h2>Idroid</h2></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto">
                        <li id="start" class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                        </li>
                        <li id="news" class="nav-item">
                            <a class="nav-link" href="#">Atualizações</a>
                        </li>
                        <li id="system" class="nav-item">
                            <a class="nav-link" href="#">Sistema</a>
                        </li>
                        <li id="developer" class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Suporte On-Line</a>
                            <ul class="dropdown-menu">
                                <li><a id="instagram" class="dropdown-item" href="#">Chat Suporte</a></li>
                                <li><a id="facebook" class="dropdown-item" href="#">Chat Financeiro</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a id="tiktok" class="dropdown-item" href="#">Ouvidoria</a></li>
                                <li><a id="whatsapp" class="dropdown-item" href="#">Whatsapp</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex align-items-center" role="search">
                        <div class="input-group">
                            <input id="field-find" class="form-control" type="search" placeholder="Buscar no sistema" aria-label="Buscar">
                            <button id="find-games" class="btn btn-success" type="submit">Buscar</button>
                        </div>
                    </form>
                </div>
            </div>
        </nav>
    </div>

    <div id="topo-menu" class="topo-menu">

                                </td>
                            </tr> 
                            <div class="container mt-5">
        <h2 class="mb-2">Cadastro de Clientes</h2>
        <form>
            <!-- nome -->
       
<div class="form-client">
                <label for="Nome">Nome</label>
                          
<input type="text" class="form-control" id="descricao" name="descricao" required>
            </div>
           
<!-- Telefone -->
            <div class="form-client">
                <label for="Telefone">Telefone:</label>
                <input type="text" class="form-control" id="Telefone" name="Telefon">
            </div>
<!-- Endereço -->
            <div class="form-client">
                <label for="Endereço">Endereço:</label>
                <input type="text" class="form-control" id="Endereço" name="Endereço">
            </div>  
<!-- cep -->       
            <div class="form-client">
                <label for="Cep">cep:</label>
                <input type="text" class="form-control" id="cep" name="cep">
            </div> 
<!-- cpf -->
            <div class="form-client">
                <label for="cpf">Cpf:</label>
                <input type="text" class="form-control" id="cpf" name="cpf">
            </div> 
            <h1></h1>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <button type="submit" class="btn btn-danger">Deletar</button>        
    </form>
    <!-- Incluindo Bootstrap JS e jQuery (opcional) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@5.3.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
                          
        <script src="./produto.js?<?=$token;?>">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>