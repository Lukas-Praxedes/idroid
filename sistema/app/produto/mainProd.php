
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
            background: linear-gradient(to bottom, #000000, #808080);

            -webkit-background-clip: text;
            color: transparent;
            display: inline-block;
        }
        h3 {
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
                <!-- <a class="navbar-brand" href="#"><h3>Idroid</h3></a>*/-->
                <a class="navbar-brand" href="#">
                <img src="C:\\xampp\\htdocs\\idroid\\sistema\\framework\\images\\logo.png" alt="Logo" class="rounded-circle" width="50" height="50">
                </a>
                <!---->
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
        <h2 class="mb-2">Menu Produtos</h2>
        <p></p> 
        <p></p> 
        <form>
            <!-- Descrição do Item -->
       
            <div class="row">
    <div class="col-md-3">
        <button type="button" class="btn btn-outline-primary rounded-pill btn-block">Painel principal</button>
    </div>
    <div class="col-md-3">
        <button type="button" class="btn btn-outline-primary rounded-pill btn-block">Novo cadastro</button>
    </div>
    <div class="col-md-3">
        <button type="button" class="btn btn-outline-primary rounded-pill btn-block">Pesquisar</button>
    </div>
    <div class="col-md-3">
        <button type="button" class="btn btn-outline-primary rounded-pill btn-block">Listar todos</button>
    </div>
</div>
<div class="container mt-3">
	  <p>Tabela Produtos</p>
	  <p></p>            
	  <table class="table">
	    <thead>
	      <tr>
	        <th>Descrição</th>
	        <th>Codigo de barras</th>
	        <th>Valor de custo</th>
            <th>Valor de venda</th>
	      </tr>
	    </thead>
	    <tbody>
	      <tr>
	        <td>Coca cola</td>
	        <td>7894900019254</td>
	        <td>4,29</td>
            <td>8,99</td>
	      </tr>
	      <tr>
	        <td>Arroz</td>
	        <td>7896276060021</td>
	        <td>15,99</td>
            <td>23,99</td>
	      </tr>
	      <tr>
            <td>CERVEJA BRAHMA</td>
	        <td>7891149102488</td>
	        <td>2,54</td>
            <td>3,99</td>
	      </tr>
	    </tbody>
	  </table>
	</div>


    </body>
</html>