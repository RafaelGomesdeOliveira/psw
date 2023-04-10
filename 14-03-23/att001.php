<?php
error_reporting(E_ALL);
ini_set("display_erros", 1);
include_once("exemplo-post-dados.php");
if (!empty($_POST['form_submit'])) {
    obterDados($_POST);
}


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="att001.css">
</head>

<body>

    <form class="form" style="background-color:orange" action="att001.php" method="post">
    <p>Teste de form</p>
    <p>
        <label for="inome">Nome:</label>
        <input type="text" name="nome" id="inome" required>

    </p>

    <p>
        <label for="icpf">CPF:</label>
        <input type="text" name="cpf" id="icpf" required placeholder="Digite o seu CPF">
    </p>

    <input type="hidden" name="form_submit" value="OK">

    <br>
    <br>
    <button type="submit" class="bnt">
        <b>Obeter Dados Post</b>
    </button>
    </form>


</body>

</html>

