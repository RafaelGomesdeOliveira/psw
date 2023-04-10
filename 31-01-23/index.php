<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Document</title>
</head>

<body>


    <div class="conteudo">

        <div class="topo">
            <h1>Formulário - Resultado</h1>
        </div>
        <div class="formu">
            <div class="opc1">

                <?php
                echo "Nome: ".$_POST['nome']. "<br>";
                ?>
            </div>
            <div class="opc2">

            <?php
                echo "Idade: ". $_POST['idade']. "<br>";
            ?>

            </div>
            <div class="opc3">
            <?php
                echo "CPF: ". $_POST['cpf']. "<br>";
            ?>
            </div>
            <div class="opc4">
            <?php
                echo "Estado civil: ". $_POST['estado']. "<br>";
            ?>
            </div>
            <div class="opc5">

            <?php
                echo "Telefone: ". $_POST['telefone']. "<br>";
                ?>
            </div>
            <div class="opc6">

            <?php
                echo "E-mail: ". $_POST['e-mail']. "<br>";
            ?>
            </div>
        </div>














    </div>


</body>

</html>