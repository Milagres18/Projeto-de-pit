<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>

        <style>
            body {
                font-family: Arial, Helvetica, sans-serif;
                background-image: linear-gradient(45deg, white, yellow);
            }

            div {
                background-color: rgba(0, 0, 0, 0.9);
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                padding: 80px;
                border-radius: 15px;
                color: white;
            }

            input {
                padding: 15px;
                border: none;
                outline: none;
                font-size: 15px;
            }

            .inputSubmit {
                background-color: #ffd200;
                border: none;
                padding: 15px;
                width: 100%;
                border-radius: 10px;
                font-family: Arial, sans-serif;
                font-size: 15px;
                cursor: pointer;
            }

            .inputSubmit:hover {
                background-color: #eead2d;
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
        <!--Butão simples para voltar para apágina inicial-->
        <a href="../index.html"><button class="voltar">Voltar</button></a>
        <div>
            <h1>Login Freelancer</h1>

            <!--Forms feito para o login dos usuarios-->

        <form action="testLogin.php" method="POST">
            <input type="email" name="email" placeholder="E-mail">
            <br /><br />
            <input type="password" name="senha" placeholder="Senha">
            <br /><br />
            <a href="esqueceuasenha.php">Esqueci a senha</a>
            <br /><br />
            <input class="inputSubmit" type="submit" name="submit" value="Enviar"></input>
        </form>

        </div>
    </body>
</html>