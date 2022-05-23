<?php

class Cupom{

    public function consultarCupom($numeroCupom, $numeroPdv, $dataVenda, $situacaoCapa){

        
        global $pdo;

        $sql = "SELECT numero_cupom, numero_pdv, data_venda, situacao_capa FROM capa_cupom WHERE numero_cupom = :numeroCupom AND numero_pdv = :numeroPdv AND data_venda = :dataVenda AND situacao_capa = :situacaoCapa;";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(':numeroCupom', $numeroCupom);
        $sql->bindValue(':numeroPdv', $numeroPdv);
        $sql->bindValue(':dataVenda', $dataVenda);
        $sql->bindValue(':situacaoCapa', $situacaoCapa);
        $sql->execute();
        $result = $sql->fetchAll();
        
        if($sql->rowCount() > 0){
            return true;
        }
        else{
            return false;
        }

    }
}
























?>