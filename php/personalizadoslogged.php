<?php

if(!isset($_SESSION)){
    session_start();
}


include 'conn_banco.php';

include 'protect.php';


?>

<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
  <title>Personalizados | Confeitaria Luh Mimu's</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/stylecardapio.css">
  <link rel="stylesheet" href="../css/responsive.css">

</head>

<body>
  <div class="container-fluid">
    <!--start header-->
    

    <?php  include '../includes/headerlogged.php';?>

    <!--start menu-->
    <div class="header-menu">
      <nav class="navbar navbar-expand-sm navbar-light ">
        <div class="container">

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
              <input class="form-control me-sm-2" type="text" placeholder="O que você procura?">
              <button class="btn btn-outline my-2 my-sm-0" type="submit"><svg xmlns="http://www.w3.org/2000/svg"
                  width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                  <path
                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg></button>
            </form>
          </div>
        </div>
      </nav>
      <div class="container" class="topo-galeria">
        <i><img src="../images/bannerperso.png" width="100%"></i>
        <!--fundo-->
      </div>

      <!--MODALS-->
      <div class="modal fade" id="productView" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content overflow-hidden border-0">
            <div class="modal-body p-0">
              <div class="row align-items-stretch">
                <div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center"
                    href="../images/produtos/pirulito.png" data-gallery="gallery1" data-glightbox="Red digital smartwatch">
                    <img src="../images/produtos/pirulito.png" alt="" width="450px"></a><a class="glightbox d-none"
                    href="img/product-5-alt-1.jpg" data-gallery="gallery1"
                    data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none"
                    href="img/product-5-alt-2.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a>
                </div>
                <div class="col-lg-6">
                  <div class="p-4 my-md-4">
                    <ul class="list-inline mb-2">
                    </ul>
                    <h2 class="h4">Pirulito de chocolate</h2>
                    <p class="text-muted">RS3,80</p>
                    <p class="text-sm mb-4">Pirulito de chocolate com adesivo personalizado. O preço acima
                      é equivalente á uma unidade de Pirulito de chocolate.
                    </p>
                    <p class=" text-sm mb-0">O pedido deve ser feito com, no mínimo, 5 dias de
                      antecendência. </p>
                    <div class="row align-items-stretch mb-4 gx-0">
                      <div class="col-sm-7">
                        <div class="border d-flex align-items-center justify-content-between py-1 px-3">
                          <span class="small text-uppercase text-gray mr-4 no-select">Quant</span>
                          <div class="quantity">
                            <input class="form-control border-0 shadow-0 p-0" type="number" value="100">
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-5"><a
                          class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0"
                          href="loginpersonalizado.html">Encomendar</a></div>
                    </div><a class="btn btn-link text-dark text-decoration-none p-0" href="#!"><i
                        class="far fa-heart me-2"></i>Favoritar</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="productView1" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content overflow-hidden border-0">
            <div class="modal-body p-0">
              <div class="row align-items-stretch">
                <div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center"
                    href="../images/produtos/chocomaca.png" data-gallery="gallery1" data-glightbox="Red digital smartwatch">
                    <img src="../images/produtos/chocomaca.png" alt="" width="450px"></a><a class="glightbox d-none"
                    href="img/product-5-alt-1.jpg" data-gallery="gallery1"
                    data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none"
                    href="img/product-5-alt-2.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a>
                </div>
                <div class="col-lg-6">
                  <div class="p-4 my-md-4">
                    <ul class="list-inline mb-2">
                    </ul>
                    <h2 class="h4">Chocomaça</h2>
                    <p class="text-muted">RS3,80</p>
                    <p class="text-sm mb-4">Chocomaça personalizada. O preço acima
                      é equivalente á uma unidade de Chocomaça.
                    </p>
                    <p class=" text-sm mb-0">O pedido deve ser feito com, no mínimo, 5 dias de
                      antecendência. </p>
                    <div class="row align-items-stretch mb-4 gx-0">
                      <div class="col-sm-7">
                        <div class="border d-flex align-items-center justify-content-between py-1 px-3">
                          <span class="small text-uppercase text-gray mr-4 no-select">Quant</span>
                          <div class="quantity">

                            <input class="form-control border-0 shadow-0 p-0" type="number" value="100">

                          </div>
                        </div>
                      </div>
                      <div class="col-sm-5"><a
                          class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0"
                          href="loginpersonalizado.html">Encomendar</a></div>
                    </div><a class="btn btn-link text-dark text-decoration-none p-0" href="#!"><i
                        class="far fa-heart me-2"></i>Favoritar</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="productView2" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content overflow-hidden border-0">
            <div class="modal-body p-0">
              <div class="row align-items-stretch">
                <div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center"
                    href="../images/produtos/cupcake.png" data-gallery="gallery1" data-glightbox="Red digital smartwatch">
                    <img src="../images/produtos/cupcake.png" alt="" width="450px"></a><a class="glightbox d-none"
                    href="img/product-5-alt-1.jpg" data-gallery="gallery1"
                    data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none"
                    href="img/product-5-alt-2.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a>
                </div>
                <div class="col-lg-6">
                  <div class="p-4 my-md-4">
                    <ul class="list-inline mb-2">
                    </ul>
                    <h2 class="h4">Cupcake recheado</h2>
                    <p class="text-muted">RS3,80</p>
                    <p class="text-sm mb-4">Cupcake recheado. O preço acima
                      é equivalente á uma unidade de Cupcake recheado.
                    </p>
                    <p class=" text-sm mb-0">O pedido deve ser feito com, no mínimo, 5 dias de
                      antecendência. </p>
                    <div class="row align-items-stretch mb-4 gx-0">
                      <div class="col-sm-7">
                        <div class="border d-flex align-items-center justify-content-between py-1 px-3">
                          <span class="small text-uppercase text-gray mr-4 no-select">Quant</span>
                          <div class="quantity">

                            <input class="form-control border-0 shadow-0 p-0" type="number" value="100">

                          </div>
                        </div>
                      </div>
                      <div class="col-sm-5"><a
                          class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0"
                          href="loginpersonalizado.html">Encomendar</a></div>
                    </div><a class="btn btn-link text-dark text-decoration-none p-0" href="#!"><i
                        class="far fa-heart me-2"></i>Favoritar</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="productView3" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content overflow-hidden border-0">
            <div class="modal-body p-0">
              <div class="row align-items-stretch">
                <div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center"
                    href="../images/produtos/cupcakeplac.png" data-gallery="gallery1" data-glightbox="Red digital smartwatch">
                    <img src="../images/produtos/cupcakeplac.png" alt="" width="450px"></a><a class="glightbox d-none"
                    href="img/product-5-alt-1.jpg" data-gallery="gallery1"
                    data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none"
                    href="img/product-5-alt-2.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a>
                </div>
                <div class="col-lg-6">
                  <div class="p-4 my-md-4">
                    <ul class="list-inline mb-2">
                    </ul>
                    <h2 class="h4">Cupcake recheado com plaquinha</h2>
                    <p class="text-muted">RS3,80</p>
                    <p class="text-sm mb-4">Cupcake Recheado com plaquinha em vários sabores. O preço acima
                      é equivalente á uma unidade de Cupcake Recheado com plaquinha.
                    </p>
                    <p class=" text-sm mb-0">O pedido deve ser feito com, no mínimo, 5 dias de
                      antecendência. </p>
                    <div class="row align-items-stretch mb-4 gx-0">
                      <div class="col-sm-7">
                        <div class="border d-flex align-items-center justify-content-between py-1 px-3">
                          <span class="small text-uppercase text-gray mr-4 no-select">Quant</span>
                          <div class="quantity">
                            <input class="form-control border-0 shadow-0 p-0" type="number" value="100">
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-5"><a
                          class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0"
                          href="loginpersonalizado.html">Encomendar</a></div>
                    </div><a class="btn btn-link text-dark text-decoration-none p-0" href="#!"><i
                        class="far fa-heart me-2"></i>Favoritar</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="productView4" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content overflow-hidden border-0">
            <div class="modal-body p-0">
              <div class="row align-items-stretch">
                <div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center"
                    href="../images/produtos/portaretrato.png" data-gallery="gallery1" data-glightbox="Red digital smartwatch">
                    <img src="../images/produtos/portaretrato.png" alt="" width="450px"></a><a class="glightbox d-none"
                    href="img/product-5-alt-1.jpg" data-gallery="gallery1"
                    data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none"
                    href="img/product-5-alt-2.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a>
                </div>
                <div class="col-lg-6">
                  <div class="p-4 my-md-4">
                    <ul class="list-inline mb-2">
                    </ul>
                    <h2 class="h4">Porta retrado</h2>
                    <p class="text-muted">RS3,80</p>
                    <p class="text-sm mb-4">Porta retrado personalizado. O preço acima
                      é equivalente á uma unidade de Porta retrado.
                    </p>
                    <p class=" text-sm mb-0">O pedido deve ser feito com, no mínimo, 5 dias de
                      antecendência. </p>
                    <div class="row align-items-stretch mb-4 gx-0">
                      <div class="col-sm-7">
                        <div class="border d-flex align-items-center justify-content-between py-1 px-3">
                          <span class="small text-uppercase text-gray mr-4 no-select">Quant</span>
                          <div class="quantity">
                            <input class="form-control border-0 shadow-0 p-0" type="number" value="100">
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-5"><a
                          class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0"
                          href="loginpersonalizado.html">Encomendar</a></div>
                    </div><a class="btn btn-link text-dark text-decoration-none p-0" href="#!"><i
                        class="far fa-heart me-2"></i>Favoritar</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="productView5" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content overflow-hidden border-0">
            <div class="modal-body p-0">
              <div class="row align-items-stretch">
                <div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center"
                    href="../images/produtos/cone.png" data-gallery="gallery1" data-glightbox="Red digital smartwatch">
                    <img src="../images/produtos/cone.png" alt="" width="450px"></a><a class="glightbox d-none"
                    href="img/product-5-alt-1.jpg" data-gallery="gallery1"
                    data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none"
                    href="img/product-5-alt-2.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a>
                </div>
                <div class="col-lg-6">
                  <div class="p-4 my-md-4">
                    <ul class="list-inline mb-2">
                    </ul>
                    <h2 class="h4">Mini cone</h2>
                    <p class="text-muted">RS3,80</p>
                    <p class="text-sm mb-4">Mini cone em vários sabores. O preço acima
                      é equivalente á uma unidade de Mini cone.
                    </p>
                    <p class=" text-sm mb-0">O pedido deve ser feito com, no mínimo, 5 dias de
                      antecendência. </p>
                    <div class="row align-items-stretch mb-4 gx-0">
                      <div class="col-sm-7">
                        <div class="border d-flex align-items-center justify-content-between py-1 px-3">
                          <span class="small text-uppercase text-gray mr-4 no-select">Quant</span>
                          <div class="quantity">

                            <input class="form-control border-0 shadow-0 p-0" type="number" value="100">

                          </div>
                        </div>
                      </div>
                      <div class="col-sm-5"><a
                          class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0"
                          href="loginpersonalizado.html">Encomendar</a></div>
                    </div><a class="btn btn-link text-dark text-decoration-none p-0" href="#!"><i
                        class="far fa-heart me-2"></i>Favoritar</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="productView6" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content overflow-hidden border-0">
            <div class="modal-body p-0">
              <div class="row align-items-stretch">
                <div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center"
                    href="../images/produtos/barra.png" data-gallery="gallery1" data-glightbox="Red digital smartwatch">
                    <img src="../images/produtos/barra.png" alt="" width="450px"></a><a class="glightbox d-none"
                    href="img/product-5-alt-1.jpg" data-gallery="gallery1"
                    data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none"
                    href="img/product-5-alt-2.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a>
                </div>
                <div class="col-lg-6">
                  <div class="p-4 my-md-4">
                    <ul class="list-inline mb-2">
                    </ul>
                    <h2 class="h4">Barra de chocolate</h2>
                    <p class="text-muted">RS3,80</p>
                    <p class="text-sm mb-4">Barra de chocolate em vários sabores. O preço acima
                      é equivalente á uma unidade de Barra de chocolate.
                    </p>
                    <p class=" text-sm mb-0">O pedido deve ser feito com, no mínimo, 5 dias de
                      antecendência. </p>
                    <div class="row align-items-stretch mb-4 gx-0">
                      <div class="col-sm-7">
                        <div class="border d-flex align-items-center justify-content-between py-1 px-3">
                          <span class="small text-uppercase text-gray mr-4 no-select">Quant</span>
                          <div class="quantity">

                            <input class="form-control border-0 shadow-0 p-0" type="number" value="100">

                          </div>
                        </div>
                      </div>
                      <div class="col-sm-5"><a
                          class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0"
                          href="loginpersonalizado.html">Encomendar</a></div>
                    </div><a class="btn btn-link text-dark text-decoration-none p-0" href="#!"><i
                        class="far fa-heart me-2"></i>Favoritar</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="productView7" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content overflow-hidden border-0">
            <div class="modal-body p-0">
              <div class="row align-items-stretch">
                <div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center"
                    href="../images/produtos/colher.png" data-gallery="gallery1" data-glightbox="Red digital smartwatch">
                    <img src="../images/produtos/colher.png" alt="" width="450px"></a><a class="glightbox d-none"
                    href="img/product-5-alt-1.jpg" data-gallery="gallery1"
                    data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none"
                    href="img/product-5-alt-2.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a>
                </div>
                <div class="col-lg-6">
                  <div class="p-4 my-md-4">
                    <ul class="list-inline mb-2">
                    </ul>
                    <h2 class="h4">Colher de chocolate c/ doce</h2>
                    <p class="text-muted">RS3,80</p>
                    <p class="text-sm mb-4">Colher de chocolate c/ doce em vários sabores. O preço acima
                      é equivalente á uma unidade de Colher de chocolate c/ doce.
                    </p>
                    <p class=" text-sm mb-0">O pedido deve ser feito com, no mínimo, 5 dias de
                      antecendência. </p>
                    <div class="row align-items-stretch mb-4 gx-0">
                      <div class="col-sm-7">
                        <div class="border d-flex align-items-center justify-content-between py-1 px-3">
                          <span class="small text-uppercase text-gray mr-4 no-select">Quant</span>
                          <div class="quantity">

                            <input class="form-control border-0 shadow-0 p-0" type="number" value="100">

                          </div>
                        </div>
                      </div>
                      <div class="col-sm-5"><a
                          class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0"
                          href="loginpersonalizado.html">Encomendar</a></div>
                    </div><a class="btn btn-link text-dark text-decoration-none p-0" href="#!"><i
                        class="far fa-heart me-2"></i>Favoritar</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="productView8" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content overflow-hidden border-0">
            <div class="modal-body p-0">
              <div class="row align-items-stretch">
                <div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center"
                    href="../images/produtos/brownieperso.png" data-gallery="gallery1" data-glightbox="Red digital smartwatch">
                    <img src="../images/produtos/brownieperso.png" alt="" width="450px"></a><a class="glightbox d-none"
                    href="img/product-5-alt-1.jpg" data-gallery="gallery1"
                    data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none"
                    href="img/product-5-alt-2.jpg" data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a>
                </div>
                <div class="col-lg-6">
                  <div class="p-4 my-md-4">
                    <ul class="list-inline mb-2">
                    </ul>
                    <h2 class="h4">Brownie trufado personalizado</h2>
                    <p class="text-muted">RS3,80</p>
                    <p class="text-sm mb-4">Brownie em vários sabores e adesivos personalizados. O preço acima
                      é equivalente á uma unidade de Mini Tortinha.
                    </p>
                    <p class=" text-sm mb-0">O pedido deve ser feito com, no mínimo, 5 dias de
                      antecendência. </p>
                    <div class="row align-items-stretch mb-4 gx-0">
                      <div class="col-sm-7">
                        <div class="border d-flex align-items-center justify-content-between py-1 px-3">
                          <span class="small text-uppercase text-gray mr-4 no-select">Quant</span>
                          <div class="quantity">

                            <input class="form-control border-0 shadow-0 p-0" type="number" value="100">

                          </div>
                        </div>
                      </div>
                      <div class="col-sm-5"><a
                          class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0"
                          href="loginpersonalizado.html">Encomendar</a></div>
                    </div><a class="btn btn-link text-dark text-decoration-none p-0" href="#!"><i
                        class="far fa-heart me-2"></i>Favoritar</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!--end header-->
      <div class="cardapio">
        <!--início da sessão de bolos-->
        <div class="bolos">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-5">
                <div class="title">
                  <h1 class="mb-3">PERSONALIZADOS</h1>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="owl-carousel active_course owl-loaded owl-drag">
                  <div class="owl-stage-outer">
                    <div class="owl-item active" style="width: 330px; ">
                      <div class="single_course">
                        <div class="course_head">
                          <a href="#productView" data-bs-toggle="modal"> <img class="img-fluid"
                              src="../images/produtos/pirulito.png" alt="" /></a>
                        </div>
                        <div class="course_content">
                          <span class="price">R$6,50</span>
                          <span class="tag mb-4 d-inline-block">Unidade</span>
                          <h4 class="mb-3">
                            <a href="#productView" data-bs-toggle="modal">Pirulito de chocolate</a>
                          </h4>
                          <p>
                            Pirulito de chocolate com adesivo em papel.
                            <br>
                            Pedido mínimo 10 unidades.
                          </p>
                          <div
                            class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                            <div class="mt-lg-0 mt-3">
                            </div>
                          </div>
                          <div class="btns-cardapio">
                            <a class="btn btn-outline-dark" href="./loginpersonalizado.html" role="button">Encomendar</a>
                          </div>

                          <div class="btn_fav">
                            <a class="nav-link d-sm-flex align-items-sm-center add-cart cart53" href="#">
                              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                class="bi bi-heart" viewBox="0 0 16 16">
                                <path
                                  d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                              </svg>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="owl-item active" style="width: 330px;">
                      <div class="single_course">
                        <div class="course_head">
                          <a href="#productView1" data-bs-toggle="modal"> <img class="img-fluid"
                              src="../images/produtos/chocomaca.png" alt="" /></a>
                        </div>
                        <div class="course_content">
                          <span class="price">R$10</span>
                          <span class="tag mb-4 d-inline-block">Unidade</span>
                          <h4 class="mb-3">
                            <a href="#productView1" data-bs-toggle="modal">Chocomaça</a>
                          </h4>
                          <p>
                            Maça com chocolate emabalada em adesivo de papel.
                            <br>
                            Pedido mínimo 10 unidades.
                          </p>
                          <div
                            class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                            <div class="mt-lg-0 mt-3">
                            </div>
                          </div>
                          <div class="btns-cardapio">
                            <a class="btn btn-outline-dark" href="./loginpersonalizado.html" role="button">Encomendar</a>
                          </div>
                          <div class="btn_fav">
                            <a class="nav-link d-sm-flex align-items-sm-center add-cart cart54" href="#">
                              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                class="bi bi-heart" viewBox="0 0 16 16">
                                <path
                                  d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                              </svg>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="owl-item cloned active" style="width: 330px;">
                      <div class="single_course">
                        <div class="course_head">
                          <a href="#productView2" data-bs-toggle="modal"> <img class="img-fluid"
                              src="../images/produtos/cupcake.png" alt="" /></a>
                        </div>
                        <div class="course_content">
                          <span class="price">R$5,95</span>
                          <span class="tag mb-4 d-inline-block">Unidade</span>
                          <h4 class="mb-3">
                            <a href="#productView2" data-bs-toggle="modal">Cupcake Recheado</a>
                          </h4>
                          <p>
                            Cupcake tradicional recheado.
                            <br>
                            Pedido mínimo 10 unidades.
                            <br>
                            <br>
                          </p>
                          <div
                            class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                            <div class="mt-lg-0 mt-3">
                            </div>
                          </div>
                          <div class="btns-cardapio">
                            <a class="btn btn-outline-dark" href="./loginpersonalizado.html" role="button">Encomendar</a>
                          </div>
                          <div class="btn_fav">
                            <a class="nav-link d-sm-flex align-items-sm-center add-cart cart55" href="#">
                              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                class="bi bi-heart" viewBox="0 0 16 16">
                                <path
                                  d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                              </svg>
                            </a>
                          </div>
                        </div>

                      </div>
                    </div>

                    <div class="owl-item active" style="width: 330px;">
                      <div class="single_course">
                        <div class="course_head">
                          <a href="#productView3" data-bs-toggle="modal"> <img class="img-fluid"
                              src="../images/produtos/cupcakeplac.png" alt="" /></a>
                        </div>
                        <div class="course_content">
                          <span class="price">R$6,99</span>
                          <span class="tag mb-4 d-inline-block">Unidade</span>
                          <h4 class="mb-3">
                            <a href="#productView3" data-bs-toggle="modal">Cupcake Recheado com Plaquinha</a>
                          </h4>
                          <p>
                            Cupcake tradicional recheado com plaquinha personalizada.
                            <br>
                            Pedido mínimo 10 unidades.
                          </p>
                          <div
                            class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                            <div class="mt-lg-0 mt-3">
                            </div>
                          </div>

                          <div class="btns-cardapio">
                            <a class="btn btn-outline-dark" href="./loginpersonalizado.html" role="button">Encomendar</a>
                          </div>
                          <div class="btn_fav">
                            <a class="nav-link d-sm-flex align-items-sm-center add-cart cart56" href="#">
                              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                class="bi bi-heart" viewBox="0 0 16 16">
                                <path
                                  d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                              </svg>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="owl-item active" style="width: 330px;">
                      <div class="single_course">
                        <div class="course_head">
                          <a href="#productView4" data-bs-toggle="modal"> <img class="img-fluid"
                              src="../images/produtos/portaretrato.png" alt="" /></a>
                        </div>
                        <div class="course_content">
                          <span class="price">R$8,95</span>
                          <span class="tag mb-4 d-inline-block">Unidade</span>
                          <h4 class="mb-3">
                            <a href="#productView4" data-bs-toggle="modal">Porta Retrato</a>
                          </h4>
                          <p>
                            Porta retrato de chocolate personalizado com nome.
                            <br>
                            Pedido mínimo 10 unidades.
                          </p>
                          <br>
                          <div
                            class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                            <div class="mt-lg-0 mt-3">
                            </div>
                          </div>
                          <div class="btns-cardapio">
                            <a class="btn btn-outline-dark" href="./loginpersonalizado.html" role="button">Encomendar</a>
                          </div>
                          <div class="btn_fav">
                            <a class="nav-link d-sm-flex align-items-sm-center add-cart cart57" href="#">
                              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                class="bi bi-heart" viewBox="0 0 16 16">
                                <path
                                  d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                              </svg>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="owl-item cloned active" style="width: 330px;">
                      <div class="single_course">
                        <div class="course_head">
                          <a href="#productView5 " data-bs-toggle="modal"> <img class="img-fluid"
                              src="../images/produtos/cone.png" alt="" /></a>
                        </div>
                        <div class="course_content">
                          <span class="price">R$7,80</span>
                          <span class="tag mb-4 d-inline-block">Unidade</span>
                          <h4 class="mb-3">
                            <a href="#productView5">Mini Cone</a>
                          </h4>
                          <p>
                            Mini cone na caixa personalizada.
                            <br>
                            Pedido mínimo 10 unidades.
                          </p>
                          <br>
                          <br>
                          <div
                            class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                            <div class="mt-lg-0 mt-3">
                            </div>
                          </div>
                          <div class="btns-cardapio">
                            <a class="btn btn-outline-dark" href="./loginpersonalizado.html" role="button">Encomendar</a>
                          </div>
                          <div class="btn_fav">
                            <a class="nav-link d-sm-flex align-items-sm-center add-cart cart58" href="#">
                              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                class="bi bi-heart" viewBox="0 0 16 16">
                                <path
                                  d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
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
                          <a href="#productView6" data-bs-toggle="modal"> <img class="img-fluid"
                              src="../images/produtos/barra.png" alt="" /></a>
                        </div>
                        <div class="course_content">
                          <span class="price">R$8,99</span>
                          <span class="tag mb-4 d-inline-block">Unidade</span>
                          <h4 class="mb-3">
                            <a href="#productView6" data-bs-toggle="modal">Barra de Chocolate</a>
                          </h4>
                          <p>
                            Barra de chocolate personalizada.
                            <br>
                            Pedido mínimo 10 unidades.
                          </p>
                          <br>
                          <div
                            class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                            <div class="mt-lg-0 mt-3">
                            </div>
                          </div>
                          <div class="btns-cardapio">
                            <a class="btn btn-outline-dark" href="./loginpersonalizado.html" role="button">Encomendar</a>
                          </div>
                          <div class="btn_fav">
                            <a class="nav-link d-sm-flex align-items-sm-center add-cart cart59" href="#">
                              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                class="bi bi-heart" viewBox="0 0 16 16">
                                <path
                                  d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                              </svg>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="owl-item active" style="width: 330px;">
                      <div class="single_course">
                        <div class="course_head">
                          <a href="#productView7" data-bs-toggle="modal"> <img class="img-fluid"
                              src="../images/produtos/colher.png" alt="" /></a>
                        </div>
                        <div class="course_content">
                          <span class="price">R$4,50</span>
                          <span class="tag mb-4 d-inline-block">Unidade</span>
                          <h4 class="mb-3">
                            <a href="#productView7" data-bs-toggle="modal">Colher de chocolate c/ doce</a>
                          </h4>
                          <p>
                            Colher de chocolate já com docinho.
                          </p>
                          <div
                            class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                            <div class="mt-lg-0 mt-3">
                            </div>
                          </div>

                          <div class="btns-cardapio">
                            <a class="btn btn-outline-dark" href="./loginpersonalizado.html" role="button">Encomendar</a>
                          </div>
                          <div class="btn_fav">
                            <a class="nav-link d-sm-flex align-items-sm-center add-cart cart60" href="#">
                              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                class="bi bi-heart" viewBox="0 0 16 16">
                                <path
                                  d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
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
                          <a href="#productView8" data-bs-toggle="modal"> <img class="img-fluid"
                              src="../images/produtos/brownieperso.png" alt="" /></a>
                        </div>
                        <div class="course_content">
                          <span class="price">R$8,99</span>
                          <span class="tag mb-4 d-inline-block">Unidade</span>
                          <h4 class="mb-3">
                            <a href="#productView8">Brownie Trufado</a>
                          </h4>
                          <p>
                            Brownie trufado com adesivos.
                            <br>
                            Pedido mínimo 10 unidades.
                          </p>
                          <br>
                          <div
                            class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                            <div class="mt-lg-0 mt-3">
                            </div>
                          </div>
                          <div class="btns-cardapio">
                            <a class="btn btn-outline-dark" href="./loginpersonalizado.html" role="button">Encomendar</a>
                          </div>
                          <div class="btn_fav">
                            <a class="nav-link d-sm-flex align-items-sm-center add-cart cart61" href="#">
                              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                                class="bi bi-heart" viewBox="0 0 16 16">
                                <path
                                  d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
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
    <br>
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
  <script src="../js/new.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"></script>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>