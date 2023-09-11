<?php

    if(isset($_POST['submit']))
    {

    //print_r($_POST['nome']);
    //print_r($_POST['senha']);
    //print_r($_POST['email']);
    //print_r($_POST['cpf']);
    //print_r($_POST['tel']);
    //print_r($_POST['servicos']);
    //print_r($_POST['data_nascimento']);
    //print_r($_POST['estado']);
    //print_r($_POST['cidade']);
    //print_r($_POST['cep']);

    include_once('config.php');

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['tel'];
    $data_nasc = $_POST['data_nascimento'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $cep = $_POST['cep'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,senha,email,cpf,telefone,data_nasc,estado,cidade,cep) 
    VALUES ('$nome','$senha','$email','$cpf','$telefone','$data_nasc','$estado','$cidade','$cep')");

    
    header('Location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro</title>

        <style>

            body {
                font-family: Arial, Helvetica, sans-serif;
                background-image: linear-gradient(to right, white, yellow);
            }

            .box {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background-color: rgba(0, 0, 0, 0.9);
                padding: 15px;
                border-radius: 15px;
                width: 20%;
                color: white;
                min-width: 320px;
                max-width: 800px;
            }

            fieldset {
                border: 3px solid yellow;
            }

            legend {
                border: 1px solid black;
                padding: 10px;
                text-align: center;
                background-color: black;
                border-radius: 8px;
            }

            .inputBox {
                position: relative;
            }

            .inputUser {
                background: none;
                border: none;
                border-bottom: 1px solid white;
                outline: none;
                color: white;
                font-size: 15px;
                width: 100%;
                letter-spacing: 2px;
            }

            .lblInput {
                position: absolute;
                top: 0px;
                left: 0px;
                pointer-events: none;
                transition: .5s;
            }
           
            .inputUser:focus ~ .lblInput,
            input:valid ~ .lblInput {
                top: -20px;
                font-size: 12px;
                color: yellow;
            }

            #data_nascimento {
                border: none;
                padding: 8px;
                border-radius: 10px;
                outline: none;
                font-size: 15px;
            }

            #submit {
                background-image: linear-gradient(45deg, white, yellow);
                width: 100%;
                border: none;
                padding: 15px;
                color: black;
                font-size: 15px;
                cursor: pointer;
                border-radius: 10px;
            }

            #submit:hover {
                background-image: linear-gradient(45deg, white, #eead2d);
            }

            .voltar {
                background-color: #ffd200;
                border: none;
                padding: 15px;
                width: 10%;
                border-radius: 10px;
                font-family: Arial, sans-serif;
                font-size: 15px;
                cursor: pointer;
            }

        </style>
    </head>
    <body>

        <a href="../inicial/index.html"><button class="voltar">Voltar</button></a>

        <div class="box">
            <form action="tela_de_cadastro.php" method="POST">
                <fieldset>
                    <legend><b>Seja um freelancer</b></legend>
                    <br>
                    <div class="inputBox">
                        <input type="text" name="nome" id="nome" class="inputUser" required>
                        <label for="nome" class="lblInput">Nome completo</label>
                    </div>
                    <br><br>

                    <div class="inputBox">
                        <input type="password" name="senha" id="senha" class="inputUser" required>
                        <label for="senha" class="lblInput">Senha</label>
                    </div>
                    <br><br>

                    <div class="inputBox">
                        <input type="text" name="email" id="emal" class="inputUser" required>
                        <label for="email" class="lblInput">E-mail</label>
                    </div>
                    <br><br>

                    <div class="inputBox">
                        <input type="text" name="cpf" id="cpf" class="inputUser" maxlength="14" required>
                        <label for="cpf" class="lblInput">CPF</label>
                    </div>
                    <br><br>

                    <div class="inputBox">
                        <input type="tel" name="tel" id="telefone" class="inputUser" maxlength="15"  onkeyup="handlePhone(event)" required>
                        <label for="telefone" class="lblInput">Telefone</label>
                    </div>

                    <br><br>

                    
                        <label for="data_nascimento"><b>Data de nascimento</b></label>
                        <input type="date" id="data_nascimento" name="data_nascimento" required>
               
                    <br><br><br>

                    <div class="inputBox">
                        <input type="text" id="estado" name="estado" class="inputUser" required>
                        <label for="estado" class="lblInput">Estado</label>
                    </div>
                    <br><br>

                    <div class="inputBox">
                        <input type="text" id="cidade" name="cidade" class="inputUser" required>
                        <label for="cidade" class="lblInput">Cidade</label>
                    </div>
                    <br><br>

                    <div class="inputBox">
                        <input type="text" id="cep" name="cep" class="inputUser" maxlength="9" required>
                        <label for="cep" class="lblInput">CEP</label>
                    </div>
                    <br><br>

                    <input type="submit" name="submit" id="submit">
                </fieldset>
            </form>
        </div>

        <script src="../mascara.js"></script>
        
    </body>
</html>