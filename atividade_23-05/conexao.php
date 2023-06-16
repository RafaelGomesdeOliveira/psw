<?php 
    $host = "localhost";
    $user = "root";
    $password = "";
    $nomeBanco = "Escola";

    //outro metodo

    if($mysql = mysqli_connect($host, $user, $password, $nomeBanco)){
        echo "conectado com sucesso";
    }
    else {
        echo "Erro gerado";
    }

    //metodo pdo


?>