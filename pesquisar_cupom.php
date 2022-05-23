<?php

if(isset($_POST['numeroCupom']) && !empty($_POST['numeroCupom']) && isset($_POST['numeroPdv']) && !empty($_POST['numeroPdv']) && isset($_POST['dataVenda']) && !empty($_POST['dataVenda']) && isset($_POST['situacaoCapa']) && !empty($_POST['situacaoCapa'])){

    require 'conexao.php';

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
    
}
else{
    echo "<script type='text/javascript'>alert('Você não preencheu os dados do cupom.');window.location.href='consultar_cupom.php';</script>";
}
?>