<?php

require 'verifica.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Consulta de cupom</title>

    <style type="text/css">

        body{
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #f1f1f1;
        }

        .container{
            width: 100vw;
            height: 100vh;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }

        .card-principal{
            width: 800px;
            height: 450px;
            background-color: white;
            box-shadow: -2px -1px 23px 5px rgba(227,225,225,0.75);
            border-radius: 10px;
        }

        .box-cupom{
            padding: 30px 20px;
        }

        .inputs {
            margin-top: 30px;
            display: flex;
        }

        .inputs input{
            margin-left: 8px;
            margin-right: 30px;
            width: 144px;
        }

    </style>

</head>
<body>

    
    <div class="container">
    <h1 style="margin-right: 50px;">Cadastro de Usuário:</h1>
        <div class="card-principal">

        <form action="criando.php" method="POST">
                <div class="box-cupom">
                    <h2>Digite os dados do usuário nos campos abaixo: </h2>

                    <div class="inputs">
                        <label for="">Nome completo: </label>
                        <input type="text" placeholder="Digite seu nome" name="nome">
                        <label for="">Usuário: </label>
                        <input type="text" placeholder="Digite seu usuário" name="usuario">
                    </div>
                    <div class="inputs">
                        <label for="">E-mail: </label>
                        <input type="email" placeholder="Digite seu e-mail" name="email">
                        <label for="">Senha: </label>
                        <input type="password" placeholder="Digite sua senha" name="senha">
                    </div>
                    <div class="inputs">
                        <label for="">Confirme sua senha: </label>
                        <input type="password" placeholder="Digite sua senha" name="senha2">
                        <label for="">Nivel de acesso: </label>
                        <input type="number" min='0' max='1' placeholder="Nivel de acesso" name="nivel">
                    </div>
                    <div class="inputs">
                        <input type="reset" value="Limpar campos">
                        <input type="submit" value="Cadastrar">
                        <a href="index.php">Voltar ao menu</a>
                    </div>

                </div>

            </form> 

        </div>
    </div>
    
</body>
</html>

<!--


<form action="#" method="POST">
                <div class="seila">
                    <label for="">Número do cupom: </label>
                    <input type="number" min="0" name="cupom">

                    <label for="">Número do pdv: </label>
                    <input type="number" min="0" name="num_pdv">

                    <label for="">Data da venda: </label>
                    <input type="date" name="dt_venda">

                    <label for="">Situação capa: </label>
                    <input type="number" min="0" name="sit_capa">

                    <input type="submit" value="Consultar">
                </div>
            </form> 


    -->












?>