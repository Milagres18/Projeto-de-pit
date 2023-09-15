<?php

    //incluido a conexao com o banco de dados
    include_once('config.php');
    session_start();
    ob_start();
    //print_r($_SESSION);

    
    //validando se o usuario está mesmo logado
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    } else {
        unset($_SESSION['msg']);
    }
    

?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Estilo Custumizado -->
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

    <script src="https://kit.fontawesome.com/dc52388d5e.js" crossorigin="anonymous"></script>


    <title>FreeTeenager</title>
  </head>
  <body>
    
    <header><!-- Inicio cabeçalho -->
      <nav class="navbar navbar-expand-sm navbar-light bg_warning">
        <div class="container">

          <a href="" class="navbar-brand">
            <img src="img/FT.png" width="102">
          </a>

          <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
            <span class="navbar-toggler-icon">
            </span>
          </button>

          <div class="collapse navbar-collapse" id="nav-principal">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a href="perfil.php" class="nav-link">Início</a>
              </li>
              
              <li class="nav-item">
                <a href="" class="nav-link">Encontrar Trabalho</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">Como Funciona?</a>
              </li>
              <li class="nav-item">
                <a href="login.php" class="btn btn-outline-danger ml-4">Sair</a>
              </li>
            </ul>
          </div>
          
        </div>
      </nav>
    </header><!-- Fim cabeçalho -->

    <main>
        
        <div class="profile">
            <div class="cover-photo"></div>
            <div class="profile-info">
                <div class="profile-picture">
                    <div class="profile-picture-bg"></div>
                    <img src="img/minhaFT.png.jpg" alt="Foto de Perfil">
                </div>
                <h1>Carlos Gabriel</h1>
                <p>Belo Horizonte, Brasil</p>
                <button id="friend-button">Convidar</button>
            </div>
        </div>
        <div class="posts">
            <h2>Sobre mim</h2>
            <div class="post">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
            <h2>Resumo de Carreira</h2>
            <div class="post">
                <p>Este usuario não tem carreira.</p>
            </div>
        </div>
        <script src="script.js"></script>

        

    </main>

    <footer class="mt-4 mb-4">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <p>
              <a href="perfil.php">Início</a>
              <a href="">Recursos</a>
              <a href="">Benefícios</a>
              <a href="">Preços</a>
            </p>
          </div>
          <div class="col-md-4 d-flex justify-content-end">
            <a href="https://www.linkedin.com/in/bernardo-milagres-055550239/" class="btn btn-outline-dark ml-2">
              <i class="fa-brands fa-linkedin fa-lg"></i>
            </a>

            <a href="https://github.com/Milagres18" class="btn btn-outline-dark ml-2">
              <i class="fa-brands fa-github fa-lg"></i>
            </a>
            
            
          </div>
        </div>
      </div>
    </footer>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>