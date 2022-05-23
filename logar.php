<?php

if(isset($_POST['nomeUsuario']) && !empty($_POST['nomeUsuario']) && isset($_POST['senhaUsuario']) && !empty($_POST['senhaUsuario'])){

    require 'conexao.php';
    require 'Usuario.php';

    $usuario = new Usuario();
    
    $nomeUsuario = addslashes($_POST['nomeUsuario']);
    $senhaUsuario = addslashes($_POST['senhaUsuario']);

    if($usuario->login($nomeUsuario, $senhaUsuario) == true){
        if(isset($_SESSION['idUsuario']) && !empty($_SESSION['idUsuario'])){
            header("location: index.php");
        }
    }else{
        echo "<script type='text/javascript'>alert('Login e/ou senha incorretos.');window.location.href='login.php';</script>";
    }
} 
else {
    echo "<script type='text/javascript'>alert('Você deve preencher os campos de usuário e senha.');window.location.href='login.php';</script>";
}

?>