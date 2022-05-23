<?php

require 'conexao.php';

if(isset($_SESSION['idUsuario']) && !empty($_SESSION['idUsuario'])){

    require_once 'Usuario.php';
    $usuario = new Usuario();

    $listLogged = $usuario->logged($_SESSION['idUsuario']);
    $nomeUsuario = $listLogged['nome'];

} else {
    header("Location: login.php");
}


?>