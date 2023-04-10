<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>25-10</title>

</head> 
<body>

<?php
    echo "<h1>Trabalhando com alguns comandos de PHP</h1><hr>";
    echo "hello word<br>";
    print "hello word<br>";
    $txt1 = "parabens";
    $txt2 = "W3Schools.com";

    $num1 = 4;
    $num2 = 2;
    $soma = $num1 + $num2;
    // Soma de variaveis
    echo "<h2>Soma de variáveis</h2>";
    print "Eu não gosto do $txt2!!!<br>";
    print "Eu queria te desejar <mark>$txt1!!!</mark><br>";
    echo "A soma das variaveis é de <mark>$soma!!!</mark><hr><br>";

    // Imprimindo na tela
    echo "<h2>Imprimindo na tela</h2>";
    echo "Hello world!!<br>";
    echo "I'm about to learn PHP<br>";
    echo "This ", "string ", "was ", "made ", "with mutiple paramenters.<br>";
        // Usando a concatenação
    print $num2 + $num1 ."<br>";
    print "Estudar PHP é até que bom " .$txt2 ."<hr>" ."<br>";    

    // Mutiplicação de variaveis
    echo "<h2>Mutiplicação de variáveis</h2>";
    $mult = $num1 * $num2;
    echo "A mutiplicalção entre 4 e 2 é de <mark>$mult!!</mark><br>";

    //Raiz quadrada de variaveis
    echo "<h2>Raiz quadra de variáveis</h2>";
    $raiz = sqrt($mult);
    echo "A raiz quadrada <mark>de $mult é de $raiz</mark><hr><br>";

    // Divisão de variaveis
    echo "<h2>Divisão de variáveis</h2>";
    $divi1 = $num1 / $num2;
    $divi2 = $num2 / $num1;
    echo "O valor da <mark>divisão de $num1 por $num2 é de $divi1!!</mark>, Já a <mark>divisão de $num2 por $num1 é de $divi2$</mark><hr><br>";

    //Função de variaveis
    echo "<h2>Função utilizando variaveis static</h2>";

    function text() {
        static $num3 = 0;
        $num3++;
        echo "<mark>$num3</mark>";

    }
    text();
    echo "<br>";
    text();
    echo "<br>";
    text(); 
    echo "<hr><br>";

    //Função Locais 
    echo "<h2>Função utilizando variaveis locais</h2>";

    function txt() {
        $num3 = 0;
        echo "<mark>$num3</mark>";
        $num3++; //Não aparece 1 porque eu estou imprimindo primeiro e depois somando

    }
    txt();
    echo "<br>";
    txt();
    echo "<br>";
    txt(); 
    echo "<hr><br>";

    // Tipos de variaveis

    echo "<h2>Tipos de variáveis</h2>";
    $vari = "Rafael Gomes";
    $tipo = gettype($vari);
    echo "$vari <mark>($tipo)</mark><br>";

    $vari = false;
    $tipo = gettype($vari);
    echo "$vari <mark>($tipo)</mark><br>";

    $vari = 2;
    $tipo = gettype($vari);
    echo "$vari <mark>($tipo)</mark><br>";

    $vari = 2.1313;
    $tipo = gettype($vari);
    echo "$vari <mark>($tipo)</mark><hr><br>";



    //Condições de PHP
    echo "<h2>Condições do PHP</h2>";

    if(is_null($vari)){
        echo "A variavel <mark>$vari</mark> é nula<br>";
    }

    else if(is_string($vari)) {
        echo "A variavel <mark>$vari</mark> é uma string<br>";
    }

    else if(is_integer($vari)) {
        echo "A variavel <mark>$vari</mark> é inteiro<br>";
    }
    
    else if(is_double($vari)){
        echo "A variavel <mark>$vari</mark> é double<br>";
    }

    $vari = false;

    if(is_bool($vari)) {
        echo "A variavel <mark>$vari</mark> é booleana<br>";
    }


    
?>

    
</body>
</html>