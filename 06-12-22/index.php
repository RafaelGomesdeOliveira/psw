<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>06-12</title>
</head>
<body>
    <?php

    $arr = [1, 2, 3, 4];

    foreach ($arr as $key => $v) {
        echo  $arr[$key], "<br>" ;
    

    }

    print_r($arr);
    echo "<br>", "<hr>";
    ?> 

    <?php 
    
//     $var = array(1, 2, 3, 4);

//     for ($a = 0; $a < count($var); $a++) {
//         echo "$var[$a]", "<br>";

//     }
//     echo "<hr>";
    
//     foreach ($var as $f){
//         echo "$f <br>";

//     }

//     $var =  array("NU" => 22, "Rafael" => 10);

//     foreach($var as $f => $conte){
//         echo "$f: $conte <br>";

//     }

//     echo "<hr>";

//     $var = array("088.123.456-40" => "NU", "111.112.123-75" => "Fabio");

//     foreach ($var as $f => $valor) {
//         echo "$f: $valor <br>";

//     }

//     echo "<hr>";


//     $vari[0] = "Desenvolvimento";
//     $vari[1] = "Web";
//     $vari[2] = "II";


//     for($a=0; $a<count($vari); $a++) {
//     echo "$vari[$a] ";
//     }
//     echo "<hr>";


//     foreach ($vari as $dado) {
//     echo "$dado";
//     }

    
//     $variRafa = array("Micael" => "Mesa-1", "Renan" => "Mesa-1", "Rafael" => "Mesa-1", "Casinha" => "Mesa-12", "Casinha Vermelho" => "Mesa-12 ", "CasinhaRosa" => "Mesa-12");


//     foreach ($variRafa as $user => $infor) {
//         echo "<br>", "$user: $infor";

//     }

//     $listaCompra = ["Biscoito", "Açucar", "Bolacha"];

//     echo "<hr>";
//     echo "Lista de Compra:";
//     foreach ($listaCompra as $imp => $valor){
//         echo "<br>", "$imp: $valor";

//     }

//     echo "<hr>";
//     $infPessoas = array("Rafael" => array("endereço" => "Canabrava-BA", "Bairro" => "Rua Alcidez"),
//                        "João" => array("endereço" => "Malhada-BA", "Bairro" => "Rua Petrolina")
// );


//     foreach ($infPessoas as $pessoas => $info){
//         echo ($pessoas), ": <br>";

//         foreach ($info as $dados => $infor) {
//             echo " - $infor", "<br>";
//         }
//         echo "<br>";
//     }



    echo "<hr>";

    $infoPessoas = array(   
                        "Rafael" => array("Endereço" => "Canabrava", "Bairro" => "Alvidez", "CPF" => "088.235.453-56"),

                        "Daniel" => array("Endereço" => "Riachão", "Bairro" => "Estrada de lama", "CPF" => "065.845.982-40")
    );

    foreach ($infoPessoas as $dados => $info) {
        echo "$dados:", "<br>", "<br>";

        foreach ($info as $dados2 => $info2){
            echo "$dados2: ", "<br>", "--------$info2", "<br>";
        }
        echo "<br>", "<hr>";
        
    }




    ?>
    
</body>
</html>