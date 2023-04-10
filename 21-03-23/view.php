<?php
    error_reporting(E_ALL);
    ini_set('display_erros', 1);
    include_once("route.php");
    if (!empty($_POST['form_submit'])) {
    rotas($_POST['acao']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <form action="view.php" method="post">
        <input TYPE="hidden" name="form_submit" VALUE="OK">
        <div class='col-sm-4'>
            <button type="submit" name="acao" value="cadastar" class="btn btn-primary btn-block">
                <b>Cadastar</b> </button>
        </div>
        <div class='col-sm-4'>
            <button type="submit" name="acao" value="alterar" class="btn btn-success btn-block">
                <b>Alterar</b> </button>
        </div>
        <div class='col-sm-4'>
            <button type="submit" name="acao" value="remover" class="btn btn-danger btn-block">
                <b>Remover</b> </button>
        </div>
    </form>



</body>

</html>