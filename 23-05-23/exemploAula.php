<?php 
    $array = [
        'Química' => [ 
            'Zeca' => [
                'Nota 1' => 10,
                'Nota 2' => 9

            ],
            'João' => [
                'Nota 1' => 7,
                'Nota 2' => 9

            ]

        ],
        'Português' => [
            'Pedro' => [
                'Nota 1' => 7,
                'Nota 2' => 9
            ]

        ]


    ];
    echo "<pre>";

    print_r($array);


    echo "</pre>";


    foreach ($array as $materias => $materia){
        echo "<strong>$materias</strong><br>";

        foreach ($materia as $alunos => $aluno) {
            echo "$alunos<br>";

            foreach($aluno as $notas => $nota) {
                echo "$notas: $nota<br>";
                
            }
            echo "<br>";
        }


    };





?>