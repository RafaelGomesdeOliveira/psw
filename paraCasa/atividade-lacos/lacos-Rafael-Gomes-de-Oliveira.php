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







?>