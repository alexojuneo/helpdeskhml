<?php

class Usuario{
    
    public function login($nomeUsuario, $senhaUsuario){

        global $pdo;

        $sql = "SELECT * FROM homologacao.usuario WHERE usuario = :nomeUsuario AND senha = :senhaUsuario";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(':nomeUsuario', $nomeUsuario);
        $sql->bindValue(':senhaUsuario', $senhaUsuario);
        $sql->execute();
    
        if($sql->rowCount() > 0){
            $dado = $sql->fetch();
            $_SESSION['idUsuario'] = $dado['id'];
            $_SESSION['nivel'] = $dado['nivel'];
            return true;
        } else {    
            return false;
        }
    }

    public function logged($id){

        global $pdo;
        $array = array();

        $sql = "SELECT * FROM usuario WHERE id = :id";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("id",$id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $array = $sql->fetch();
        }
        return $array;
    }


    public function cadastrarUsuario($nome, $usuario, $email, $senha, $nivel){

        global $pdo;

        $sql = "INSERT INTO usuario VALUES (null, '$nome', '$usuario', '$email', '$senha', '$nivel');";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("nome",$nome);
        $sql->bindValue("usuario",$usuario);
        $sql->bindValue("email",$email);
        $sql->bindValue("senha",$senha);
        $sql->bindValue("nivel",$nivel);
        $sql->execute();  
    }

    public function verificarSenha($senha, $senha2){

        $senha = addslashes($_POST['senha']);
        $senha2 = addslashes($_POST['senha2']);

        if($senha === $senha2){
            return true;
        }
        else{
            return false;
        }

    }

    public function verificarNivelUsuario($id, $nivel){

        global $pdo; 

        $sql = "SELECT * FROM usuario WHERE id = :id";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("id", $id);
        $sql->execute();

        

    }

}

?>