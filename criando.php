<?php

if(isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['usuario']) && !empty($_POST['usuario']) && isset($_POST['senha']) && !empty($_POST['senha']) && isset($_POST['senha2']) && !empty($_POST['senha2']) && isset($_POST['email']) && !empty($_POST['email']) ){

    require 'conexao.php';
    require 'Usuario.php';

    $u = new Usuario();

    $nome = addslashes($_POST['nome']);
    $usuario = addslashes($_POST['usuario']);
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    $senha2 = addslashes($_POST['senha2']);
    $nivel = addslashes($_POST['nivel']);

    if($u->verificarSenha($senha, $senha2) == true){
        $u->cadastrarUsuario($nome, $usuario, $email, $senha, $nivel);
        echo "<script type='text/javascript'>alert('Usuário criado com sucesso.');window.location.href='index.php';</script>";
    }
    else{
        echo "<script type='text/javascript'>alert('As senhas não conferem. Favor verificar e tentar novamente.');window.location.href='criar_usuario.php';</script>";
    }
}
else{
    echo "<script type='text/javascript'>alert('Os dados não foram preenchidos.');window.location.href = 'criar_usuario.php';</script>";
}








?>