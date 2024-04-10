<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'cadastro_kurumin_dev';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    if ($conexao->connect_errno)
    {
        echo "Erro.";
    }
    else
    {
        echo "Conexãp efetuada com sucesso.";
    }

?>