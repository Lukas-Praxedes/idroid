<?php

    error_reporting(0);
    ini_set('display_errors', 0);
    date_default_timezone_set('America/Sao_Paulo');

    $token = date('YmdHis');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dancing+Script">
    <title>Idroid - ERP</title>    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background-image: url('./sistema/framework/images/menu/Fundo.jpg');
            background-color: #f8f9fa;
        }
        .login-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-top: 100px;
        }

        .login-header {
            text-align: center;
        }

        .login-icon {
            float: right;            
            margin-top: -10px;
        }
        h3 {
            font-family: 'Dancing Script', cursive; /* Substitua "Arial" pelo nome da fonte desejada */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="login-container">
                    <input type="hidden" id="chuck" value="<?=$privatedKey2?>">
                    <div class="login-header">
                        <h2>Login</h2>
                        <h3>Idroid</h3>
                    </div>
                    <form id="formLogin" method="POST" action="#">
                        <div class="form-group">
                            <label for="codigo">Código:</label>
                            <input type="text" class="form-control" name="codigo" id="codigo" value="" maxlength="7" autocomplete="off" placeholder="Insira seu código" required>
                        </div>
                        <div class="form-group">
                            <label for="senha">Senha:</label>

                            <input type="password" class="form-control" name="senha" id="senha" value="" maxlength="100" autocomplete="off" placeholder="Insira sua senha" required>
                        </div>
                        <button type="submit" id="btn-login" class="btn btn-primary btn-block">Entrar</button>
                    </form>
                    <div id="erro"></div>
                    <p class="mt-3 text-center">
                        <a href="#">Esqueceu a senha?</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/crypto-js.js"></script>
<script src="./login/js/login.js?<?=$token?>"></script>
</html>