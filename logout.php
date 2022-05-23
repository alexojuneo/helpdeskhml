<?php
require 'conexao.php';
unset($_SESSION['idUsuario']);
header("Location: login.php");
?>