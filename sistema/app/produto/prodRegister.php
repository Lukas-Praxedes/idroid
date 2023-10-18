
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
        <h2 class="mb-2">Cadastro de Produtos</h2>
        <form>
            <!-- Descrição do Item -->
       
<div class="form-group">
                <label for="descricao">Descrição do Item:</label>
                          
<input type="text" class="form-control" id="descricao" name="descricao" required>
            </div>
           
<!-- Código de Barras -->
            <div class="form-group">
                <label for="codigoBarras">Código de Barras:</label>
                <input type="text" class="form-control" id="codigoBarras" name="codigoBarras">
            </div>

            <!-- Tipo de Unidade -->

<div class="form-group">
                <label for="tipoUnidade">Tipo de Unidade:</label>
            
<select class="form-control" id="tipoUnidade" name="tipoUnidade">
<option value="unidade">Tipo da unidade</option>
                    <option value="quilo">Unidade</option>
                    <option value="litro">Kilo</option>                   
</select>
</div>
<!-- Preço de Custo -->
<div class="form-group">
<label for="precoCusto">Preço de Custo:</label>
<input type="text" class="form-control" id="precoCusto" name="precoCusto">      
    </div>     
<!-- Preço de Venda -->       
<div class="form-group">
<label for="precoVenda">Preço de Venda:</label>             
<input type="text" class="form-control" id="precoVenda" name="precoVenda">       
</div>
<!-- Margem Simples -->
            <div class="form-group">           
<label for="margemSimples">Margem Simples (%):</label>
<input type="text" class="form-control" id="margemSimples" name="margemSimples">
            </div>
            <!-- Saldo em Estoque -->        
<div class="form-group">
                <label for="saldoEstoque">Saldo em Estoque:</label>
                <input type="text" class="form-control" id="saldoEstoque" name="saldoEstoque">     
</div>
            <!-- Grupo -->
            <div class="form-group">
<label for="grupo">Grupo:</label>
<input type="text" class="form-control" id="grupo" name="grupo">
            </div>
            <!-- Subgrupo -->
            <div class="form-group">
                <label for="subgrupo">Subgrupo:</label>
                <input type="text" class="form-control" id="subgrupo" name="subgrupo">
            </div>
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