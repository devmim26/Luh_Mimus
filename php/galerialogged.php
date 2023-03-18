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
  <title>Galeria | Confeitaria Luh Mimu's</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/stylegaleria.css">
  <link rel="stylesheet" href="../css/responsive.css">
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
      <div class="container" class="topo-galeria">
        <i><img src="../images/ban_galeria.png" width="100%"></i>
        <!--fundo-->
      </div>
    </div>
  </div>
  <!--end header-->
  <section class="hidden">
  <div class="container">
    <div class="photo-gallery">
      <div class="container8">
        <div class="menu">
          <nav>
            <a href="#bolos"><img src="../images/icons/bolos.png" width="50px">
              <h1>BOLOS</h1>
            </a>
            <a href="#doces"><img src="../images/icons/doces.png" width="50px">
              <h1>DOCES</h1>
            </a>
            <a href="#salgados"><img src="../images/icons/salgados.png" width="50px">
              <h1>SALGADOS</h1>
            </a>
            <a href="#personalizados"><img src="../images/icons/personalizados.png" width="50px">
              <h1>PERSONALIZADOS</h1>
            </a>
          </nav>
        </div>
     



        <section id="bolos">BOLOS</section>
        <div class="row photos">
          <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="../images/galeria/bolo6.jfif"
              data-lightbox="photos"><img class="img-fluid" src="../images/galeria/bolo6.jfif"></a></div>

          <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="../images/galeria/bolo17.jfif"
              data-lightbox="photos"><img class="img-fluid" src="../images/galeria/bolo17.jfif"></a></div>

          <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="../images/galeria/bolo7.jfif"
              data-lightbox="photos"><img class="img-fluid" src="../images/galeria/bolo7.jfif"></a></div>

          <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="../images/galeria/bolo1.jfif"
              data-lightbox="photos"><img class="img-fluid" src="../images/galeria/bolo1.jfif"></a></div>

          <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="../images/galeria/bolo15.jfif"
              data-lightbox="photos"><img class="img-fluid" src="../images/galeria/bolo15.jfif"></a></div>

          <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="../images/galeria/bolo2.jfif"
              data-lightbox="photos"><img class="img-fluid" src="../images/galeria/bolo2.jfif"></a></div>

          <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="../images/galeria/bolo8.jfif"
              data-lightbox="photos"><img class="img-fluid" src="../images/galeria/bolo8.jfif"></a></div>

          <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="../images/galeria/bolo16.jfif"
              data-lightbox="photos"><img class="img-fluid" src="../images/galeria/bolo16.jfif"></a></div>

          <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="../images/galeria/bolo18.jfif"
              data-lightbox="photos"><img class="img-fluid" src="../images/galeria/bolo18.jfif"></a></div>

          <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="../images/galeria/bolo9.jfif"
              data-lightbox="photos"><img class="img-fluid" src="../images/galeria/bolo9.jfif"></a></div>

          <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="../images/galeria/bolo5.jfif"
              data-lightbox="photos"><img class="img-fluid" src="../images/galeria/bolo5.jfif"></a></div>

          <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="../images/galeria/bolo19.jfif"
              data-lightbox="photos"><img class="img-fluid" src="../images/galeria/bolo19.jfif"></a></div>

        </div>

        <section id="doces">DOCES</section>
        <div class="row photos">
          <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="../images/galeria/doce1.jfif"
              data-lightbox="photos"><img class="img-fluid" src="../images/galeria/doce1.jfif"></a></div>

          <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="../images/galeria/doce6.jfif"
              data-lightbox="photos"><img class="img-fluid" src="../images/galeria/doce6.jfif"></a></div>

          <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="../images/galeria/doce3.jfif"
              data-lightbox="photos"><img class="img-fluid" src="../images/galeria/doce3.jfif"></a></div>

          <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="../images/galeria/doce5.jfif"
              data-lightbox="photos"><img class="img-fluid" src="../images/galeria/doce5.jfif"></a></div>

          <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="../images/galeria/doce9.jfif"
              data-lightbox="photos"><img class="img-fluid" src="../images/galeria/doce9.jfif"></a></div>

          <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="../images/galeria/doce11.jfif"
              data-lightbox="photos"><img class="img-fluid" src="../images/galeria/doce11.jfif"></a></div>

          <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="../images/galeria/doce7.jfif"
              data-lightbox="photos"><img class="img-fluid" src="../images/galeria/doce7.jfif"></a></div>

          <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="../images/galeria/doce8.jfif"
              data-lightbox="photos"><img class="img-fluid" src="../images/galeria/doce8.jfif"></a></div>

          <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="../images/galeria/doce16.jfif"
              data-lightbox="photos"><img class="img-fluid" src="../images/galeria/doce16.jfif"></a></div>

          <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="../images/galeria/doce4.jfif"
              data-lightbox="photos"><img class="img-fluid" src="../images/galeria/doce4.jfif"></a></div>

          <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="../images/galeria/doce20.jfif"
              data-lightbox="photos"><img class="img-fluid" src="../images/galeria/doce20.jfif"></a></div>

          <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="../images/galeria/doce18.jfif"
              data-lightbox="photos"><img class="img-fluid" src="../images/galeria/doce18.jfif"></a></div>

        </div>

        <section id="salgados">SALGADOS</section>
        <div class="row photos">
          <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="../images/galeria/salgado1.jfif"
              data-lightbox="photos"><img class="img-fluid" src="../images/galeria/salgado1.jfif"></a></div>

          <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="../images/galeria/salgados4.jpg"
              data-lightbox="photos"><img class="img-fluid" src="../images/galeria/salgados4.jpg"></a></div>

          <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="../images/galeria/salgado3.jpg"
              data-lightbox="photos"><img class="img-fluid" src="../images/galeria/salgado3.jpg"></a></div>

          <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="../images/galeria/salgado2.jfif"
              data-lightbox="photos"><img class="img-fluid" src="../images/galeria/salgado2.jfif"></a></div>
        </div>

        <section id="personalizados">PERSONALIZADOS</section>
        <div class="row photos">
          <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="../images/galeria/personalizado1.jfif"
              data-lightbox="photos"><img class="img-fluid" src="../images/galeria/personalizado1.jfif"></a></div>

          <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="../images/galeria/personalizado12.jfif"
              data-lightbox="photos"><img class="img-fluid" src="../images/galeria/personalizado12.jfif"></a></div>

          <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="../images/galeria/personalizado4.jfif"
              data-lightbox="photos"><img class="img-fluid" src="../images/galeria/personalizado4.jfif"></a></div>

          <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="../images/galeria/personalizado2.jfif"
              data-lightbox="photos"><img class="img-fluid" src="../images/galeria/personalizado2.jfif"></a></div>

          <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="../images/galeria/personalizado8.jfif"
              data-lightbox="photos"><img class="img-fluid" src="../images/galeria/personalizado8.jfif"></a></div>

          <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="../images/galeria/personalizado7.jfif"
              data-lightbox="photos"><img class="img-fluid" src="../images/galeria/personalizado7.jfif"></a></div>

          <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="../images/galeria/personalizado11.jfif"
              data-lightbox="photos"><img class="img-fluid" src="../images/galeria/personalizado11.jfif"></a></div>

          <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="../images/galeria/personalizado9.jfif"
              data-lightbox="photos"><img class="img-fluid" src="../images/galeria/personalizado9.jfif"></a></div>
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
              <p><a class="politica" href="politica.html">Política de privacidade</a></p>

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