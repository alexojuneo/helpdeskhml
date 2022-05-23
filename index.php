<?php
require 'verifica.php';

if(isset($_SESSION['idUsuario']) && !empty($_SESSION['idUsuario']) && $_SESSION['nivel'] == 1): ?>

<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HelpDesk</title>
    <link rel="shortcut icon" type="imagex/png" href="./img/icon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
    <style type="text/css">
      

      body{
        background-image: url('/images/bg.jpg');
        background-repeat: no-repeat;
        background-size: cover;
      }


    </style>


  </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Seja bem vindo, <?php echo $nomeUsuario; ?>! </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        
      </li>
      <li class="nav-item">
       
      </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Controle de Usuário

          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="criar_usuario.php">Criar</a>
            <a class="dropdown-item" href="#">Atualizar</a>
            <a class="dropdown-item" href="#">Deletar</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Controle de Chamados S&I</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Criar</a>
            <a class="dropdown-item" href="#">Atualizar</a>
            <a class="dropdown-item" href="#">Deletar</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Controle de Chamados S&I</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Criar</a>
            <a class="dropdown-item" href="#">Atualizar</a>
            <a class="dropdown-item" href="#">Deletar</a>
        </li>
      </ul>
   
    <label id="nomeUser" style="color: #fff; margin-right: 15px; margin-top: 10px"></label>
    <a href="logout.php"><button type="button" class="btn btn-primary btn-sm" style="width: 60px; margin-top: 2px;">Sair</button></a>

</nav>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    </body>
    </html>




<?php else: ?>

<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HelpDesk</title>
    <link rel="shortcut icon" type="imagex/png" href="./img/icon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
    <style type="text/css">
      
      body{
        background-image: url('/images/bg.jpg');
        background-repeat: no-repeat;
        background-size: cover;
      }

    </style>

  </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">BEM VINDO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        
      </li>
      <li class="nav-item">
       
      </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Cupom

          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="consultar_cupom.php">Consulta De Cupom</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Relatórios</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="http://siriusrelat/Reports/Pages/Report.aspx?ItemPath=%2fProducao%2fSIR%27IUS%2fHelp-Desk%2f1382_Relatorio_Cupons_Sintetico" target="_blank">Verificar vendas</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Abertura de Chamados</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="https://servicos.rumotecnologia.com.br/AreaCliente/siautomacao/login.php" target="_blank">S&I</a>
            <a class="dropdown-item" href="https://atendimento.simpress.com.br/" target="_blank">Simpress</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Controle de Chamados</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/11l2LxP1bP5DAtBSugvMHJHDbFQL01uAOEoMZxJoaFgg/edit#gid=320695901" target="_blank">S&I</a>
            <a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1df4owwADRfDNcfwy40CPgUKhLn_4IUJw32_Q2MEdK54/edit#gid=0" target="_blank">Simpress</a>
        </li>
      </ul>
   
    <label id="nomeUser" style="color: #fff; margin-right: 15px; margin-top: 10px"><?php echo $nomeUsuario; ?></label>
    <a href="logout.php"><button type="button" class="btn btn-primary btn-sm" style="width: 60px; margin-top: 2px;">Sair</button></a>

</nav>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    </body>
    </html>



<?php endif; ?>