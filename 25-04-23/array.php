<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>


<body>


    <?php
    // Array: Definição Explícita (sem chave)
    $var = array(1, 2, 3, 4);

    echo "[for]: ";
    for ($a = 0; $a < count($var); $a++) {
        echo "$var[$a] ";
    }

    echo "<br>[foreach]: ";
    foreach ($var as $dado) {
        echo "$dado";
    }


    echo "<hr>";

    $vari = array(
        "Maria" => 32,
        "Rafael" => 17
    );

    foreach ($vari as $pessoa => $idade) {
        echo "$pessoa: $idade <br>";

    }

    print_r($vari);

    echo "<hr>";

    $vari = array(
        32 => "Maria",
        17 => "Maria"
    );

    foreach ($vari as $idade => $pessoa) {
        echo "$idade: $pessoa <br>";

    }

    echo "<hr>";

    $vari = array(
        "Maria" => array(
            "Endereço" => "Rua do amanhã",
            "Bairro" => "Bairro de cima"
        ),

        "Rafael" => array(
            "Endreço" => "Avenida alcidez",
            "Bairro" => "Canabrava"
        )
    );

    foreach ($vari as $pessoas => &$endereco) {
        echo "$pessoas: <br>";
        foreach ($endereco as $impre => $info) {
            echo "$impre: $info <br>";
        }
        echo "<br>";

    }

    echo "<hr>";

    print_r($vari);

    echo "<hr>";

    $variavel = [
        'Alunos' => [
            'Aluno-0' => [
                'nome' => 'Rafael',
                'id' => '1'
            ],
            'Aluno-1' => [
                'nome' => 'Abnes',
                'id' => '1'
            ]
        ]

    ];

    foreach ($variavel as $alunos => &$alunoNumerado) {
        echo "$alunos". "<br>";
        foreach ($alunoNumerado as $copiaAluno => $info) {
            echo "$copiaAluno:<br>";
            foreach ($info as $copiaInfo => $outrainfo) {
                echo "$copiaInfo: $outrainfo";
                echo "<br>";
            }
        }
        echo "<br>";

    }


    echo "<hr>";

    print_r($variavel);

    echo "<hr>";


    $variavel = array(
        'Alunos' => array(
            array (
                'nome' => 'Rafael',
                'id' => '0'
            ),
            array (
                'nome' => 'Abnes',
                'id' => '1'
            )
        )

    );

    foreach ($variavel as $alunos => &$numero) {
        echo "$alunos". "<br>";
        foreach ($numero as $impre => $info) {
            echo "$impre:<br>";
            foreach ($info as $info2 => $outrainfo) {
                echo "$info2: $outrainfo";
                echo "<br>";
            }
        }
        echo "<br>";

    }


   // Testar por uma variavel dentro do array no lugar do endereco
    


    ?>

</body>



</html>