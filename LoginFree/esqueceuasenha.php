<?php
    session_start();
    
    if(isset($_POST['ok']))
    {
        include_once('config.php');

        $email  = $conexao->escape_string($_POST['email']);

        //vendo se o email é válido
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo  "<script>alert('Email inválido!');</script>";
        }

        //fazendo a chamada com o banco de dados
        $sql = "SELECT senha FROM usuarios WHERE email = '$email' ";
        $sql_query = $conexao->query($sql) or die($conexao->error);
        $dado = $sql_query->fetch_assoc();
        $total = $sql_query->num_rows;

        //caso o email não esteja no banco de dados
        if($total == 0) {
            echo  "<script>alert('O e-mail informado não foi registrado anteriormente!');</script>";
        }

        //criando a senha aleatoria para o usuario
        if($total > 0) {
            $novaSenha = substr(md5(time()), 0, 12);
            
            if(1 == 1/*mail($email, "Sua nova senha", "Sua nova senha é ".$novaSenha)*/) {
                $sql_code = "UPDATE usuarios SET senha = '$novaSenha' WHERE email = '$email'";
                $sql_query = $conexao->query($sql_code) or die($conexao->error);

                if($sql_query) {
                    echo  "<script>alert('Senha alterada com sucesso! Sua nova senha é  >>>>>    $novaSenha'); location.href='login.php';</script>";
                }
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="passu.css">
    <title>Login</title>
</head>
<body id="fundoRecuSenha">
    <nav id="topoSiteIndex">
        <div id="tituloSite"><img src="imagens/iconTrin.png" alt="" id="iconTrin"></div>
        <div id="areaIcons">
            <div id="area-botao-cor">
                <img src="imagens/modoCor.png" alt="" id="botao-cor" onclick="trocaCor()">
                <img src="imagens/modoEscuro.png" alt="" id="botao-cor1" onclick="voltarCor()">
            </div>
        </div>
    </nav>

    <form action="esqueceuasenha.php" method="POST"  class="divFundo formRecuSenha">
        <h2 class="tituloLogin TlSenha">RECUPERAÇÃO DE SENHA</h2>
        <div id="areaLogSen">
            <label for=""class="tituloLog">Email</label>
            
        </div>
        <input type="email" id="email" name="email" class="inputEntrada"  placeholder="username@gmail.com" oninput="emailMask(email)"  required>
        <input type="submit" name="ok" value="OK" id="submit" class="botaorecuSenha">
    </form>

    <footer id="rodape">
        <div id="areaLinksPag">
            <a href="suporte.php" class="linkPaginaSite">contato</a>
            <a href="tela_de_cadastro.php" class="linkPaginaSite">cadastro</a>
            <a href="Login.php" class="linkPaginaSite">login</a>
        </div>

        <div id="areaLogoSite"><img src="imagens/iconTrin.png" alt="" id="iconTrinRodape"></div>
    </footer>
</body>
</html>