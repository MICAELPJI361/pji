<!DOCTYPE html>
<html lang="en">

<head>
  <title>O que é Agroecologia?</title>
  <meta charset="UTF-8" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"></script>
  <link rel="shortcut icon" href="IMG/favicon.ico" type="image/x-icon">

  <link rel="stylesheet" href="css/style.css">
</head>

<body>


  <nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container-fluid">
      <a class="navbar-brand" href="agroec.html">

        <marquee behavior="slide" direction="up">
          <img width="55" height="30" src="logo.png">
          ECOHummus
        </marquee>

      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNav">

        <ul class="navbar-nav">

          <li class="nav-item ">
            <a class="nav-link active" href="quemsomos.html">Quem somos</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link active" href="">Cadastrar sala</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="acessarturma.html">Acessar sala</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="imp.html">Implementar horta</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="agroec.html">Gerenciar horta</a>
          </li>
        </ul>
      </div>
    </div>

    <form class="d-flex">
      <input class="form-control me-2 input" type="search" placeholder="Procure no site" aria-label="Search">
      <button class="btn mybtn" type="submit">Pesquisar</button>
    </form>

  </nav>

  <div class="fundo">
  <div class="container">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img agroec/agro1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img agroec/agro2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img agroec/agro3.jpg" class="d-block w-100" alt="...">
        </div>
        
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
<h2><i>Seja Bem-vindo</i></h2>
<p>
<?php
  session_start();
  echo $_SESSION['PROFESSOR'] ."</br>";
  echo $_SESSION['EMAIL'] . "</br>";

?>
</p>

<br>
<img class="primavesi" src="img agroec/primavesi.jpg">
<p><a href="https://anamariaprimavesi.com.br/wp-content/uploads/2020/01/Cartilha-do-Solo-Como-reconhecer-e-sanar-seus-problemas.pdf"><b>Primavesi e a agroecologia:</b> https://anamariaprimavesi.com.br/wp-content/uploads/2020/01/Cartilha-do-Solo-Como-reconhecer-e-sanar-seus-problemas.pdf</a></p>
<p><a href="https://arca.furg.br/images/stories/producao/agroecologia_short_port.pdf"><b>Altieri e a agroecologia:</b> https://arca.furg.br/images/stories/producao/agroecologia_short_port.pdf</a></p>
<p><a href="https://www.ecycle.com.br/agroecologia/"><b>Segundo eCycle:</b> https://www.ecycle.com.br/agroecologia/</a></p>
<br><br>


<form action="pas.html" method="get">
  <a class="pdf" href="https://drive.google.com/uc?id=1AWOE91i6IjxgVTppO0kHuO6fNIBKMZ5K&export=download">Baixar PDF</a> 
  
  <button type="submit" class="prox" > Próximo</button>
  </form>
  <br>
  <h6><i>Foto de Ana Maria Primavesi</i></h6>
  
</div>

<div class="foot">
  
</div>

<div class="prod">
  <i>Produzido pela Cooperativa Dagnino Primavesi</i>
</div>

</body>

</html>