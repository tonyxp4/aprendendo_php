<?php
include('protect.php');
?>
<?php
  $segundo = date("h");
  if($fto < 20)
  {
    $fto = "primerafto";
  }
  else
  {
    $fto = "segundafto";
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagina inicial</title>
    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;1,100;1,400&display=swap" rel="stylesheet">
    <!--boostrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- script -->
    <script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>    
    <!-- fontawesmo -->
    <script src="https://kit.fontawesome.com/cdf1aa91ca.js" crossorigin="anonymous"></script>
    <!--progressbar-->
    <script src="javajs/progressbar.min.js"></script>
    <!--paralax-->
    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
</head>
<body class="text-white bg-dark <?php echo $test;?>">
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
  <div class="d-flex">
    <h2 style="display: inline; color: yellow; margin: 0; padding: 0;font-weight: bold; font-style: italic;">Carrer</h2>
    <h2 style="display: inline; color: whiter; margin: 0; padding: 0;font-weight: bold; font-style: italic;">Bridge</h2>
</div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alternar navegação">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto"> 
        <li class="nav-item active">
          <a class="nav-link text-white" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Oportunidades</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Perfil</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<header class="segundafto d-flex justify-content-center align-items-center text-white">
    <div class="container">
        <div class="row w-100">
            <!-- Primeira coluna -->
            <div class="col-12 col-md-6 p-2 d-flex justify-content-center align-items-center">
                <div class="text-center">
                    <h1>Está afim de trabalhar em uma empresa e ter uma vida financeira estável?</h1>
                    <p>O melhor lugar para mostrar o teu conhecimento profissional.</p>
                    <a href="#" class="btn btn-primary mb-2">Ver Oportunidades</a>
                    <a href="#" class="btn btn-outline-light">Conhecer Mais</a>
                </div>
            </div>
            
            <!-- Segunda coluna (deixe ela vazia ou adicione conteúdo) -->
            <div class="col-12 col-md-6 p-2 d-flex justify-content-center align-items-center">
                <!-- Aqui você pode adicionar uma imagem ou conteúdo adicional -->
            </div>
        </div>
    </div>
</header>

    <body>
    <div class="container mt-5">
      <!-- Seção de Perfil do Usuário -->
      <div class="row mb-4">
        <div class="col-8">
          <div class="d-flex align-items-center">
            <!-- Foto de Perfil -->
            <img class="ftoperfil" src="fto/perfilsonagol.jpg" alt="Foto de Perfil" class="rounded-circle mr-3">
            <!-- Nome do Usuário -->
            <div>
              <h4>Sonagol</h4>
              <p class="text-muted">Angola</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Cards (Postagens) -->
      <div class="row mb-4">
        <!-- Card 1 -->
        <div class="col-5 mb-4 text-bleck">
          <div class="card">
            <!-- Foto da Publicação -->
            <img src="fto/sonangol.jpg" class="card-img-top" alt="Imagem do Post 1">
            <div class="card-body ">
              <!-- Título da Publicação -->
              <h5 class="card-title " style="color:black">Sonagol</h5>
              <!-- Legenda/Descrição -->
              <p class="card-text" style="color:black">empresa estatal de petróleo e gás de Angola,</p>
            </div>
          </div>
          <a href="#" class = "btn btn-primary">mais detalhes</a>
        </div>
        <div class="container mt-5">
      <!-- Seção de Perfil do Usuário -->
      <div class="row mb-4">
        <div class="col-8">
          <div class="d-flex align-items-center">
            <!-- Foto de Perfil -->
            <img class="ftoperfil" src="fto/unitelperfil.jpg" alt="Foto de Perfil" class="rounded-circle mr-3">
            <!-- Nome do Usuário -->
            <div>
              <h4>Unitel</h4>
              <p class="text-muted">Angola</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Cards (Postagens) -->
      <div class="row ">
        <!-- Card 2 -->
        <div class="col-5 mb-4 text-bleck">
          <div class="card">
            <!-- Foto da Publicação -->
            <img src="fto/unitel.jpg" class="card-img-top" alt="Imagem do Post 1">
            <div class="card-body ">
              <!-- Título da Publicação -->
              <h5 class="card-title " style="color:black">Unitel</h5>
              <!-- Legenda/Descrição -->
              <p class="card-text" style="color:black">empresa de telecomunicação de Angola</p>
            </div>
          </div>
          <a href="#" class = "btn btn-primary">mais detalhes</a>
        </div>
        <div class="container mt-5">
      <!-- Seção de Perfil do Usuário -->
      <div class="row mb-4">
        <div class="col-8">
          <div class="d-flex align-items-center">
            <!-- Foto de Perfil -->
            <img class="ftoperfil" src="fto/zapperfil.jpg" alt="Foto de Perfil" class="rounded-circle mr-3">
            <!-- Nome do Usuário -->
            <div>
              <h4>ZAP</h4>
              <p class="text-muted">Angola</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Cards (Postagens) -->
      <div class="row ">
        <!-- Card 3 -->
        <div class="col-5 mb-4 text-bleck">
          <div class="card">
            <!-- Foto da Publicação -->
            <img src="fto/zap.jpg" class="card-img-top" alt="Imagem do Post 1">
            <div class="card-body ">
              <!-- Título da Publicação -->
              <h5 class="card-title " style="color:black">ZAP</h5>
              <!-- Legenda/Descrição -->
              <p class="card-text" style="color:black">empresa global de telecomunicação</p>
            </div>
          </div>
          <a href="#" class = "btn btn-primary">mais detalhes</a>
        </div>
        <footer>
        <a href="logout.php">sair</a>
        </footer>
    </body>
</html>