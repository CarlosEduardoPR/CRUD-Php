<?php

//Conexao com mySql
    $host = "localhost";
    $user = "apesp";
    $pass = "4P35P@gov";
    $db = "cadastro";

    $connection = mysqli_connect($host, $user, $pass, $db);


    /*Testar conexão
    if(!$connection){
        echo 'Sem conexão';
    }
        else{
            echo 'Conexão OK';
        }
        */
?>