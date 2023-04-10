<?php
function rotas($url)
{   


    $dados = explode("/", $url);
    
    // CADASTRAR
    if (strcmp($dados[0], "cadastar") == 0) {
        echo "<script> alert('CADASTRAR') </script>";
    }
    // ALTERAR
    else if (strcmp($dados[0], "alterar") == 0) {
        echo "<script> alert('ALTERAR') </script>";
    }
    // REMOVER
    else if (strcmp($dados[0], "remover") == 0) {
        echo "<script> alert('REMOVER') </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>