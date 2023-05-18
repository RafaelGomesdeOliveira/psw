<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            *{
                margin: 0px;
            }
            
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
                            "Nota 1:" => 4,
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

        $valorDivisao = 0;

        $impresso = false;
        $impressao = false;
        $media = 0;
        $cont = 0;
        $tiraDis= 0;
        
        echo "<h1>Imprimindo apenas os alunos com Média acima de 5</h1><hr>";
        foreach ($ifBaiano as $cursos => $alunos) {
            echo "<h1><br>$cursos</h1><br>";
            foreach ($alunos as $aluno => $disciplinas){

                foreach ($disciplinas as $disciplina => $notas){
                    foreach ($notas as $nota => $fim){
                        $media += $fim;
                        $cont ++;   
                        }
                        $media = $media /$cont;
                        if ($media > 5) {
                            if (!$impresso) {
                                echo "<h3><hr><br>$aluno</h3><br>";
                                $impresso = true;
                                
                            }

                        
                            echo "<h4>$disciplina</h4>";

                            foreach ($notas as $nota => $fim){
                                echo "$nota $fim<br>";

                            }
                        
                            echo "O valor da média é de: <strong>$media</strong><br><br>";

                        }
                        $media = 0;
                        $cont = 0;  

                    }
                    $tiraDis = 0;
                    $impresso = false;

                }


        };



        // if ($fim > 5){
        //     $media += $fim;
        //     echo "<br><strong>$media</strong><br>";
        //     if (!$impresso) {
        //     echo "<strong><br><hr><br>$aluno</strong><br>";
        //     $impresso = true;
            
        //     }
        //     if (!$impressao) {
        //     echo "<mark>$disciplina</mark><br>";
        //     $impressao = true;
        //     }
        //     echo "$nota $fim<br>";
        //     $valorDivisao += 1;
        //     }

        //     if ($media != 0){
        //         echo "<strong>Media:</strong>" . ($media/2). "<br>";
        //         }
        //         $media = 0;

        //         $impressao = false;
    ?>