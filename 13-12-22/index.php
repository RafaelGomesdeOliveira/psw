<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>13-12</title>
</head>
<body>
<?php

    // $vetor = [30];

    // static $i = 0;
    // $c = 0;
    // for ($a=0 ;$a<30 ;$a++) {
    //     $vetor[$a] = $i++;
    // }

    // echo "<br>", "<hr>";

    // echo "Por foreach", "<br>";

    // foreach ($vetor as $chave => $info) {
    //     echo "$chave: $info", "<br>";

    // }
    // echo "<br>", "<hr>";

    // echo "Por for", "<br>";
    // $i = 0;

    // for ($a=0 ;$a<30 ;$a++) {
    //     $vetor[$a] = $a*8;
    // }

    // for($a=0 ; $a<30; $a++){
    //     echo $vetor[$a], "<br>";

    // }

    // echo "<hr>","<br>","Exemplo 1", "<br>";

    // for ($a=0 ;$a<30 ;$a++) {
    //     $vetor[$a] = $a+7;
    // }   

    // for($a=0 ; $a<30; $a++){
    //     echo $vetor[$a], "<br>";

    // }

    // echo "<hr>","<br>", "Exemplo 2";
    
    // $c = 0;

    // for ($a=0 ;$a<30 ;$a++) {
    //     $vetor[$a] = $a+$c++;
    // }  

    // for($a=0 ; $a<30; $a++){
    //     echo "<br>", $vetor[$a];

    // }

    // echo "<hr>";
        
    // $vetorNome = [30];
    // $vetorIdadde = [30];

    // $i = 0;
    // $ano = 2006;

    // for ($a=0; $a<30; $a++) {
    //     $vetorNome[$a] = "Rafael";
    //     $vetorIdadde[$a] = $i++;
    // }

    // for ($a=0; $a<30; $a++) {

    //     if ($vetorIdadde[$a]<16) {
    //         echo $vetorNome[$a]." teve isso de idade = ". $vetorIdadde[$a]. ",". " nesse ano = " . $ano++. "<br>". "<br>";
    //     }

    //     if ($vetorIdadde[$a] == 16) {
    //         echo $vetorNome[$a]." tem isso de idade = ". $vetorIdadde[$a]. ",". " nesse ano = " . $ano++. "<br>". "<br>";
    //     }

    //     if ($vetorIdadde[$a] > 16) {
    //         echo $vetorNome[$a]." terá isso de idade = ". $vetorIdadde[$a]. ",". " nesse ano = ". $ano++. "<br>". "<br>";
    //     }
    // }


    $hora = [23];
    $minuto = [59];
    $segundo = [59];

    for ($a=0; $a<24; $a++) {
        $hora[$a] = $a++;
    }

    for ($a=0; $a<60; $a++) {
        $minuto[$a] = $a;
        $segundo[$a] = $a;
    }
    $f = 1;
    $d = 0;
    $a = 0;

    for($a=0;$a<24;$a++) {

        for($b=0;$b<60;$b++) {

            for($c=0;$c<60;$c++){
                echo $hora[$a]. ":";
                echo $minuto[$b]. ":";
                echo $segundo[$c]. "<br>";
            }
        }
    }
















?>
</body>
</html>