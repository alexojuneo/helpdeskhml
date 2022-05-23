<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HELPDESK</title>
</head>
<body>
    


<?php


try{
    $pdo = new PDO("mysql:host=192.168.0.126;dbname=producao", "root",""); 
    //echo "Conexão com banco de dados realizada com sucesso.";
}
catch (PDOException $e) {
    echo "Erro: Conexão com banco de dados não foi realizada com sucesso. Erro gerado " . $e->getMessage();
}

?>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Loja</th>
            <th scope="col">Cupom</th>
            <th scope="col">Data Venda</th>
            <th scope="col">Situação capa</th>
        </tr>
    </thead>
    <?php 

    $numrerocupom = //colocar aqui o valor que o usuario digitou na tela
    $sql = "SELECT * FROM capa_cupom where 1=1";
    //if $numerocupom >0 then
    " and numero_cupom = " . $numerocupom; 
    //if $numeropdv > 0 then
    " and numero_pdv = " . $numeropdv;
    $result = $pdo->query($sql);  
    while($cupom = $result->fetch(PDO::FETCH_ASSOC)):
    

    
    
    ?>
    <tbody>
        <tr>    
            <td><?php echo $cupom["numero_loja"]; ?></td>
            <td><?php echo $cupom["numero_cupom"];?></td>
            <td><?php echo $cupom["data_venda"];?></td>
            <td><?php echo $cupom["situacao_capa"];?></td>
        </tr>
    </tbody>
    <?php

    endwhile;

    ?>
</table>

<a href="index.php">SAIR</a>


</body>
</html>