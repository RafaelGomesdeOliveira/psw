<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    
<div class="box">
        <div class="top">
            <div class="top-1">
                <div class="imag-top">
                    <img src="../imagens/logo.png" alt="">
                </div>

            </div>

            <div class="top-2">

                <a class="espaco-A" href="#">HOME</a>
                <a class="espaco-A" href="teste.html">ANTERIORES</a>
                <a class="espaco-A" href="#">LOCALIZAÇÃO</a>
                <a class="espaco-A modi-A" href="#">ENTRAR</a>
            </div>

            <div class="top-3">
                <div class="linha-1"></div>
                <div class="linha-2"></div>
            </div>

        </div>
        <div class="conteudo">
            <div class="h1-cont">
                <h1>RESULTADO DO CADASTRO</h1>
                <div class="linha-cont">
                </div>
            </div>


                <div class="cont-1 edit edit-php">
                    <div class="nomeee">
                        Nome: <br>
                        
                    <?php
                    echo $_POST['nome'];
                    ?>

                    </div>

                    <div class="cpfff">
                        CPF:<br>
                    <?php
                    echo $_POST['cpf'];
                    ?>
                    </div>


                </div>
                <div class="cont-2 edit">
                    <div class="emailll">
                        E-mail:<br>
                    <?php
                    echo $_POST['email'];
                    ?>
                    </div>
                    <div class="senhaaa">
                        Senha:<br>
                    <?php
                    echo $_POST['senha'];
                    ?>
                    </div>
                </div>
                <div class="cont-3 edit">
                    <div class="cidadeee">
                        Cidade:<br>
                    <?php
                    echo $_POST['cidade'];
                    ?>
                    </div>

                    <div class="estadooo">
                        Estado: <br>
                    <?php
                    echo strtoupper($_POST['estados']) ;
                    ?>
                    </div>

                    <div class="ceppp">
                        CEP: <br>
                    <?php
                    echo $_POST['cep'];
                    ?>
                    </div>

                    
                </div>
                <div class="cont-4 edit">
                    <div class="ocupacaooo">
                        Ocupação: <br>
                    <?php
                    echo ucfirst($_POST['Ocupacao']);
                    ?>
                    </div>

                    <div class="instituicaooo">
                        Instituição: <br>
                    <?php
                    echo $_POST['instituicao'];
                    ?>
                    </div>


                </div>
                <div class="cont-5 edit">

                </div>

        </div>

        <div class="rodape">        
            <div class="rodape-1"></div>
            <div class="rodape-2">
                <p>@UNIFG 2019</p>
            </div>
        </div>

    </div>













  
</body>
</html>