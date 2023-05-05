<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Rafael Gomes de Oliveira</title>

</head>
<body>
    <h1>arrays-Exercicios</h1>
    
<?php
    
    echo '<h2> Exercicios de arrays - Rafael Gomes de Oliveira</h2>';

    echo '<hr>';



    $aluno = array (
        'PSW1' => array (
            'Avaliação' => '45',
            'Teste' => '50' 
        ),
        'BD' => array (
            'Avaliação 1' => '27',
            'Tabalho' => '30',
            'Avaliação 2' => '21',
            'Atividades' => '10'
        ),
        'ASW' => array (
            'Participação' => '8',
            'Avaliação 1' => '26',
            'Avaliação 2' => '22',
            'Seminário' => '26'
        ),
        'Redes de Computadores' => array (
            'Prova 1' => '50',
            'Prova 2' => '50'
        ),
        'Projeto Integrador' => array (
            'Prova 1' => '45',
            'Prova 2' => '35'

        )
    );


    $aluno = array (

        
        'PSW1' => array (
            'Avaliação' => '45',
            'Teste' => '50' 
        ),
        'BD' => array (
            'Avaliação 1' => '27',
            'Tabalho' => '30',
            'Avaliação 2' => '21',
            'Atividades' => '10'
        ),
        'ASW' => array (
            'Participação' => '8',
            'Avaliação 1' => '26',
            'Avaliação 2' => '22',
            'Seminário' => '26'
        ),
        'Redes de Computadores' => array (
            'Prova 1' => '50',
            'Prova 2' => '50'
        ),
        'Projeto Integrador' => array (
            'Prova 1' => '45',
            'Prova 2' => '35'

        )
    );



    foreach ($aluno as $materia => $notas) {
        echo "<strong>$materia</strong>" . "<br>";
        foreach ($notas as $materias => $notas){
            echo "$materias: $notas" . "<br>";
        }
        echo "<br>";

    }



?>



</body>
</html>
