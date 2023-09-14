<?php

$mensagem = "Preencha os dados do formulário";
$mensagem_class ="";
$nome = "";
$email = "";
$msg = "";

if (isset($_POST["nome"], $_POST["email"],$_POST["msg"])){

    $conexao = new PDO("mysql:host=Localhost;dbname=pagina_de_cadastro", "root", "");
    
    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $msg = filter_input(INPUT_POST, "msg", FILTER_SANITIZE_STRING);

    if (!$nome || !$email || !$msg) {
        $mensagem = "Dados Inválidos";
        $mensagem_class = "erro";
    } else {
        $stm = $conexao->prepare("INSERT INTO  suporte(nome, email, msg) VALUES (:nome,:email,:msg)");
        $stm->bindParam('nome', $nome);
        $stm->bindParam('email', $email);
        $stm->bindParam('msg', $msg);
        $stm->execute();

        $mensagem = "Mensagem enviada com Sucesso!";
        $mensagem_class = "sucesso";

        $nome = "nome";
        $email = "email";
        $msg = "msg";

    }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulário de Suporte</title>
    <link rel="stylesheet" href="suporte.css" />
  </head>
  <body>

  <a href="../index.html"><button class="voltar">Voltar</button></a>
    
    <main>
      <form method="POST">
          <label>Nome</label>
          <input type="text" name="nome" value="<?= $nome ?>" required />
          <label>E-mail</label>
          <input type="email" name="email" value="<?= $email ?>" required />
          <label>Mensagem</label>
          <textarea name="msg"><?= $msg ?></textarea>
          <button type="submit">Enviar</button>
      </form>
      <div class="mensagem"<?= $mensagem_class ?>>
        <?=$mensagem?>
      </div>
    </main>

      
  </body>
</html>