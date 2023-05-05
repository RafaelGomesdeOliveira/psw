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
        $matriz = array (
            'gato',
            'cachorro'
        );

        $listaOrdenada = array (
            'Aluno' => 'Rafael Gomes de Oliveira',
            'Endereço' => 'Rua Alcidez',
            'Idade' => 17,
            'Data' => null
        );


        echo "<pre>";
        print_r($matriz);

        echo "<hr>";
        print_r(sort($listaOrdenada));
        echo "<hr>";
        echo "<br>";
        print_r($listaOrdenada);
        echo "<br>";
        //Conta a quantidade de atributos que tem na lita (nome, endereco, idade = 3)
        print_r(count($listaOrdenada));
        echo "<br>";
        //Mostra em que posição está o valor 'Aluno'
        print_r(array_keys($listaOrdenada));
        echo "<br>";
        print_r(array_values($listaOrdenada));
        echo "<hr>";
        print_r(in_array(17 , $listaOrdenada));

        echo "<hr>";
        //Fala em que categoria está ex: Rua Alcides se encontra no endereço
        var_dump(array_search('Rua Alcidez', $listaOrdenada));
        echo "<br>";
        //Pergunta se tem alguma valor atribuido na posição Data
        var_dump(isset($listaOrdenada['Data']));

        echo "<br>";
        //Verifica se a chave 'Aluno' existe
        var_dump(array_key_exists('Aluno', $listaOrdenada));

        echo implode(',', $listaOrdenada);

        echo "<br>";

        //Quando chegar na letra A, ele coloca em outro array
        print_r(explode('a', 'Rafael Gomes de Oliveira'));
        echo "</pre>";
    

        //Sort vai  organizar me ordem alfabetica
    
    ?>



</body>
</html>