<?php

    //Onde é feita a conexão com o banco de dados
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'contratante';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    /*
    if($conexao->connect_errno) {
        echo "Erro";
    } else {
        echo "conexão efetuada com sucesso";
    }
    */
?>