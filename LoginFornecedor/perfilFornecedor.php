<?php

    //incluido a conexao com o banco de dados
    include_once('config2.php');
    session_start();
    ob_start();
    print_r($_SESSION);

    
    //validando se o usuario está mesmo logado
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    } else {
        unset($_SESSION['msg']);
    }
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

  <title>Perfil de Contratante</title>
</head>


<body>
  <header><!-- Inicio cabeçalho -->
    <nav class="navbar navbar-expand-sm navbar-light bg_warning">
      <div class="container">

        <a href="" class="navbar-brand">
          <img src="img/FT.png" width="40">
        </a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
          <span class="navbar-toggler-icon">
          </span>
        </button>

        <div class="collapse navbar-collapse" id="nav-principal">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="perfilFornecedor.php" class="nav-link">Início</a>
            </li>
            <li class="nav-item">
              <a href="../LoginFree/EncontrarFreelancer.html" class="nav-link">Encontrar Freelancers</a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">Cadastrar Serviços</a>
              </li>
            <li class="nav-item">
              <a href="" class="nav-link">Como Funciona?</a>
            </li>
            <li class="nav-item">
              <a href="loginFornecedor.php" class="btn btn-outline-danger ml-4">Sair</a>
            </li>
          </ul>
        </div>
        
      </div>
    </nav>
  </header>
