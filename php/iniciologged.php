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
  <title>Home | Confeitaria Luh Mimu's</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/stylegaleria.css">
  <link rel="stylesheet" href="./css/responsive.css">
  <script defer src="../js/app.js"></script>
</head>

<body>
  <div class="container-fluid">
    <!--start header-->
    

    <?php  include '../includes/headerlogged.php';?>

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
    </div>
  </div>
  <!--end header-->


  <!--start banners-->
  <div class="container">
    <div class="banners">
      <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
      <!-- Custom styles for this template -->
      <link href="carousel.css" rel="stylesheet">
      <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
            aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <a href="boloslogged.php">
            <div class="slide1">
              <div class="carousel-item active banner1">
              </div>
            </div>
          </a>
          <a href="doceslogged.php">
            <div class="slide2">
              <div class="carousel-item">
              </div>
          </a>

          <div class="container">

          </div>
        </div>
        <a href="boloslogged.php">
          <div class="slide3">
            <div class="carousel-item">
            </div>
        </a>
        <div class="container">

        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  </div>
  <!--Start Carrosel de sabores-->
  <section class="hidden">
    <div class="sabores">
      <h2 class="featurette-heading fw-normal lh-1">NOSSOS SABORES</h2>
      <div id="carouselExampleControls" class="carousel slide d-none d-sm-block" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="card-wrapper">
              <div class="card" style="width: 18rem;">
                <a href="../html/salgados.html">
                  <img src="../images/Frame 6.png" class="card-img-top" alt="..."> </a>
                <div class="card-body">
                  <a href="../html/salgados.html" class="btn btn-primary">SALGADOS</a>
                </div>
              </div>
              <div class="card" style="width: 18rem;">
                <a href="../html/bolos.html"><img src="../images/Frame 5.png" class="card-img-top" alt="..."></a>
                <div class="card-body">
                  <a href="../html/bolos.html" class="btn btn-primary">BOLOS</a>
                </div>
              </div>
              <div class="card" style="width: 18rem;">
                <a href="../html/doces.html"><img src="../images/Frame 7.png" class="card-img-top" alt="..."></a>
                <div class="card-body">
                  <a href="../html/doces.html" class="btn btn-primary">DOCES</a>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card-wrapper">
              <div class="card" style="width: 18rem;">
                <a href="../html/personalizados.html">
                  <img src="../images/Frame 8.png" class="card-img-top" alt="..."></a>
                <div class="card-body">
                  <a href="../html/personalizados.html" class="btn btn-primary">PERSONALIZADOS</a>
                </div>
              </div>
              <div class="card" style="width: 18rem;">
                <a href="../html/kitfesta.html"><img src="../images/Frame 9.png" class="card-img-top" alt="..."></a>
                <div class="card-body">
                  <a href="../html/kitfesta.html" class="btn btn-primary">KIT FESTA</a>
                </div>
              </div>

            </div>
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
  </section>
  <!--carrosel 2-->
  <section class="hidden">
    <div class="sabores">

      <div id="carouselExampleControlsSmallScreen" class="carousel slide d-sm-none" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="card-wrapper">
              <div class="card" style="width: 18rem;">
                <img src="../images/Frame 6.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <a href="./html/salgados.html" class="btn btn-primary">SALGADOS</a>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card-wrapper">
              <div class="card" style="width: 18rem;">
                <img src="../images/Frame 5.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <a href="../html/personalizados.html" class="btn btn-primary">BOLOS</a>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card-wrapper">
              <div class="card" style="width: 18rem;">
                <img src="../images/Frame 7.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <a href="../html/personalizados.html" class="btn btn-primary">DOCES</a>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card-wrapper">
              <div class="card" style="width: 18rem;">
                <img src="../images/Frame 8.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <a href="../html/personalizados.html" class="btn btn-primary">PERSONALIZADOS</a>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card-wrapper">
              <div class="card" style="width: 18rem;">
                <img src="../images/Frame 9.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <a href="../html/kitfesta.html" class="btn btn-primary">KIT FESTA</a>
                </div>
              </div>
            </div>

          </div>


        </div>
  
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsSmallScreen"
    data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsSmallScreen"
    data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  </div>
  </div>
</section>
  <section class="hidden">
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Por que nos escolher?</h2>
        <p class="lead">Porque para a Luh Mimu’s a parte mais importante do nosso negócio é <br> garantir a felicidade
          de nossa
          equipe e a
          satisfação de
          nossos clientes, <br> trazendo diversos produtos deliciosos
          com os ingredientes selecionados. <br>Esperamos que
          sua melhor
          experiência seja aqui! </p>
      </div>

      <div class="col-md-5 escolha">
        <img src="../images/escolha.svg" width="80%">
        <br>
        <a href="https://storyset.com/event">Event illustrations by Storyset</a>
      </div>

    </div>
  </section>


  <hr class="featurette-divider">
  <section class="hidden">
    <div class="row featurette">
      <h2 class="featurette-heading fw-normal lh-1">MAIS VENDIDOS</h2>
      <br>
    </div>

    <div class="container">
      <div class="maisvendidos">
        <div class="card logo hidden" style="width: 18rem;">

          <img src="../images/top1.jpeg" class="card-img-top" alt="...">
          <a href="#" class="btn btn-primary btnfav"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
              fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
              <path
                d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
            </svg></a>
          <div class="card-body">
            <h5 class="card-title">Bolo de brigadeiro com morango</h5>
            <p class="card-text">Recheio de brigadeiro 50% com morangos. A decoração é escolha do cliente.</p>


          </div>
        </div>
        <div class="card logo hidden" style="width: 18rem;">

          <img src="../images/top2.jfif" class="card-img-top" alt="...">
          <a href="#" class="btn btn-primary btnfav"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
              fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
              <path
                d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
            </svg></a>
          <div class="card-body">
            <h5 class="card-title">Brownie Trufado</h5>
            <p class="card-text">Em diversos sabores, massa úmida e cobertura cremosa.</p>


          </div>
        </div>
        <div class="card logo hidden" style="width: 18rem;">

          <img src="../images/top3.jfif" class="card-img-top" alt="...">
          <a href="#" class="btn btn-primary btnfav"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
              fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
              <path
                d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
            </svg></a>
          <div class="card-body">
            <h5 class="card-title">Bolo de Ninho com morango</h5>
            <p class="card-text">Recheio creme de Ninho com morangos. A decoração é escolha do cliente.</p>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
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
              <li>WhatsApp: 967800867</li>
              <li>luhmimuss@outlook.com</li>
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
      <hr>

      <div class="copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="voltartopo">
                <a href="#">Voltar ao topo <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                    fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                      d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
                  </svg></a>
              </div>

              <p>© Copyright 2022 - Luh Mimu’s Confeitaria<a href="https://html.design/"></a></p>
              <p><a class="politica" href="./html/politica.html">Política de privacidade</a></p>
              <a class="btn" href="https://www.instagram.com/luhmimus/" target="_blank"><i
                  class="fab fa-instagram"></i></a>
              <a class="btn" href="https://www.facebook.com/luhmimuss" target="_blank"><i
                  class="fab fa-facebook"></i></a>
              <a class="btn" href="https://www.tiktok.com/@luhmimus?is_from_webapp=1&sender_device=pc"
                target="_blank"><i class="fab fa-tiktok"></i></a>
              <a class="btn" href="https://wa.me/5511990257616" target="_blank"><i class="fab fa-whatsapp"></i></a>
            </div>
          </div>
        </div>
      </div>
  </footer>
  <!--end footer-->

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  </div>

</body>

</html>