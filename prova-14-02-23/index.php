<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="box">

        <div class="boxDireita">
            <div class="dir-1">
                <h1>Gestão de Estágio</h1>
            </div>
            <div class="dir-2">
                <hr>
                Administrador
            </div>
            <div class="dir-3">
                <p class="form-a">
                    <a href="#">Solicitações</a>
                </p>

                <p class="form-a">
                    <a href="#">Períodos Letivos</a>
                </p>

                <p class="form-a">
                    <a href="#">Cursos</a>
                </p>
                <p class="form-a">
                    <a href="#">Disciplinas</a>
                </p>
                <p class="form-a">
                    <a href="#">Ofertas ao aluno</a>
                </p>

            </div>
            <div class="dir-4">
                Sair

            </div>

        </div>


        <div class="boxEsquerda">
            <div class="esq-1">
                <h1>Cadastro de unidade concedente</h1>
            </div>
            <form action="prova.php" method="get">
                <div class="esq-2 edit">
                    <div class="razaoo">
                        <label for="razao">Razão Social da empresa</label>
                        <br>
                        <input type="text" class="input-med" name="razao" required>
                    </div>
                    <div class="cnpj">
                        <label for="cnpj">CNPJ/CPF</label>
                        <br>
                        <input type="text" name="cpf" class="input-med" required>
                    </div>
                </div>
                <div class="esq-3">
                    <div class="nomeFan">
                        <label for="fan">Nome fantasia</label>
                        <br>
                        <input type="text" name="fantasia" class="input-long" required>
                    </div>
                </div>
                <div class="esq-4 edit">

                    <div class="emaill">
                        <label for="ema">E-mail</label>
                        <br>
                        <input type="text" name="email" class="input-med" required>
                    </div>
                    <div class="telefone">
                        <label for="tel">Telefone</label>
                        <br>
                        <input type="text" name="telefone" class="input-med" required>

                    </div>

                </div>
                <div class="esq-5 edit">
                    <div class="endereco">
                        <label for="ende">Endereço</label>
                        <br>
                        <input type="text" name="endereco" class="input-longM" required>


                    </div>

                    <div class="n">
                        <label for="nu">N°</label>
                        <br>
                        <input type="text" name="num" class="input-curt" required>


                    </div>

                </div>
                <div class="esq-6 edit">
                    <div class="bairroo">
                        <label for="bairro">Bairro</label>
                        <br>
                        <input type="text" name="bairro" class="input-med" required>

                    </div>  
                    <div class="cepp">
                        <label for="Cep">CEP</label>
                        <br>
                        <input type="text" name="cep" class="input-med" required>

                    </div>

                </div>
                <div class="esq-7 edit">
                    <div class="cidade">
                        <label for="cit">Cidade</label>
                        <br>

                        <input type="text" name="cidade" class="input-med" required>

                    </div>
                    <div class="estado">
                        <label for="esta">Estado</label>
                        <br>
                        <select name="estado" class="select-med" required>
                            <option value=" "> </option>
                            <option value="ac">AC</option>
                            <option value="al">AL</option>
                            <option value="ap">AP</option>
                            <option value="am">AM</option>
                            <option value="ba">BA</option>
                            <option value="ce">CE</option>
                            <option value="df">DF</option>
                            <option value="es">ES</option>
                            <option value="go">GO</option>
                            <option value="ma">MA</option>
                            <option value="mt">MT</option>
                            <option value="ms">MS</option>
                            <option value="mg">MG</option>
                            <option value="pa">PA</option>
                            <option value="pb">PB</option>
                            <option value="pr">PR</option>
                            <option value="pe">PE</option>
                            <option value="pi">PI</option>
                            <option value="rj">RJ</option>
                            <option value="rn">RN</option>
                            <option value="rs">RS</option>
                            <option value="ro">RO</option>
                            <option value="rr">RR</option>
                            <option value="sc">SC</option>
                            <option value="sp">SP</option>
                            <option value="se">SE</option>
                            <option value="to">TO</option>
                        </select>




                    </div>
                </div>
                <div class="esq-8 edit">
                        <div class="representante">
                            <label for="nomeRe">Nome do representante lega da empresa</label>
                            <br>
                            <input type="text" name="repre" class="input-med" required>
                        </div>

                        <div class="cargo">
                            <label for="cargoRe">Cargo do representante legal da empresa</label>
                            <br>
                            <input type="text" name="cargo" class="input-med" required>
                        </div>

                </div>
                <div class="esq-9 edit">
                    <div class="datain">
                        <label for="">Data de início do convênio</label>
                        <br>
                        <input type="text" name="dataini" class="input-med" required>
                    </div>

                    <div class="datater">
                        <label for="">Data de término do convênio</label>
                        <br>
                        <input type="text" name="dataterm" class="input-med" required>

                    </div>

                </div>  
                <div class="esq-10 edit">
                    <div class="curso">
                        <label for="curs">Cursos permitidos para estágio</label>
                        <br>
                        <select name="cursos" class="select-med" required>
                            <option value=" "> </option>
                            <option value="quimica">Química</option>
                            <option value="ads">ADS</option>
                            <option value="fisica">Física</option>
                        </select>

                    </div>

                    <div class="carga">
                        <label for="carg">Carga horária máxima disponibilizada para cada estudante</label>
                        <br>

                        <input type="text" name="horario" class="input-med" required>


                    </div>

                </div>
                <div class="esq-11">
                    <button type="submit">
                        Cadastrar
                    </button>

                </div>
            </form>

        </div>

    </div>
    
</body>
</html>