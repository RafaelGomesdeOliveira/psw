<?php 

echo '<h2> ordenacao de arrays multidimensional - Usort -  uasort(manter posições) </h2>';


$array = [
         [
         'id' => 1,
         'nome' => 'Zeca',
         'idade' => 42
         ],
         ['id' => 2,
          'nome' => 'Jao',
          'idade' => 32
         ],
         ['id' => 3,
          'nome' => 'mareia',
          'idade' => 50
         ]
     ];
     // $dados = array (
          
     //      0 => [
     //           '1' => 1,
     //           '2' => 2,
     //           '3' => 3
     //      ],
     //      1 => [
     //           '1' => 1,
     //           '2' => 2,
     //           '3' => 3
     //      ],
     //      2 => [
     //           '1' => 1,
     //           '2' => 2,
     //           '3' => 3
     //      ]
     //      ,
     //      3 => [
     //           '1' => 1,
     //           '2' => 2,
     //           '3' => 3
     //      ]

     // );




     echo "<hr>";

     foreach ($array as $dados => $alunos){
          echo "$dados" . "<br>";
          foreach ($alunos as $cadaUM => $info){
               echo "$cadaUM: $info" . "<br>";
               
               // foreach ($info as $dado => $sla){
               //      echo "$dado: $sla <br>";
               // }
          }
     }



     echo "<hr>";

  echo '<pre>';
       print_r($array);
  echo '</pre>';

  usort($array, function ($a, $b) {
     if ($a['idade'] == $b['idade']) return 0;

     return ($a['idade'] < $b['idade'] ? 1 : -1);

  });

  echo '<pre>';
       print_r($array);
  echo '</pre>';



?>