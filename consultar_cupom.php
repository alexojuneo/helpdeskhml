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
        }

    </style>

</head>
<body>

    
    <div class="container">
    <h1 style="margin-right: 50px;">Consulta avançada de <br>Cupom Fiscal:</h1>
        <div class="card-principal">

        <form action="consultar_cupom.php" method="POST">
                <div class="box-cupom">
                    <h2>Digite os dados do cupom nos campos abaixo: </h2>

                    <div class="inputs">
                        <label for="">Número do cupom: </label>
                        <input type="number" name="numeroCupom">
                        <label for="">Data da venda: </label>
                        <input type="date" name="dataVenda">
                    </div>
                    <div class="inputs">
                        <label for="">PDV: </label>
                        <input type="number" name="numeroPdv">
                        <!--<label for="" style="margin-right: 10px;">Selecione a loja: </label>-->
                        <select name="loja" style="display: none;">Selecione a loja:
                            <option value="loja1" name="loja">Loja 1</option>
                            <option value="loja2" name="loja">Loja 2</option>
                            <option value="loja3" name="loja">Loja 3</option>
                            <option valuergws="loja4" name="loja">Loja 4</option>
                            <option value="loja5" name="loja">Loja 5</option>
                        </select>
                    </div>
                    <div class="inputs">
                        <label for="">Situação capa: </label>
                        <input type="number" name="situacaoCapa">
                    </div>
                    <div class="inputs">
                        <input type="reset" value="Limpar campos">
                        <input type="submit" value="Pesquisar cupom">
                        <a href="index.php">Voltar ao menu</a>
                    </div>

                </div>

            </form> 

        </div>
    </div>
    <div>
        <?php  
            
            if(isset($_POST['numeroCupom']) && !empty($_POST['numeroCupom']) && isset($_POST['numeroPdv']) && !empty($_POST['numeroPdv']) && isset($_POST['dataVenda']) && !empty($_POST['dataVenda']) && isset($_POST['situacaoCapa']) && !empty($_POST['situacaoCapa'])):

            $numeroCupom = addslashes($_POST['numeroCupom']);
            $numeroPdv = addslashes($_POST['numeroPdv']);
            $dataVenda = addslashes($_POST['dataVenda']);
            $situacaoCapa = addslashes($_POST['situacaoCapa']);    
        
            global $pdo;
        
            $sql = "SELECT numero_cupom, numero_pdv, data_venda, situacao_capa FROM capa_cupom WHERE numero_cupom = :numeroCupom AND numero_pdv = :numeroPdv AND data_venda = :dataVenda AND situacao_capa = :situacaoCapa;";
            $sql = $pdo->prepare($sql);
            $sql->bindValue(':numeroCupom', $numeroCupom);
            $sql->bindValue(':numeroPdv', $numeroPdv);
            $sql->bindValue(':dataVenda', $dataVenda);
            $sql->bindValue(':situacaoCapa', $situacaoCapa);
            $sql->execute();
            $result = $sql->fetchAll();
            
        ?>
        <table class="table" id="table-cupom">
            <thead>
                <tr>
                    <th scope="col">Cupom</th>
                    <th scope="col">Pdv</th>
                    <th scope="col">Data Venda</th>
                    <th scope="col">Situação capa</th>
                    <th scope="col" style="display: none;">Total liquido</th>
                </tr>
            </thead>      
            <?php foreach($result as $row){ ?>
            <tbody>
                <tr>    
                    <td><?php echo $row["numero_cupom"]; ?></td>
                    <td><?php echo $row["numero_pdv"];?></td>
                    <td><?php echo $row["data_venda"];?></td>
                    <td><?php echo $row["situacao_capa"];?></td>
                </tr>
            </tbody>
            <?php } else: echo "<style type='text/css'>.table-cupom{display:none;}</style>"; endif; ?>
        </table>
        <?php

           
        ?>

        
    </div>
</body>
</html>




    