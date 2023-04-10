<?php

function ler() {
    $dados = array();
    $fp = fopen('alunos.txt', 'r');
    if ($fp) {
    while(!feof($fp)) {
    $cpf = fgets($fp);
    $linha = fgets($fp);
    if(!empty($linha)) {
    $dados = explode("#", $linha);
    print_r($dados);
    echo "<br>";
    } }
    fclose($fp);
    }
    }




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);
include_once('lerArquivo.php');
ler();



?>
    
</body>
</html>