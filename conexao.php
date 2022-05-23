<?php

// Inicia a sessão
session_start();

// Define as configurações de acesso ao servidor
$nomeServidor = '192.168.0.126';
$usuarioServidor = 'root';
$senhaServidor = '';
$bancoServidor = 'homologacao';

// Realiza a conexão com banco de dados com tratamento de erro
try {
    $pdo = new PDO("mysql:dbname=".$bancoServidor.";host=".$nomeServidor, $usuarioServidor, $senhaServidor);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "ERRO: ".$e->getMessage();
    exit;
}
?>