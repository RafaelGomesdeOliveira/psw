<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        mark {
            background-color: pink;

        }

    </style>

</head>
<body>
    
</body>
</html>


<?php 

    $ifBaiano = array (
        "Informática" => [
            "Rafael Gomes de Oliveira" => [
                "BD" => [
                    "Nota 1:" => 10,
                    "Nota 2:" => 10
                ],
                "PSW" => [
                    "Nota 1:" => 10,
                    "Nota 2:" => 10
                ] 

            ],
            "Sávio Pessôa Afonso" => [
                "Matemática" => [
                    "Nota 1:" => 5,
                    "Nota 2:" => 5
                ],
                "Biologia" => [
                    "Nota 1:" => 5,
                    "Nota 2:" => 5
                ] 

            ],
            "Tiago" => [
                "ASW" => [
                    "Nota 1:" => 3,
                    "Nota 2:" => 3
                ],
                "Produção textual" => [
                    "Nota 1:" => 3,
                    "Nota 2:" => 3
                ] 

            ],
            "Maria" => [
                "Português" => [
                    "Nota 1:" => 6,
                    "Nota 2:" => 6
                ],
                "Geografia" => [
                    "Nota 1:" => 6,
                    "Nota 2:" => 6
                ] 

            ]

        ],
        "Agropecuaria" => [
            "Renan" => [
                "Topografia" => [
                    "Nota 1:" => 7,
                    "Nota 2:" => 7

                ],
                "Matemática" => [
                    "Nota 1:" => 7,
                    "Nota 2:" => 7

                ]
            ],
            "Felipe" => [
                "Português" => [
                    "Nota 1:" => 8,
                    "Nota 2:" => 8
                ],
                "Geografia" => [
                    "Nota 1:" => 8,
                    "Nota 2:" => 8
                ]
            ],
            "Micael" => [
                "ASW" => [
                    "Nota 1:" => 4,
                    "Nota 2:" => 4
                ],
                "Produção textual" => [
                    "Nota 1:" => 4,
                    "Nota 2:" => 4
                ] 

            ],
            "João" => [
                "Física" => [
                    "Nota 1:" => 2,
                    "Nota 2:" => 2
                ],
                "Sociologia" => [
                    "Nota 1:" => 2,
                    "Nota 2:" => 1
                ] 

            ]

            ],
            "Agroindustria" => [
                "Tiago" => [
                    "Topografia" => [
                        "Nota 1:" => 7,
                        "Nota 2:" => 7
    
                    ],
                    "Matemática" => [
                        "Nota 1:" => 7,
                        "Nota 2:" => 7
    
                    ]
                ],
                "Pedro" => [
                    "Português" => [
                        "Nota 1:" => 8,
                        "Nota 2:" => 8
                    ],
                    "Geografia" => [
                        "Nota 1:" => 8,
                        "Nota 2:" => 8
                    ]
                ],
                "Zé" => [
                    "ASW" => [
                        "Nota 1:" => 4,
                        "Nota 2:" => 4
                    ],
                    "Produção textual" => [
                        "Nota 1:" => 4,
                        "Nota 2:" => 4
                    ] 
    
                ],
                "Abnes" => [
                    "Física" => [
                        "Nota 1:" => 2,
                        "Nota 2:" => 2
                    ],
                    "Sociologia" => [
                        "Nota 1:" => 2,
                        "Nota 2:" => 1
                    ] 
    
                ]   

            ]
    );

    foreach ($ifBaiano as $cursos => $alunos) {
        echo "<mark>$cursos</mark> <br>";
        foreach ($alunos as $aluno => $disciplinas){
            echo "<br><strong>$aluno</strong> <br>";
            foreach ($disciplinas as $disciplina => $notas){
                echo "<strong>$disciplina</strong><br>";
                foreach ($notas as $nota => $fim){
                    echo "$nota <strong>$fim</strong><br>";
                }
                echo "<br>";
            }
            echo "<hr>";

        }
        echo "<hr>";

    };

    echo "<h2>Somente Cursos</h2>";
    
    foreach ($ifBaiano as $cursos => $alunos) {
        echo "<mark>$cursos</mark><br><br>";
        
    };

    echo "<h2>Somente Alunos</h2>";

    foreach ($ifBaiano as $cursos => $alunos) {
        foreach ($alunos as $aluno => $disciplinas){
            echo "$aluno<br>";

        }
        echo "<br>";
    };

    echo "<h2>Curso e aluno</h2>";
    foreach ($ifBaiano as $cursos => $alunos) {
        echo "<mark>$cursos</mark><br>";
        foreach ($alunos as $aluno => $disciplinas){
            echo "$aluno<br>";

        }
        echo "<br>";
    };


    foreach ($ifBaiano as $cursos => $alunos) {
        echo "<mark>$cursos</mark><br>";
        foreach ($alunos as $aluno => $disciplinas){
            echo "$aluno<br>";

        }
        echo "<br>";
    };







?>