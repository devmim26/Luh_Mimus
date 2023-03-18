<?php

if(!isset($_SESSION)){
    session_start();
}

include 'protect.php';

?>

<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
  <title>Bolos | Confeitaria Luh Mimu's</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/stylecardapio.css">
  <link rel="stylesheet" href="../css/responsive.css">


</head>

<body>
<script defer src="../js/app.js"></script>
<script src="../js/pesquisarToPHP.js"></script>
  <!-- header -->
  <?php
  include '../includes/headerlogged.php';
  ?>

  <!-- menu -->
 <!--start menu-->
 <div class="header-menu">
 <nav class="navbar navbar-expand-sm navbar-light ">
        <div class="container">
        <script defer src="../js/app.js"></script>
        <script src="../js/pesquisarToPHP.js"></script>
          <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav me-auto mt-2 mt-lg-0 snip1143">
              <li class="nav-item">
                <a class="nav-link active" href="iniciologged.php" aria-current="page">Home<span
                    class="visually-hidden">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="galerialogged.php" aria-current="page">Galeria<span
                    class="visually-hidden">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="quemsomoslogged.php" aria-current="page">Quem somos<span
                    class="visually-hidden">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="contatologged.php" aria-current="page">Contato<span
                    class="visually-hidden">(current)</span></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">Produtos</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                  <a class="dropdown-item" href="boloslogged.php">Bolos</a>
                  <a class="dropdown-item" href="doceslogged.php">Doces</a>
                  <a class="dropdown-item" href="salgadoslogged.php">Salgados</a>
                  <a class="dropdown-item" href="personalizadoslogged.php">Personalizados</a>
                  <a class="dropdown-item" href="kitfestalogged.php">Kit Festa</a>
                </div>
              </li>
            </ul>
            <form class="d-flex my-2 my-lg-0">
              <input class="form-control me-sm-2" type="search" value="" id="search" onchange="openPage()" placeholder="O que você procura?">
              <button class="btn btn-outline my-2 my-sm-0" type="submit" onclick="openPage()"><svg xmlns="http://www.w3.org/2000/svg"
                  width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                  <path
                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg></button>
            </form>
          </div>
        </div>
      </nav>

  <!-- banner -->
  <div class="topo-galeria container">
        <i><img src="../images/bolobanner.png" width="100%"></i>
        <!--fundo-->
  </div>

  <!--modal-->
  <?php
  include '../includes/modalBolo.php';
  ?>
 

  <div class="cardapio">
    <!--início da sessão de bolos-->
    <div class="bolos">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="title">
              <h1 class="mb-3">BOLOS</h1>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="owl-carousel active_course owl-loaded owl-drag ">
              <div class="owl-stage-outer">
                <div class="owl-item active product-overlay" style="width: 330px; ">
                  <div class="single_course">
                    <div class="course_head">

                      <a href="#productView" data-bs-toggle="modal"> <img class="img-fluid" src="../images/produtos2/bolobrig.png" alt="" /></a>
                    </div>
                    <div class="course_content">
                      <span class="price">R$ 50</span>
                      <span class="tag mb-4 d-inline-block">O quilo</span>
                      <h4 class="mb-3">
                        <a href="#productView" data-bs-toggle="modal"">Brigadeiro</a>
                      </h4>
                      Bolo de chocolate recheado com brigadeiro 50% cacau. Pedido com 5 dias de antecedencia.
                      <div
                        class=" course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                          <div class="mt-lg-0 mt-3">
                          </div>
                    </div>
                    <div class="btns-cardapio">
                      <a class="btn btn-outline-dark" href="encomendar.php" role="button">Encomendar</a>
                    </div>
                    <div class="btn_fav">
                      <a class="nav-link d-sm-flex align-items-sm-center" href="./favoritovazio.html">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                          <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="owl-item active" style="width: 330px;">
                <div class="single_course">
                  <div class="course_head">
                    <a href="#productView2" data-bs-toggle="modal"> <img class="img-fluid" src="../images/produtos2/bolopresti.png" alt="" /></a>
                  </div>
                  <div class="course_content">
                    <span class="price">R$ 50</span>
                    <span class="tag mb-4 d-inline-block">O quilo</span>
                    <h4 class="mb-3">
                      <a href="#productView2" data-bs-toggle="modal">Prestígio</a>
                    </h4>
                    <p>
                      Bolo com massa branca, recheado com beijinho. A cobertura é de chocolate com coco
                      polvilhado.
                    </p>
                    <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                      <div class="mt-lg-0 mt-3">
                      </div>
                    </div>
                    <div class="btns-cardapio">
                      <a class="btn btn-outline-dark" href="./encomendar.html" role="button">Encomendar</a>
                    </div>
                    <div class="btn_fav">
                      <a class="nav-link d-sm-flex align-items-sm-center" href="./favoritovazio.html">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                          <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="owl-item cloned active" style="width: 330px;">
                <div class="single_course">
                  <div class="course_head">
                    <a href="#productView3" data-bs-toggle="modal"> <img class="img-fluid" src="../images/produtos2/bolodocel.png" alt="" /></a>
                  </div>
                  <div class="course_content">
                    <span class="price">R$ 50</span>
                    <span class="tag mb-4 d-inline-block">o quilo</span>
                    <h4 class="mb-3">
                      <a href="#productView3" data-bs-toggle="modal">Doce de leite</a>
                    </h4>
                    <p>
                      Bolo com massa branca, recheado com doce de leite. A cobertura é de caramelo.
                    </p>
                    <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                      <div class="mt-lg-0 mt-3">
                      </div>
                    </div>
                    <div class="btns-cardapio">
                      <a class="btn btn-outline-dark" href="./encomendar.html" role="button">Encomendar</a>
                    </div>
                    <div class="btn_fav">
                      <a class="nav-link d-sm-flex align-items-sm-center" href="./favoritovazio.html">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                          <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="owl-item active" style="width: 330px;">
                <div class="single_course">
                  <div class="course_head">
                    <a href="#productView4" data-bs-toggle="modal"> <img class="img-fluid" src="../images/produtos2/bolosensacao.png" alt="" /></a>
                  </div>
                  <div class="course_content">
                    <span class="price">R$ 50</span>
                    <span class="tag mb-4 d-inline-block">O quilo</span>
                    <h4 class="mb-3">
                      <a href="#productView4" data-bs-toggle="modal">Sensação (Morango e chocolate)</a>
                    </h4>
                    <p>Bolo de chocolate recheado com brigadeiro e morangos.</p>
                    <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                      <div class="mt-lg-0 mt-3">
                      </div>
                    </div>

                    <div class="btns-cardapio">
                      <a class="btn btn-outline-dark" href="./encomendar.html" role="button">Encomendar</a>
                    </div>
                    <div class="btn_fav">
                      <a class="nav-link d-sm-flex align-items-sm-center" href="./favoritovazio.html">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                          <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="owl-item active" style="width: 330px;">
                <div class="single_course">
                  <div class="course_head">
                    <a href="#productView5" data-bs-toggle="modal"> <img class="img-fluid" src="../images/produtos2/boloninho.png" alt="" /></a>
                  </div>
                  <div class="course_content">
                    <span class="price">R$ 50</span>
                    <span class="tag mb-4 d-inline-block">O quilo</span>
                    <h4 class="mb-3">
                      <a href="#productView5" data-bs-toggle="modal">Mousse de chocolate branco</a>
                    </h4>
                    <p>
                      Bolo recheado com mousse de chocolate branco.
                    </p>
                    <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                      <div class="mt-lg-0 mt-3">
                      </div>
                    </div>
                    <div class="btns-cardapio">
                      <a class="btn btn-outline-dark" href="./encomendar.html" role="button">Encomendar</a>
                    </div>
                    <div class="btn_fav">
                      <a class="nav-link d-sm-flex align-items-sm-center" href="./favoritovazio.html">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                          <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="owl-item cloned active" style="width: 330px;">
                <div class="single_course">
                  <div class="course_head">
                    <a href="#productView6" data-bs-toggle="modal"> <img class="img-fluid" src="../images/produtos2/bolomousse.png" alt="" /></a>
                  </div>
                  <div class="course_content">
                    <span class="price">R$ 50</span>
                    <span class="tag mb-4 d-inline-block">o quilo</span>
                    <h4 class="mb-3">
                      <a href="#productView6" data-bs-toggle="modal">Mousse de chocolate 50%</a>
                    </h4>
                    <p>
                      Bolo recheado com mousse de chocolate meio amargo.
                    </p>
                    <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                      <div class="mt-lg-0 mt-3">
                      </div>
                    </div>
                    <div class="btns-cardapio">
                      <a class="btn btn-outline-dark" href="./encomendar.html" role="button">Encomendar</a>
                    </div>
                    <div class="btn_fav">
                      <a class="nav-link d-sm-flex align-items-sm-center" href="./favoritovazio.html">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                          <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>

              <!--início da sessão de bolos semi especiais-->

              <h6>luhmimus</h6>
              <div class="owl-item active" style="width: 330px;">
                <div class="single_course">
                  <div class="course_head">
                    <a href="#productView7" data-bs-toggle="modal"> <img class="img-fluid" src="../images/produtos2/bolobrigm.png" alt="" /></a>
                  </div>
                  <div class="course_content">
                    <span class="price">R$ 59</span>
                    <span class="tag mb-4 d-inline-block">O quilo</span>
                    <h4 class="mb-3">
                      <a href="#productView7" data-bs-toggle="modal">Brigadeiro com morango</a>
                    </h4>
                    <p>
                      Bolo com massa de chocolate e recheio de brigadeiro e morango.
                    <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                      <div class="mt-lg-0 mt-3">
                      </div>
                    </div>
                    <div class="btns-cardapio">
                      <a class="btn btn-outline-dark" href="./encomendar.html" role="button">Encomendar</a>
                    </div>
                    <div class="btn_fav">
                      <a class="nav-link d-sm-flex align-items-sm-center" href="./favoritovazio.html">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                          <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="owl-item active" style="width: 330px;">
                <div class="single_course">
                  <div class="course_head">
                    <a href="#productView8" data-bs-toggle="modal"> <img class="img-fluid" src="../images/produtos2/boloninho.png" alt="" /></a>
                  </div>
                  <div class="course_content">
                    <span class="price">R$ 59</span>
                    <span class="tag mb-4 d-inline-block">O quilo</span>
                    <h4 class="mb-3">
                      <a href="#productView8" data-bs-toggle="modal">Ninho Trufado</a>
                    </h4>
                    <p>
                      Bolo de massa branca e recheado com creme de Ninho (leite em pó) trufado.
                    </p>
                    <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                      <div class="mt-lg-0 mt-3">
                      </div>
                    </div>

                    <div class="btns-cardapio">
                      <a class="btn btn-outline-dark" href="./encomendar.html" role="button">Encomendar</a>
                    </div>
                    <div class="btn_fav">
                      <a class="nav-link d-sm-flex align-items-sm-center" href="./favoritovazio.html">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                          <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="owl-item cloned active" style="width: 330px;">
                <div class="single_course">
                  <div class="course_head">
                    <a href="#productView9" data-bs-toggle="modal"> <img class="img-fluid" src="../images/produtos2/bolochurros.png" alt="" /></a>
                  </div>
                  <div class="course_content">
                    <span class="price">R$ 59</span>
                    <span class="tag mb-4 d-inline-block">o quilo</span>
                    <h4 class="mb-3">
                      <a href="#productView9" data-bs-toggle="modal">Churros</a>
                    </h4>
                    <p>
                      Bolo com massa de chocolate, recheado com doce de leite.
                    </p>
                    <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                      <div class="mt-lg-0 mt-3">
                      </div>
                    </div>
                    <br>
                    <div class="btns-cardapio">
                      <a class="btn btn-outline-dark" href="./encomendar.html" role="button">Encomendar</a>
                    </div>
                    <div class="btn_fav">
                      <a class="nav-link d-sm-flex align-items-sm-center" href="./favoritovazio.html">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                          <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <h6>luhmimus</h6>
              <div class="owl-item active" style="width: 330px;">
                <div class="single_course">
                  <div class="course_head">
                    <a href="#productView10" data-bs-toggle="modal"> <img class="img-fluid" src="../images/produtos2/boloabacaxi.png" alt="" /></a>
                  </div>
                  <div class="course_content">
                    <span class="price">R$ 59</span>
                    <span class="tag mb-4 d-inline-block">O quilo</span>
                    <h4 class="mb-3">
                      <a href="#productView10" data-bs-toggle="modal">Ninho com Abacaxi </a>
                    </h4>
                    <p>
                      Bolo com massa de chocalate, recheado com brigadeiro e morangos.
                    </p>
                    <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                      <div class="mt-lg-0 mt-3">
                      </div>
                    </div>
                    <div class="btns-cardapio">
                      <a class="btn btn-outline-dark" href="./encomendar.html" role="button">Encomendar</a>
                    </div>
                    <div class="btn_fav">
                      <a class="nav-link d-sm-flex align-items-sm-center" href="./favoritovazio.html">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                          <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="owl-item active" style="width: 330px;">
                <div class="single_course">
                  <div class="course_head">
                    <a href="#productView11" data-bs-toggle="modal"> <img class="img-fluid" src="../images/produtos2/boloninhomoran.png" alt="" /></a>
                  </div>
                  <div class="course_content">
                    <span class="price">R$ 59</span>
                    <span class="tag mb-4 d-inline-block">O quilo</span>
                    <h4 class="mb-3">
                      <a href="#productView11" data-bs-toggle="modal">Ninho com morango</a>
                    </h4>
                    <p>
                      Bolo com massa branca, recheado com mousse de chocolate branco.

                    </p>
                    <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                      <div class="mt-lg-0 mt-3">
                      </div>
                    </div>
                    <div class="btns-cardapio">
                      <a class="btn btn-outline-dark" href="./encomendar.html" role="button">Encomendar</a>
                    </div>
                    <div class="btn_fav">
                      <a class="nav-link d-sm-flex align-items-sm-center" href="./favoritovazio.html">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                          <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="owl-item cloned active" style="width: 330px;">
                <div class="single_course">
                  <div class="course_head">
                    <a href="#productView12" data-bs-toggle="modal"> <img class="img-fluid" src="../images/produtos2/bolococoaba.png" alt="" /></a>
                  </div>
                  <div class="course_content">
                    <span class="price">R$ 59</span>
                    <span class="tag mb-4 d-inline-block">o quilo</span>
                    <h4 class="mb-3">
                      <a href="#productView12" data-bs-toggle="modal">Creme de coco com abacaxi</a>
                    </h4>
                    <p>
                      Bolo com massa de chocolate, recheado com mousse de chocolate
                    </p>
                    <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                      <div class="mt-lg-0 mt-3">
                      </div>
                    </div>
                    <div class="btns-cardapio">
                      <a class="btn btn-outline-dark" href="./encomendar.html" role="button">Encomendar</a>
                    </div>
                    <div class="btn_fav">
                      <a class="nav-link d-sm-flex align-items-sm-center" href="./favoritovazio.html">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                          <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <h6>luhmimus</h6>
              <div class="owl-item active" style="width: 330px;">
                <div class="single_course">
                  <div class="course_head">
                    <a href="#productView13" data-bs-toggle="modal"> <img class="img-fluid" src="../images/produtos2/bolomara.png" alt="" /></a>
                  </div>
                  <div class="course_content">
                    <span class="price">R$ 59</span>
                    <span class="tag mb-4 d-inline-block">O quilo</span>
                    <h4 class="mb-3">
                      <a href="#productView13" data-bs-toggle="modal">Brigadeiro de Maracujá Trufado</a>
                    </h4>
                    <p>
                      Bolo com recheio de maracujá trufado de chocolate.
                    <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                      <div class="mt-lg-0 mt-3">
                      </div>
                    </div>
                    <div class="btns-cardapio">
                      <a class="btn btn-outline-dark" href="./encomendar.html" role="button">Encomendar</a>
                    </div>
                    <div class="btn_fav">
                      <a class="nav-link d-sm-flex align-items-sm-center" href="./favoritovazio.html">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                          <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="owl-item active" style="width: 330px;">
                <div class="single_course">
                  <div class="course_head">
                    <a href="#productView14" data-bs-toggle="modal"> <img class="img-fluid" src="../images/produtos2/boloamend.png" alt="" /></a>
                  </div>
                  <div class="course_content">
                    <span class="price">R$ 59</span>
                    <span class="tag mb-4 d-inline-block">O quilo</span>
                    <h4 class="mb-3">
                      <a href="#productView14" data-bs-toggle="modal">Brigadeiro com Amendoim</a>
                    </h4>
                    <p>
                      Bolo com recheio de amendoin e brigadeiro de chocolate.

                    </p>
                    <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                      <div class="mt-lg-0 mt-3">
                      </div>
                    </div>
                    <div class="btns-cardapio">
                      <a class="btn btn-outline-dark" href="./encomendar.html" role="button">Encomendar</a>
                    </div>
                    <div class="btn_fav">
                      <a class="nav-link d-sm-flex align-items-sm-center" href="./favoritovazio.html">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                          <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="owl-item cloned active" style="width: 330px;">
                <div class="single_course">
                  <div class="course_head">
                    <a href="#productView15" data-bs-toggle="modal"> <img class="img-fluid" src="../images/produtos2/boloameixa.png" alt="" /></a>
                  </div>
                  <div class="course_content">
                    <span class="price">R$ 59</span>
                    <span class="tag mb-4 d-inline-block">o quilo</span>
                    <h4 class="mb-3">
                      <a href="#productView15" data-bs-toggle="modal">Doce de leite com Ameixa</a>
                    </h4>
                    <p>
                      Bolo recheado com doce de leite e ameixa.
                    </p>
                    <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                      <div class="mt-lg-0 mt-3">
                      </div>
                    </div>
                    <div class="btns-cardapio">
                      <a class="btn btn-outline-dark" href="./encomendar.html" role="button">Encomendar</a>
                    </div>
                    <div class="btn_fav">
                      <a class="nav-link d-sm-flex align-items-sm-center" href="./favoritovazio.html">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                          <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <h6>luhmimus</h6>
              <div class="owl-item active" style="width: 330px;">
                <div class="single_course">
                  <div class="course_head">
                    <a href="#productView16" data-bs-toggle="modal"> <img class="img-fluid" src="../images/produtos2/bolodoceabacax.png" alt="" /></a>
                  </div>
                  <div class="course_content">
                    <span class="price">R$ 59</span>
                    <span class="tag mb-4 d-inline-block">O quilo</span>
                    <h4 class="mb-3">
                      <a href="#productView16" data-bs-toggle="modal">Doce de leite com Abacaxi</a>
                    </h4>
                    <p>
                      Bolo com recheio de doce de leite e abacaxi.
                    <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                      <div class="mt-lg-0 mt-3">
                      </div>
                    </div>
                    <div class="btns-cardapio">
                      <a class="btn btn-outline-dark" href="./encomendar.html" role="button">Encomendar</a>
                    </div>
                    <div class="btn_fav">
                      <a class="nav-link d-sm-flex align-items-sm-center" href="./favoritovazio.html">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                          <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="owl-item active" style="width: 330px;">
                <div class="single_course">
                  <div class="course_head">
                    <a href="#productView17" data-bs-toggle="modal"> <img class="img-fluid" src="../images/produtos2/bolodoisamor.png" alt="" /></a>
                  </div>
                  <div class="course_content">
                    <span class="price">R$ 59</span>
                    <span class="tag mb-4 d-inline-block">O quilo</span>
                    <h4 class="mb-3">
                      <a href="#productView17" data-bs-toggle="modal">Dois Amores</a>
                    </h4>
                    <p>
                      Bolo com recheio de chocolate branco e chocolate ao leite.
                    </p>
                    <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                      <div class="mt-lg-0 mt-3">
                      </div>
                    </div>
                    <div class="btns-cardapio">
                      <a class="btn btn-outline-dark" href="./encomendar.html" role="button">Encomendar</a>
                    </div>
                    <div class="btn_fav">
                      <a class="nav-link d-sm-flex align-items-sm-center" href="./favoritovazio.html">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                          <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>

              <!--início da sessão de bolos especiais-->

              <h6>luhmimus</h6>
              <div class="owl-item active" style="width: 330px;">
                <div class="single_course">
                  <div class="course_head">
                    <a href="#productView18" data-bs-toggle="modal"> <img class="img-fluid" src="../images/produtos2/bolocafe.png" alt="" /></a>
                  </div>
                  <div class="course_content">
                    <span class="price">R$ 69</span>
                    <span class="tag mb-4 d-inline-block">O quilo</span>
                    <h4 class="mb-3">
                      <a href="#productView18" data-bs-toggle="modal">Café com Chocolate</a>
                    </h4>
                    <p>
                      Bolo de chocolate com recheio de chocolate meio amargo e café.
                    <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                      <div class="mt-lg-0 mt-3">
                      </div>
                    </div>
                    <div class="btns-cardapio">
                      <a class="btn btn-outline-dark" href="./encomendar.html" role="button">Encomendar</a>
                    </div>
                    <div class="btn_fav">
                      <a class="nav-link d-sm-flex align-items-sm-center" href="./favoritovazio.html">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                          <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="owl-item active" style="width: 330px;">
                <div class="single_course">
                  <div class="course_head">
                    <a href="#productView19" data-bs-toggle="modal"> <img class="img-fluid" src="../images/produtos2/bolonozes.png" alt="" /></a>
                  </div>
                  <div class="course_content">
                    <span class="price">R$ 69</span>
                    <span class="tag mb-4 d-inline-block">O quilo</span>
                    <h4 class="mb-3">
                      <a href="#productView19" data-bs-toggle="modal">Trufado de Nozes com Avelã</a>
                    </h4>
                    <p>
                      Bolo com massa branca, recheado com mousse de chocolate branco.
                    </p>
                    <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                      <div class="mt-lg-0 mt-3">
                      </div>
                    </div>
                    <div class="btns-cardapio">
                      <a class="btn btn-outline-dark" href="./encomendar.html" role="button">Encomendar</a>
                    </div>
                    <div class="btn_fav">
                      <a class="nav-link d-sm-flex align-items-sm-center" href="./favoritovazio.html">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                          <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="owl-item cloned active" style="width: 330px;">
                <div class="single_course">
                  <div class="course_head">
                    <a href="#productView20" data-bs-toggle="modal"> <img class="img-fluid" src="../images/produtos2/boloamend.png" alt="" /></a>
                  </div>
                  <div class="course_content">
                    <span class="price">R$ 59</span>
                    <span class="tag mb-4 d-inline-block">o quilo</span>
                    <h4 class="mb-3">
                      <a href="#">Trufado de Ferrero Rocher</a>
                    </h4>
                    <p>
                      Bolo recheado com mousse de chocolate meio amargo.
                    </p>
                    <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                      <div class="mt-lg-0 mt-3">
                      </div>
                    </div>
                    <div class="btns-cardapio">
                      <a class="btn btn-outline-dark" href="./encomendar.html" role="button">Encomendar</a>
                    </div>
                    <div class="btn_fav">
                      <a class="nav-link d-sm-flex align-items-sm-center" href="./favoritovazio.html">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                          <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <h6>luhmimus</h6>
              <div class="owl-item active" style="width: 330px;">
                <div class="single_course">
                  <div class="course_head">
                    <a href="#productView21" data-bs-toggle="modal"> <img class="img-fluid" src="../images/produtos2/bologeleiamor.png" alt="" /></a>
                  </div>
                  <div class="course_content">
                    <span class="price">R$ 69</span>
                    <span class="tag mb-4 d-inline-block">O quilo</span>
                    <h4 class="mb-3">
                      <a href="#productView21" data-bs-toggle="modal">Ninho com Geleia de Morango</a>
                    </h4>
                    <p>
                      Bolo recheado com brigadeiro e morangos.
                    <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                      <div class="mt-lg-0 mt-3">
                      </div>
                    </div>
                    <div class="btns-cardapio">
                      <a class="btn btn-outline-dark" href="./encomendar.html" role="button">Encomendar</a>
                    </div>
                    <div class="btn_fav">
                      <a class="nav-link d-sm-flex align-items-sm-center" href="./favoritovazio.html">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                          <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="owl-item active" style="width: 330px;">
                <div class="single_course">
                  <div class="course_head">
                    <img class="img-fluid" src="../images/produtos2/boloninhomara.png" alt="" />
                  </div>
                  <div class="course_content">
                    <span class="price">R$ 69</span>
                    <span class="tag mb-4 d-inline-block">O quilo</span>
                    <h4 class="mb-3">
                      <a href="#">Ninho com Geleia de Maracujá</a>
                    </h4>
                    <p>
                      Bolo com massa branca, recheado com mousse de chocolate branco.
                    </p>
                    <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                      <div class="mt-lg-0 mt-3">
                      </div>
                    </div>
                    <div class="btns-cardapio">
                      <a class="btn btn-outline-dark" href="./encomendar.html" role="button">Encomendar</a>
                    </div>
                    <div class="btn_fav">
                      <a class="nav-link d-sm-flex align-items-sm-center" href="./favoritovazio.html">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                          <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="owl-item cloned active" style="width: 330px;">
                <div class="single_course">
                  <div class="course_head">
                    <img class="img-fluid" src="../images/produtos2/bolosurpresauva.png" alt="" />
                  </div>
                  <div class="course_content">
                    <span class="price">R$ 69</span>
                    <span class="tag mb-4 d-inline-block">o quilo</span>
                    <h4 class="mb-3">
                      <a href="#">Surpresa de Uva</a>
                    </h4>
                    <p>
                      Bolo com massa de chocolate, recheado com mousse de chocolate meio amargo.
                    </p>
                    <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                      <div class="mt-lg-0 mt-3">
                      </div>
                    </div>
                    <div class="btns-cardapio">
                      <a class="btn btn-outline-dark" href="./encomendar.html" role="button">Encomendar</a>
                    </div>
                    <div class="btn_fav">
                      <a class="nav-link d-sm-flex align-items-sm-center" href="./favoritovazio.html">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                          <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <h6>luhmimus</h6>
              <div class="owl-item active" style="width: 330px;">
                <div class="single_course">
                  <div class="course_head">
                    <img class="img-fluid" src="../images/produtos2/bolosurpresamor.png" alt="" />
                  </div>
                  <div class="course_content">
                    <span class="price">R$ 69</span>
                    <span class="tag mb-4 d-inline-block">O quilo</span>
                    <h4 class="mb-3">
                      <a href="#">Surpresa de Morango</a>
                    </h4>
                    <p>
                      Bolo com massa de chocalate, recheado com brigadeiro e morangos.
                    <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                      <div class="mt-lg-0 mt-3">
                      </div>
                    </div>
                    <div class="btns-cardapio">
                      <a class="btn btn-outline-dark" href="./encomendar.html" role="button">Encomendar</a>
                    </div>
                    <div class="btn_fav">
                      <a class="nav-link d-sm-flex align-items-sm-center" href="./favoritovazio.html">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                          <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="owl-item active" style="width: 330px;">
                <div class="single_course">
                  <div class="course_head">
                    <img class="img-fluid" src="../images/produtos2/bolopacoca.png" alt="" />
                  </div>
                  <div class="course_content">
                    <span class="price">R$ 69</span>
                    <span class="tag mb-4 d-inline-block">O quilo</span>
                    <h4 class="mb-3">
                      <a href="#">Paçoca e Ganache</a>
                    </h4>
                    <p>
                      Bolo crecheado com paçoca e chocolate. A cobertura é de ganache de chocolate meio amargo.

                    </p>
                    <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                      <div class="mt-lg-0 mt-3">
                      </div>
                    </div>
                    <div class="btns-cardapio">
                      <a class="btn btn-outline-dark" href="./encomendar.html" role="button">Encomendar</a>
                    </div>
                    <div class="btn_fav">
                      <a class="nav-link d-sm-flex align-items-sm-center" href="./favoritovazio.html">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                          <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="owl-item cloned active" style="width: 330px;">
                <div class="single_course">
                  <div class="course_head">

                    <img class="img-fluid" src="../images/produtos2/bololimao.png" alt="" />
                  </div>
                  <div class="course_content">
                    <span class="price">R$ 69</span>
                    <span class="tag mb-4 d-inline-block">o quilo</span>
                    <h4 class="mb-3">
                      <a href="#">Creme de Limão</a>
                    </h4>
                    <p>
                      Bolo com massa de chocolate, recheado com mousse de chocolate meio amargo. A cobertura é de
                      chocolate.
                    </p>
                    <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                      <div class="mt-lg-0 mt-3">
                      </div>
                    </div>
                    <div class="btns-cardapio">
                      <a class="btn btn-outline-dark" href="./encomendar.html" role="button">Encomendar</a>
                    </div>
                    <div class="btn_fav">
                      <a class="nav-link d-sm-flex align-items-sm-center" href="./favoritovazio.html">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                          <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  <!--start footer-->
  <footer>
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="inror_box">
              <img src="../images/logorodade.png" alt="logo da confeitaria Luh Mimu's" id="logorodape">
            </div>
          </div>
          <div class="col-md-3">
            <div class="inror_box">
              <h3>Contato</h3>
              <li>WhatsApp: (11) 9 90257616</li>
            </div>
          </div>
          <div class="col-md-3">
            <div class="inror_box">
              <h3>Localização</h3>
              <li>R. Sebastião Amâncio Pinto</li>
              <li>Jardim São Luís</li>
              <li>São Paulo-SP</li>
              <li>05813-090</li>
            </div>
          </div>
          <div class="col-md-3">
            <div class="inror_box">
              <h3>Horário de Funcionamento</h3>
              <li>seg.: 11:00 – 20:30</li>
              <li>ter.: 11:00 – 20:30</li>
              <li>qua.: 11:00 – 20:30</li>
              <li>qui.: 11:00 – 20:30</li>
              <li>sex.: 11:00 – 20:30</li>
              <li>sab.: 11:00 – 20:00</li>
              <li>dom.: Fechado</li>
            </div>
          </div>
        </div>
      </div>
      <br>
      <br>
      <hr>
      <div class="copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <p>© Copyright 2022 - Luh Mimu’s Confeitaria<a href="https://html.design/"></a></p>
              <p><a class="politica" href="politica.html">Política de privacidade</a></p>

              <a class="btn" href="https://www.instagram.com/luhmimus/" target="_blank"><i class="fab fa-instagram"></i></a>
              <a class="btn" href="https://www.facebook.com/luhmimuss" target="_blank"><i class="fab fa-facebook"></i></a>
              <a class="btn" href="https://www.tiktok.com/@luhmimus?is_from_webapp=1&sender_device=pc" target="_blank"><i class="fab fa-tiktok"></i></a>
              <a class="btn" href="https://wa.me/5511990257616" target="_blank"><i class="fab fa-whatsapp"></i></a>
            </div>
          </div>
        </div>
      </div>
  </footer>
  <!--end footer-->

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>