<!-- Inicio Html do Perfil -->
  <div class="container bootstrap snippets bootdey">
    <div class="row">
      <div class="profile-nav col-md-3">
        <div class="panel">
          <div class="user-heading round">
            <a href="#">
              <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt>
            </a>
            <h1>Manoel Rodrigues</h1>
            <p><a href="" class="__cf_email__"></a></p>
          </div>
          <ul class="nav nav-pills nav-stacked">
            <li class="active"><a href="#"> <i class="fa fa-user"></i> Perfil</a></li>
            <li><a href="#"> <i class="fa fa-calendar"></i> Atividade Recente</a></li>
            <li><a href="edita_contratante.php"> <i class="fa fa-edit"></i> Editar Perfil</a></li>
          </ul>
        </div>
      </div>
      <div class="profile-info col-md-9">
        <div class="panel">
          <footer class="panel-footer">
            <button class="btn btn-warning pull-right">teste de botão pro futuro</button>
            <ul class="nav nav-pills">
              <li>
                <a href="#"><i class="fa fa-map-marker"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-camera"></i></a>
              </li>
              <li>
                <a href="#"><i class=" fa fa-film"></i></a>
              </li>
              <li>
                <a href="#"><i class="fa fa-microphone"></i></a>
              </li>
            </ul>
          </footer>
        </div>
        <div class="panel">
          <div class="bio-graph-heading">
            Descrição do Contratante.
          </div>
          <div class="panel-body bio-graph-info">
            <h1>Biografia</h1>
            <div class="row">
              <div class="bio-row">
                <p><span>Nome </span>: Manoel</p>
              </div>
              <div class="bio-row">
                <p><span>Cidade </span>: Belo Horizonte</p>
              </div>
              <div class="bio-row">
                <p><span>Aniversário</span>: 01 de outubro de 2005</p>
              </div>
              <div class="bio-row">
                <p><span>Serviço Fornecido </span>: Lavagem</p>
              </div>
              <div class="bio-row">
                <p><span>Contato </span>: (55) 31 9 1234 5678</p>
              </div>
              <div class="bio-row">
                <a href="mailto:12102580@aluno.cotemig.com.br" class="email" >Contato Via Email</a>
              </div>
            </div>
          </div>
        </div>
        <div>
          <div class="row">
            <div class="col-md-6">
              <div class="panel">
                <div class="panel-body">
                  <div class="bio-chart">
                    <div style="display:inline;width:100px;height:100px;"><canvas width="100"
                        height="100px"></canvas><input class="knob" data-width="100" data-height="100"
                        data-displayprevious="true" data-thickness=".2" value="2 vagas" data-fgcolor="#e06b7d"
                        data-bgcolor="#e8e8e8"
                        style="width: 89px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(224, 107, 125); padding: 0px;  background: none;">
                    </div>
                  </div>
                  <div class="bio-desk">
                    <h4 class="red">Capinar Lote</h4>
                    <p>Começa: 15 Setembro</p>
                    <p>Término: 10 Outubro</p>
                    <p>Valor: R$50,00 p/dia</p>
                    <button type="button" class="BotãoServiço">Aceitar</button>
                    <button type="button" class="BotãoPost">Postar</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="panel">
                <div class="panel-body">
                  <div class="bio-chart">
                    <div style="display:inline;width:100px;height:100px;"><canvas width="100"
                        height="100px"></canvas><input class="knob" data-width="100" data-height="100"
                        data-displayprevious="true" data-thickness=".2" value="1 vaga" data-fgcolor="#4CC5CD"
                        data-bgcolor="#e8e8e8"
                        style="width: 89px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(76, 197, 205); padding: 0px;  background: none;">
                    </div>
                  </div>
                  <div class="bio-desk">
                    <h4 class="terques">Manutenção Pc</h4>
                    <p>Começa: 30 Setembro</p>
                    <p>Término: 2 Outubro</p>
                    <p>Valor: R$100,00</p>
                    <button type="button" class="BotãoServiço">Aceitar</button>
                    <button type="button" class="BotãoPost">Postar</button>            
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="panel">
                <div class="panel-body">
                  <div class="bio-chart">
                    <div style="display:inline;width:100px;height:100px;"><canvas width="100"
                        height="100px"></canvas><input class="knob" data-width="100" data-height="100"
                        data-displayprevious="true" data-thickness=".2" value="3 Vagas" data-fgcolor="#96be4b"
                        data-bgcolor="#e8e8e8"
                        style="width: 89px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(150, 190, 75); padding: 0px;  background: none;">
                    </div>
                  </div>
                  <div class="bio-desk">
                    <h4 class="green">Auxiliar de Pedreiro</h4>
                    <p>Começa: 6 Novembro</p>
                    <p>Término: 11 Novembro</p>
                    <p>Valor: R$75,00 p/dia</p>
                    <button type="button" class="BotãoServiço">Aceitar</button>
                    <button type="button" class="BotãoPost">Postar</button>                
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="panel">
                <div class="panel-body">
                  <div class="bio-chart">
                    <div style="display:inline;width:100px;height:100px;"><canvas width="100"
                        height="100px"></canvas><input class="knob" data-width="100" data-height="100"
                        data-displayprevious="true" data-thickness=".2" value="1 Vaga" data-fgcolor="#cba4db"
                        data-bgcolor="#e8e8e8"
                        style="width: 89px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(203, 164, 219); padding: 0px;  background: none;">
                    </div>
                  </div>
                  <div class="bio-desk">
                    <h4 class="purple">Auxiliar de Mecânico</h4>
                    <p>Começa: 15 Setembro</p>
                    <p>Término: 19 Setembro</p>
                    <p>Valor: R$90,00 p/dia</p>
                    <button type="button" class="BotãoServiço">Aceitar</button>
                    <button type="button" class="BotãoPost">Postar</button>                
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Fim do html do perfil -->

  <!-- Inicio rodape -->
  <footer class="mt-4 mb-4">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <p>
            <a href="perfilFornecedor.php">Início</a>
            <a href="">Recursos</a>
            <a href="">Benefícios</a>
            <a href="">Termos de uso</a>
          </p>
        </div>
        <div class="col-md-4 d-flex justify-content-end">
          <a href="https://www.linkedin.com/in/bernardo-milagres-055550239/" class="btn btn-outline-dark ml-2">
            <i class="fa fa-linkedin" aria-hidden="true"></i>
          </a>

          <a href="https://github.com/Milagres18" class="btn btn-outline-dark ml-2">
            <i class="fa fa-github" aria-hidden="true"></i>
          </a>
          
          
        </div>
      </div>
    </div>
  </footer>

  <!-- Fim rodape -->

  <!-- Inicio dos scripts usados -->
  <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script type="text/javascript">

  </script>
</body>

</html>