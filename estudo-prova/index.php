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

    // $curso = "Informática";
    // $turma = "2AII";
    // $disciplina = "PSW";

    // echo "Curso: $curso <br>";
    // echo "Turma: $turma <br>";
    // echo "Disciplina $disciplina <br>";

    $var = null;

    if(is_null($var)) {

        
        echo "Variável \$var é nula/vazia!<br>";
        }

        $var = "Bill GAtes";

        if(is_string($var)) {
        echo "Variável \$var é uma string!<br>";
        }

        $var = 12;

        if(is_integer($var)) {
        echo "Variável \$var é um inteiro!<br>";
        }

        $var = false;
        if(is_bool($var)) {
        echo "Variável \$var é booleana!<br>";
        }


        $va = array( "Maria" => 16,
                   "João" => 20,
                   "Pedro" => 32
        );
        
        foreach ($va as $pessoas => $idade) {
            echo "$pessoas tem $idade anos<br>";

        }


        $vari = array( "Maria" => array(
            "CPF" => "000.000.000-01",
            "Endereço" => "Rua01"),

                   "João" => array(
                        "CPF" => "000.000.000-02",
                        "Endereço" => "Rua02"
                ),
                   "Pedro" => array(
                        "CPF" => "000.000.000-03",
                        "Endereço" => "Rua03"
                   )
        );

        foreach ($vari as $pessoas => $dados) {
            echo "$pessoas <br>";
            foreach ($dados as $dados2 => $inf) {
                echo "$dados2 $inf <br>";
            }
            echo "<hr> <br>";
        }
        
        





    ?>
</body>

</html>