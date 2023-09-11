<?php

    //incluido a conexao com o banco de dados
    include_once('config.php');
    session_start();
    ob_start();
    print_r($_SESSION);

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
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Perfil</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body>
        <h1>Bem vindo freelancer</h1>
        <div class="d-flex">
            <a href="login.php" class="btn btn-primary">Sair</a>
        </div>
    </body>
</html>