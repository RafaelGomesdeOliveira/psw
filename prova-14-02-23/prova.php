<!DOCTYPE html>
<html lang="pt-br">
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
            <div class="titu-1">
            <h1>
                <?php
                    echo $_GET ['fantasia']
                ?>
            </h1>
            <h2>Razão Social: 
            <?php
                echo $_GET['razao']
            ?>
            </h2>
        
        </div>

                
        </div>
        <div class="inf">
        <p>
            CPF/CNPJ 
        </p>
        
        <p>E-mail</p>
        <p>Telefone</p>

        <p>Endereço</p>

        <p>N°</p>

        <p>Bairro</p>

        <p>CEP</p>

        <p>Cidade</p>

        <p>Estado</p>

        <p>Nome do representante legal da empresa</p>

        <p>Cargo do representante lega da empresa</p>

        <p>Data de inicio do convênio</p>

        <p>Data de término do convênio</p>

        <p>Cursos permitidos para estágio</p>

        <p>Carga horária máxima para cada estudante</p>


        </div>
        <div class="dados">
            <p>
            <?php
            echo $_GET['cpf'];
            ?>
            </p>

            <p>
            <?php
            echo $_GET['email'];
            ?>
            </p>

            <p>
            <?php
            echo $_GET['telefone'];
            ?>
            </p>
            
            <p>
            <?php
            echo $_GET['endereco'];
            ?>
            </p>

            <p>
            <?php
            echo $_GET['num'];
            ?>
            </p>
            
            <p>
            <?php
            echo $_GET['bairro'];
            ?>
            </p>

            <p>
            <?php
            echo $_GET['cep'];
            ?>
            </p>

            <p>
            <?php
            echo $_GET['cidade'];
            ?>
            </p>   

            <p>
            <?php
            echo strtoupper($_GET['estado']);
            ?>
            </p>   

            <p id="long" >
            <?php
            echo $_GET['repre'];
            ?>
            </p>   

            <p id="carg" >
            <?php
            echo $_GET['cargo'];
            ?>
            </p>

            <p id="dataini" >
            <?php
            echo $_GET['dataini'];
            ?>
            </p>   

            <p>
            <?php
            echo $_GET['dataterm'];
            ?>
            </p>   

            <p id="curso" >
            <?php
            echo $_GET['cursos'];
            ?>
            </p>   

            <p id="horario" >
            <?php
            echo $_GET['horario'];
            ?>
            </p>   


        </div>




    </div>



    
</body>
</html>