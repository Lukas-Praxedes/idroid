
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
            /*background-image: url('./produto.jpg');*/
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
    <div>
        <div class="container mt-5">
            <h2 class="mb-2">Menu Produtos</h2>
            <p></p>
            <p></p>
            <div class="row">
                <div class="col-md-3">
                    <button type="button" id="cad-prod-painel" class="btn btn-outline-primary rounded-pill btn-block">Painel principal</button>
                </div>
                <div class="col-md-3">
                    <button type="button" id="cad-prod-new" class="btn btn-outline-primary rounded-pill btn-block">Novo cadastro</button>
                </div>
                <div class="col-md-3">
                    <button type="button" id="cad-prod-find" class="btn btn-outline-primary rounded-pill btn-block">Pesquisar</button>
                </div>
                <div class="col-md-3">
                    <button type="button" id="cad-prod-list" class="btn btn-outline-primary rounded-pill btn-block">Listar todos</button>
                </div>
            </div>
            <p></p>
            <p></p>
            <form>
                <div class="container mt-3">
                    <div>
                        <p>Tabela Produtos</p>
                        <p></p>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Código Barras</th>
                                <th>Custo</th>
                                <th>Venda</th>
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
                </div>
            </form>
        </div>
    </div>
</body>
<script src="./produto.js?<?=$token?>"></script>
</html>