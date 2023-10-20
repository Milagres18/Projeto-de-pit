
<?php
session_start();
include_once("config2.php");
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM usuarios WHERE id = '1'";
$resultado_usuario = mysqli_query($conexao, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Estilo Custumizado -->

    <script src="https://kit.fontawesome.com/dc52388d5e.js" crossorigin="anonymous"></script>

    <style>

@import url('https://fonts.googleapis.com/css2?family=Archivo+Black&family=Montserrat:wght@500&family=Poppins:wght@500;600&display=swap');

#home {
	background: #FFD600;
	color: white;
}

.bg_warning{
	background: #FFD600;
}

.caixa {
	padding: 60px 0;
	border-bottom: 1px solid #e5e5e5;
}

footer p a {
	margin: 5px 15px;
}

.titulos{
    text-align: center;
    font-family: 'Poppins', sans-serif;
    font-weight: 300;
}

.subtitle{
    opacity: 0.5;
    font-weight:500;
    font-size: 20px;
    padding-bottom: 50px;
    font-family: 'Montserrat', sans-serif;
}

.title{
    font-family: 'Poppins', sans-serif;
}

.perf{
    cursor: pointer;
    color: black;
}

body{
    background:#DCDCDC;
}

main{
    margin-top: 50px;
}
.card-box {
    padding: 20px;
    border-radius: 3px;
    margin-bottom: 30px;
    background-color: #fff;
}

.social-links li a {
    border-radius: 50%;
    color: rgba(121, 121, 121, .8);
    display: inline-block;
    height: 30px;
    line-height: 27px;
    border: 2px solid rgba(121, 121, 121, .5);
    text-align: center;
    width: 30px
}

.social-links li a:hover {
    color: #797979;
    border: 2px solid #797979
}
.thumb-lg {
    height: 88px;
    width: 88px;
}
.img-thumbnail {
    padding: .25rem;
    background-color: #fff;
    border: 1px solid #dee2e6;
    border-radius: .25rem;
    max-width: 100%;
    height: auto;
}
.text-pink {
    color: #ff679b!important;
}
.btn-rounded {
    border-radius: 2em;
}
.text-muted {
    color: #98a6ad!important;
}
h4 {
    line-height: 22px;
    font-size: 18px;
}



/*------------------------------------------------------------------------------------*/

.profile {
    background-image: linear-gradient(45deg, #FFD600, #00FFB2);
    max-width: 800px;
    margin: 20px auto;
    border: 1px solid #ddd;
    border-radius: 8px;
    overflow: hidden;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.cover-photo {
    background-image: url('cover-photo.jpg');
    background-size: cover;
    height: 200px;
}

.profile-info {
    text-align: center;
    padding: 20px;
}

.profile-info img {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    border: 2px solid white;
    margin: -75px auto 10px;
    display: block;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
}

h1 {
    font-size: 24px;
    margin: 5px 0;
}

p {
    color: #666;
    margin: 5px 0;
}

button#friend-button {
    background-color: #1877f2;
    color: white;
    border: none;
    padding: 10px 20px;
    margin-top: 10px;
    cursor: pointer;
    border-radius: 20px;
    font-weight: bold;
}

.posts {
    max-width: 800px;
    margin: 20px auto;
    background-color: white;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 8px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

.posts h2 {
    font-size: 20px;
    margin-bottom: 10px;
}

.post {
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    padding: 10px;
    border-radius: 4px;
    margin-bottom: 10px;
}


    </style>


    <title>FreeTeenager</title>
  </head>
  <body>
    
    <header><!-- Inicio cabeçalho -->
      <nav class="navbar navbar-expand-sm navbar-light bg_warning">
        <div class="container">

          <a href="" class="navbar-brand">
            <img src="img/FT.png" width="102">
          </a>

          <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
            <span class="navbar-toggler-icon">
            </span>
          </button>

          <div class="collapse navbar-collapse" id="nav-principal">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a href="" class="nav-link">Home</a>
              </li>
              
              <li class="nav-item">
                <a href="" class="nav-link">Encontrar Trabalho</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">Como Funciona?</a>
              </li>
            </ul>
          </div>
          
        </div>
      </nav>
    </header><!-- Fim cabeçalho -->

    
    <main>
        
            <hr class="mt-0 mb-4">
            <div class="row">
                <div class="col-xl-4">
                    <!-- Profile picture card-->
                    <div class="card mb-4 mb-xl-0">
                        <div class="card-header">Foto de Perfil</div>
                        <div class="card-body text-center">
                            <!-- Profile picture image-->
                            <img class="img-account-profile rounded-circle mb-2" src="img/minhaFT.png" alt="">
                            <!-- Profile picture help block-->
                            <div class="small font-italic text-muted mb-4">JPG ou PNG</div>
                            <!-- Profile picture upload button-->
                            <button class="btn btn-primary" type="button">Carregar nova imagem</button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <!-- Account details card-->
                    <div class="card mb-4">
                        <div class="card-header">Detalhes da Conta</div>
                        <div class="card-body">
                            <form method="POST" action="proc_edit_usuario.php">
                                <!-- Form Group (username)-->
                                <!-- Form Row-->
                                <input type="hidden" name="id" value="<?php echo $row_usuario['id'] ?>"></input>
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (first name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputFirstName">Primeiro Nome</label>
                                        <input class="form-control" id="inputFirstName" type="text" placeholder="Nome" value="<?php echo $row_usuario['nome']; ?>" >
                                    </div>
                                    <!-- Form Group (last name)-->
                                </div>
                                <!-- Form Row        -->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="inputOrgName">Email</label>
                                    <input class="form-control" id="inputOrgName" type="text" placeholder="Digite seu Email" value="<?php echo $row_usuario['email']; ?>">
                                </div>
                                    <!-- Form Group (location)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputLocation">Senha</label>
                                        <input class="form-control" id="inputLocation" type="password" placeholder="Digite sua senha" value="<?php echo $row_usuario['senha']; ?>">
                                    </div>
                                </div>
                                <!-- Form Group (email address)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="inputEmailAddress">Descrição do Usuario</label>
                                    <input class="form-control" id="inputEmailAddress" type="text" placeholder="Descreva-se" value="<?php echo $row_usuario['descricao']; ?>">
                                </div>
                                <!-- Form Row-->
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (phone number)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputPhone">Telefone</label>
                                        <input class="form-control" id="inputPhone" type="tel" placeholder="(xx) xxxxx xxxx" value="<?php echo $row_usuario['telefone']; ?>">
                                    </div>
                                    <!-- Form Group (birthday)-->
                                </div>
                                <!-- Save changes button-->
                                <input class="btn btn-primary" type="submit" value="editar"></input>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="mt-4 mb-4">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <p>
              <a href="">Home</a>
              <a href="">Recursos</a>
              <a href="">Benefícios</a>
              <a href="">Preços</a>
            </p>
          </div>
          <div class="col-md-4 d-flex justify-content-end">
            <a href="https://www.linkedin.com/in/bernardo-milagres-055550239/" class="btn btn-outline-dark ml-2">
              <i class="fa-brands fa-linkedin fa-lg"></i>
            </a>

            <a href="https://github.com/Milagres18" class="btn btn-outline-dark ml-2">
              <i class="fa-brands fa-github fa-lg"></i>
            </a>
            
            
          </div>
        </div>
      </div>
    </footer>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>