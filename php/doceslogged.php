<?php

if(!isset($_SESSION)){
    session_start();
}


include 'conn_banco.php';

include 'protect.php';


//Selecioa todos os dados da tabela anuncios
$dados_anuncios = $sql->query("SELECT * FROM anuncios");
//calcula o número de linhas, ou seja, a qtd de resgistros
$total = mysqli_num_rows($dados_anuncios);
?>


<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <title>Doces | Confeitaria Luh Mimu's</title>
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
                <i><img src="../images/bannerdoces.png" width="100%"></i>
                <!--fundo-->
            </div>

            <!--MODALS AQUI-->
            <div class="modal fade" id="productView" tabindex="-1">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content overflow-hidden border-0">
                        <a href="#" class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0"></a>
                        <div class="modal-body p-0">
                            <div class="row align-items-stretch">
                                <div class="col-lg-6 p-lg-0"><a
                                        class="glightbox product-view d-block h-100 bg-cover bg-center"
                                        href="../images/produtos2/brigadeiro.png" data-gallery="gallery1"
                                        data-glightbox="Red digital smartwatch"> <img
                                            src="../images/produtos2/brigadeiro.png" alt="" width="450px"></a><a
                                        class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1"
                                        data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none"
                                        href="img/product-5-alt-2.jpg" data-gallery="gallery1"
                                        data-glightbox="Red digital smartwatch"></a></div>
                                <div class="col-lg-6">
                                    <div class="p-4 my-md-4">
                                        <ul class="list-inline mb-2">

                                        </ul>
                                        <h2 class="h4">Brigadeiro</h2>
                                        <p class="text-muted">RS95,00</p>
                                        <p class="text-sm mb-4">Brigadeiro com chocolate 50% de qualidade. O preço acima
                                            é equivalente á um cento de brigadeiro.
                                        </p>
                                        <p class=" text-sm mb-0">O pedido deve ser feito com, no mínimo, 5 dias de
                                            antecendência. </p>
                                        <div class="row align-items-stretch mb-4 gx-0">
                                            <div class="col-sm-7">
                                                <div
                                                    class="border d-flex align-items-center justify-content-between py-1 px-3">
                                                    <span
                                                        class="small text-uppercase text-gray mr-4 no-select">Quant</span>
                                                    <div class="quantity">

                                                        <input class="form-control border-0 shadow-0 p-0" type="number"
                                                            value="100">

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
                        <a href="#" class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0"></a>
                        <div class="modal-body p-0">
                            <div class="row align-items-stretch">
                                <div class="col-lg-6 p-lg-0"><a
                                        class="glightbox product-view d-block h-100 bg-cover bg-center"
                                        href="../images/produtos2/beijinho.png" data-gallery="gallery1"
                                        data-glightbox="Red digital smartwatch"> <img
                                            src="../images/produtos2/Beijinho.png" alt="" width="450px"></a><a
                                        class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1"
                                        data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none"
                                        href="img/product-5-alt-2.jpg" data-gallery="gallery1"
                                        data-glightbox="Red digital smartwatch"></a></div>
                                <div class="col-lg-6">
                                    <div class="p-4 my-md-4">
                                        <ul class="list-inline mb-2">

                                        </ul>
                                        <h2 class="h4">Beijinho</h2>
                                        <p class="text-muted">RS95,00</p>
                                        <p class="text-sm mb-4">Docinho de coco tradicional. O preço acima
                                            é equivalente á um cento de Beijinho.
                                        </p>
                                        <p class=" text-sm mb-0">O pedido deve ser feito com, no mínimo, 5 dias de
                                            antecendência. </p>
                                        <div class="row align-items-stretch mb-4 gx-0">
                                            <div class="col-sm-7">
                                                <div
                                                    class="border d-flex align-items-center justify-content-between py-1 px-3">
                                                    <span
                                                        class="small text-uppercase text-gray mr-4 no-select">Quant</span>
                                                    <div class="quantity">

                                                        <input class="form-control border-0 shadow-0 p-0" type="number"
                                                            value="100">

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
                        <a href="#" class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0"></a>
                        <div class="modal-body p-0">
                            <div class="row align-items-stretch">
                                <div class="col-lg-6 p-lg-0"><a
                                        class="glightbox product-view d-block h-100 bg-cover bg-center"
                                        href="../images/produtos2/doisamores.png" data-gallery="gallery1"
                                        data-glightbox="Red digital smartwatch"> <img
                                            src="../images/produtos2/doisamores.png" alt="" width="450px"></a><a
                                        class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1"
                                        data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none"
                                        href="img/product-5-alt-2.jpg" data-gallery="gallery1"
                                        data-glightbox="Red digital smartwatch"></a></div>
                                <div class="col-lg-6">
                                    <div class="p-4 my-md-4">
                                        <ul class="list-inline mb-2">

                                        </ul>
                                        <h2 class="h4">Dois Amores</h2>
                                        <p class="text-muted">RS100,00</p>
                                        <p class="text-sm mb-4">Dois Amores, com metade do docinho branca e outra preta. O preço acima é equivalente á um cento de Dois Amores.
                                        </p>
                                        <p class=" text-sm mb-0">O pedido deve ser feito com, no mínimo, 5 dias de
                                            antecendência. </p>
                                        <div class="row align-items-stretch mb-4 gx-0">
                                            <div class="col-sm-7">
                                                <div
                                                    class="border d-flex align-items-center justify-content-between py-1 px-3">
                                                    <span
                                                        class="small text-uppercase text-gray mr-4 no-select">Quant</span>
                                                    <div class="quantity">

                                                        <input class="form-control border-0 shadow-0 p-0" type="number"
                                                            value="100">

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
                        <a href="#" class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0"></a>
                        <div class="modal-body p-0">
                            <div class="row align-items-stretch">
                                <div class="col-lg-6 p-lg-0"><a
                                        class="glightbox product-view d-block h-100 bg-cover bg-center"
                                        href="../images/produtos2/bichope.png" data-gallery="gallery1"
                                        data-glightbox="Red digital smartwatch"> <img
                                            src="../images/produtos2/bichope.png" alt="" width="450px"></a><a
                                        class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1"
                                        data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none"
                                        href="img/product-5-alt-2.jpg" data-gallery="gallery1"
                                        data-glightbox="Red digital smartwatch"></a></div>
                                <div class="col-lg-6">
                                    <div class="p-4 my-md-4">
                                        <ul class="list-inline mb-2">

                                        </ul>
                                        <h2 class="h4">Bicho de pé</h2>
                                        <p class="text-muted">RS99,00</p>
                                        <p class="text-sm mb-4">Docinho de morango, enrolado no açúcar.
                                        </p>
                                        <p class=" text-sm mb-0">O pedido deve ser feito com, no mínimo, 5 dias de
                                            antecendência. </p>
                                        <div class="row align-items-stretch mb-4 gx-0">
                                            <div class="col-sm-7">
                                                <div
                                                    class="border d-flex align-items-center justify-content-between py-1 px-3">
                                                    <span
                                                        class="small text-uppercase text-gray mr-4 no-select">Quant</span>
                                                    <div class="quantity">

                                                        <input class="form-control border-0 shadow-0 p-0" type="number"
                                                            value="100">

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
                        <a href="#" class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0"></a>
                        <div class="modal-body p-0">
                            <div class="row align-items-stretch">
                                <div class="col-lg-6 p-lg-0"><a
                                        class="glightbox product-view d-block h-100 bg-cover bg-center"
                                        href="../images/produtos2/ninho.png" data-gallery="gallery1"
                                        data-glightbox="Red digital smartwatch"> <img
                                            src="../images/produtos2/ninho.png" alt="" width="450px"></a><a
                                        class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1"
                                        data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none"
                                        href="img/product-5-alt-2.jpg" data-gallery="gallery1"
                                        data-glightbox="Red digital smartwatch"></a></div>
                                <div class="col-lg-6">
                                    <div class="p-4 my-md-4">
                                        <ul class="list-inline mb-2">

                                        </ul>
                                        <h2 class="h4">Ninho com Nutella</h2>
                                        <p class="text-muted">RS130,00</p>
                                        <p class="text-sm mb-4">Ninho com Nutella de verdade. O preço acima
                                            é equivalente á um cento de Ninho com Nutella.
                                        </p>
                                        <p class=" text-sm mb-0">O pedido deve ser feito com, no mínimo, 5 dias de
                                            antecendência. </p>
                                        <div class="row align-items-stretch mb-4 gx-0">
                                            <div class="col-sm-7">
                                                <div
                                                    class="border d-flex align-items-center justify-content-between py-1 px-3">
                                                    <span
                                                        class="small text-uppercase text-gray mr-4 no-select">Quant</span>
                                                    <div class="quantity">

                                                        <input class="form-control border-0 shadow-0 p-0" type="number"
                                                            value="100">

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
                        <a href="#" class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0"></a>
                        <div class="modal-body p-0">
                            <div class="row align-items-stretch">
                                <div class="col-lg-6 p-lg-0"><a
                                        class="glightbox product-view d-block h-100 bg-cover bg-center"
                                        href="../images/produtos2/churros.png" data-gallery="gallery1"
                                        data-glightbox="Red digital smartwatch"> <img
                                            src="../images/produtos2/churros.png" alt="" width="450px"></a><a
                                        class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1"
                                        data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none"
                                        href="img/product-5-alt-2.jpg" data-gallery="gallery1"
                                        data-glightbox="Red digital smartwatch"></a></div>
                                <div class="col-lg-6">
                                    <div class="p-4 my-md-4">
                                        <ul class="list-inline mb-2">

                                        </ul>
                                        <h2 class="h4">Brigadeiro Churro</h2>
                                        <p class="text-muted">RS125,00</p>
                                        <p class="text-sm mb-4">Brigadeiro de churros com canela e doce de leite. O preço acima é equivalente á um cento de brigadeiro.
                                        </p>
                                        <p class=" text-sm mb-0">O pedido deve ser feito com, no mínimo, 5 dias de
                                            antecendência. </p>
                                        <div class="row align-items-stretch mb-4 gx-0">
                                            <div class="col-sm-7">
                                                <div
                                                    class="border d-flex align-items-center justify-content-between py-1 px-3">
                                                    <span
                                                        class="small text-uppercase text-gray mr-4 no-select">Quant</span>
                                                    <div class="quantity">

                                                        <input class="form-control border-0 shadow-0 p-0" type="number"
                                                            value="100">

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
                        <a href="#" class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0"></a>
                        <div class="modal-body p-0">
                            <div class="row align-items-stretch">
                                <div class="col-lg-6 p-lg-0"><a
                                        class="glightbox product-view d-block h-100 bg-cover bg-center"
                                        href="../images/produtos2/ferrero.png" data-gallery="gallery1"
                                        data-glightbox="Red digital smartwatch"> <img
                                            src="../images/produtos2/ferrero.png" alt="" width="450px"></a><a
                                        class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1"
                                        data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none"
                                        href="img/product-5-alt-2.jpg" data-gallery="gallery1"
                                        data-glightbox="Red digital smartwatch"></a></div>
                                <div class="col-lg-6">
                                    <div class="p-4 my-md-4">
                                        <ul class="list-inline mb-2">

                                        </ul>
                                        <h2 class="h4">Brigadeiro Ferrero Rocher</h2>
                                        <p class="text-muted">RS128,00</p>
                                        <p class="text-sm mb-4">Brigadeiro de Ferrero, enrolado no amendoim. O preço acima é equivalente á um cento de brigadeiro.
                                        </p>
                                        <p class=" text-sm mb-0">O pedido deve ser feito com, no mínimo, 5 dias de
                                            antecendência. </p>
                                        <div class="row align-items-stretch mb-4 gx-0">
                                            <div class="col-sm-7">
                                                <div
                                                    class="border d-flex align-items-center justify-content-between py-1 px-3">
                                                    <span
                                                        class="small text-uppercase text-gray mr-4 no-select">Quant</span>
                                                    <div class="quantity">

                                                        <input class="form-control border-0 shadow-0 p-0" type="number"
                                                            value="100">

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
                        <a href="#" class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0"></a>
                        <div class="modal-body p-0">
                            <div class="row align-items-stretch">
                                <div class="col-lg-6 p-lg-0"><a
                                        class="glightbox product-view d-block h-100 bg-cover bg-center"
                                        href="../images/produtos2/pacoca.png" data-gallery="gallery1"
                                        data-glightbox="Red digital smartwatch"> <img
                                            src="../images/produtos2/pacoca.png" alt="" width="450px"></a><a
                                        class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1"
                                        data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none"
                                        href="img/product-5-alt-2.jpg" data-gallery="gallery1"
                                        data-glightbox="Red digital smartwatch"></a></div>
                                <div class="col-lg-6">
                                    <div class="p-4 my-md-4">
                                        <ul class="list-inline mb-2">

                                        </ul>
                                        <h2 class="h4">Brigadeiro de Paçoca</h2>
                                        <p class="text-muted">RS115,00</p>
                                        <p class="text-sm mb-4">Brigadeiro "Paçoquita" de amendoim. O preço acima
                                            é equivalente á um cento de brigadeiro.
                                        </p>
                                        <p class=" text-sm mb-0">O pedido deve ser feito com, no mínimo, 5 dias de
                                            antecendência. </p>
                                        <div class="row align-items-stretch mb-4 gx-0">
                                            <div class="col-sm-7">
                                                <div
                                                    class="border d-flex align-items-center justify-content-between py-1 px-3">
                                                    <span
                                                        class="small text-uppercase text-gray mr-4 no-select">Quant</span>
                                                    <div class="quantity">

                                                        <input class="form-control border-0 shadow-0 p-0" type="number"
                                                            value="100">

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
                        <a href="#" class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0"></a>
                        <div class="modal-body p-0">
                            <div class="row align-items-stretch">
                                <div class="col-lg-6 p-lg-0"><a
                                        class="glightbox product-view d-block h-100 bg-cover bg-center"
                                        href="../images/produtos2/brigmorango.png" data-gallery="gallery1"
                                        data-glightbox="Red digital smartwatch"> <img
                                            src="../images/produtos2/brigmorango.png" alt="" width="450px"></a><a
                                        class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1"
                                        data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none"
                                        href="img/product-5-alt-2.jpg" data-gallery="gallery1"
                                        data-glightbox="Red digital smartwatch"></a></div>
                                <div class="col-lg-6">
                                    <div class="p-4 my-md-4">
                                        <ul class="list-inline mb-2">

                                        </ul>
                                        <h2 class="h4">Brigadeiro com Morango</h2>
                                        <p class="text-muted">RS128,00</p>
                                        <p class="text-sm mb-4">Brigadeiro com morango. O preço acima
                                            é equivalente á um cento de brigadeiro.
                                        </p>
                                        <p class=" text-sm mb-0">O pedido deve ser feito com, no mínimo, 5 dias de
                                            antecendência. </p>
                                        <div class="row align-items-stretch mb-4 gx-0">
                                            <div class="col-sm-7">
                                                <div
                                                    class="border d-flex align-items-center justify-content-between py-1 px-3">
                                                    <span
                                                        class="small text-uppercase text-gray mr-4 no-select">Quant</span>
                                                    <div class="quantity">

                                                        <input class="form-control border-0 shadow-0 p-0" type="number"
                                                            value="100">

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

            <div class="modal fade" id="productView9" tabindex="-1">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content overflow-hidden border-0">
                        <a href="#" class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0"></a>
                        <div class="modal-body p-0">
                            <div class="row align-items-stretch">
                                <div class="col-lg-6 p-lg-0"><a
                                        class="glightbox product-view d-block h-100 bg-cover bg-center"
                                        href="../images/produtos2/uva.png" data-gallery="gallery1"
                                        data-glightbox="Red digital smartwatch"> <img
                                            src="../images/produtos2/uva.png" alt="" width="450px"></a><a
                                        class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1"
                                        data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none"
                                        href="img/product-5-alt-2.jpg" data-gallery="gallery1"
                                        data-glightbox="Red digital smartwatch"></a></div>
                                <div class="col-lg-6">
                                    <div class="p-4 my-md-4">
                                        <ul class="list-inline mb-2">

                                        </ul>
                                        <h2 class="h4">Supresa de Uva</h2>
                                        <p class="text-muted">RS140,00</p>
                                        <p class="text-sm mb-4">Supresa de Uva. O preço acima
                                            é equivalente á um cento de Supresa de Uva.
                                        </p>
                                        <p class=" text-sm mb-0">O pedido deve ser feito com, no mínimo, 5 dias de
                                            antecendência. </p>
                                        <div class="row align-items-stretch mb-4 gx-0">
                                            <div class="col-sm-7">
                                                <div
                                                    class="border d-flex align-items-center justify-content-between py-1 px-3">
                                                    <span
                                                        class="small text-uppercase text-gray mr-4 no-select">Quant</span>
                                                    <div class="quantity">

                                                        <input class="form-control border-0 shadow-0 p-0" type="number"
                                                            value="100">

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

            <div class="modal fade" id="productView10" tabindex="-1">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content overflow-hidden border-0">
                        <a href="#" class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0"></a>
                        <div class="modal-body p-0">
                            <div class="row align-items-stretch">
                                <div class="col-lg-6 p-lg-0"><a
                                        class="glightbox product-view d-block h-100 bg-cover bg-center"
                                        href="../images/produtos2/nozes.png" data-gallery="gallery1"
                                        data-glightbox="Red digital smartwatch"> <img
                                            src="../images/produtos2/nozes.png" alt="" width="450px"></a><a
                                        class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1"
                                        data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none"
                                        href="img/product-5-alt-2.jpg" data-gallery="gallery1"
                                        data-glightbox="Red digital smartwatch"></a></div>
                                <div class="col-lg-6">
                                    <div class="p-4 my-md-4">
                                        <ul class="list-inline mb-2">

                                        </ul>
                                        <h2 class="h4">Brigadeiro de Nozes</h2>
                                        <p class="text-muted">RS180,00</p>
                                        <p class="text-sm mb-4">Brigadeiro de Nozes, de alta qualidade. O preço acima
                                            é equivalente á um cento de brigadeiro.
                                        </p>
                                        <p class=" text-sm mb-0">O pedido deve ser feito com, no mínimo, 5 dias de
                                            antecendência. </p>
                                        <div class="row align-items-stretch mb-4 gx-0">
                                            <div class="col-sm-7">
                                                <div
                                                    class="border d-flex align-items-center justify-content-between py-1 px-3">
                                                    <span
                                                        class="small text-uppercase text-gray mr-4 no-select">Quant</span>
                                                    <div class="quantity">

                                                        <input class="form-control border-0 shadow-0 p-0" type="number"
                                                            value="100">

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

            <div class="modal fade" id="productView11" tabindex="-1">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content overflow-hidden border-0">
                        <a href="#" class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0"></a>
                        <div class="modal-body p-0">
                            <div class="row align-items-stretch">
                                <div class="col-lg-6 p-lg-0"><a
                                        class="glightbox product-view d-block h-100 bg-cover bg-center"
                                        href="../images/produtos/brownie.png" data-gallery="gallery1"
                                        data-glightbox="Red digital smartwatch"> <img
                                            src="../images/produtos/brownie.png" alt="" width="450px"></a><a
                                        class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1"
                                        data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none"
                                        href="img/product-5-alt-2.jpg" data-gallery="gallery1"
                                        data-glightbox="Red digital smartwatch"></a></div>
                                <div class="col-lg-6">
                                    <div class="p-4 my-md-4">
                                        <ul class="list-inline mb-2">

                                        </ul>
                                        <h2 class="h4">Brownie</h2>
                                        <p class="text-muted">RS3,00</p>
                                        <p class="text-sm mb-4">Mini brownie feito com chocolate fino. O preço acima
                                            é equivalente á uma unidade de brownie.
                                        </p>
                                        <p class=" text-sm mb-0">O pedido deve ser feito com, no mínimo, 5 dias de
                                            antecendência. </p>
                                        <div class="row align-items-stretch mb-4 gx-0">
                                            <div class="col-sm-7">
                                                <div
                                                    class="border d-flex align-items-center justify-content-between py-1 px-3">
                                                    <span
                                                        class="small text-uppercase text-gray mr-4 no-select">Quant</span>
                                                    <div class="quantity">

                                                        <input class="form-control border-0 shadow-0 p-0" type="number"
                                                            value="100">

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

            <div class="modal fade" id="productView12" tabindex="-1">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content overflow-hidden border-0">
                        <a href="#" class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0"></a>
                        <div class="modal-body p-0">
                            <div class="row align-items-stretch">
                                <div class="col-lg-6 p-lg-0"><a
                                        class="glightbox product-view d-block h-100 bg-cover bg-center"
                                        href="../images/produtos/camarfeu.png" data-gallery="gallery1"
                                        data-glightbox="Red digital smartwatch"> <img
                                            src="../images/produtos/camarfeu.png" alt="" width="450px"></a><a
                                        class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1"
                                        data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none"
                                        href="img/product-5-alt-2.jpg" data-gallery="gallery1"
                                        data-glightbox="Red digital smartwatch"></a></div>
                                <div class="col-lg-6">
                                    <div class="p-4 my-md-4">
                                        <ul class="list-inline mb-2">

                                        </ul>
                                        <h2 class="h4">Camafeu de Nozes</h2>
                                        <p class="text-muted">RS3,80</p>
                                        <p class="text-sm mb-4">Camafeu de Nozes, muito elegante. O preço acima é equivalente á uma unidade de Camafeu de Nozes.
                                        </p>
                                        <p class=" text-sm mb-0">O pedido deve ser feito com, no mínimo, 5 dias de
                                            antecendência. </p>
                                        <div class="row align-items-stretch mb-4 gx-0">
                                            <div class="col-sm-7">
                                                <div
                                                    class="border d-flex align-items-center justify-content-between py-1 px-3">
                                                    <span
                                                        class="small text-uppercase text-gray mr-4 no-select">Quant</span>
                                                    <div class="quantity">

                                                        <input class="form-control border-0 shadow-0 p-0" type="number"
                                                            value="100">

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

            <div class="modal fade" id="productView13" tabindex="-1">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content overflow-hidden border-0">
                        <a href="#" class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0"></a>
                        <div class="modal-body p-0">
                            <div class="row align-items-stretch">
                                <div class="col-lg-6 p-lg-0"><a
                                        class="glightbox product-view d-block h-100 bg-cover bg-center"
                                        href="../images/produtos/torta.png" data-gallery="gallery1"
                                        data-glightbox="Red digital smartwatch"> <img
                                            src="../images/produtos/torta.png" alt="" width="450px"></a><a
                                        class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1"
                                        data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none"
                                        href="img/product-5-alt-2.jpg" data-gallery="gallery1"
                                        data-glightbox="Red digital smartwatch"></a></div>
                                <div class="col-lg-6">
                                    <div class="p-4 my-md-4">
                                        <ul class="list-inline mb-2">
                                        </ul>
                                        <h2 class="h4">Mini Tortinha</h2>
                                        <p class="text-muted">RS3,80</p>
                                        <p class="text-sm mb-4">Mini Tortinha em vários sabores, como morango, limão, ninho com morango, brigadeiro e churros. O preço acima
                                            é equivalente á uma unidade de Mini Tortinha.
                                        </p>
                                        <p class=" text-sm mb-0">O pedido deve ser feito com, no mínimo, 5 dias de
                                            antecendência. </p>
                                        <div class="row align-items-stretch mb-4 gx-0">
                                            <div class="col-sm-7">
                                                <div
                                                    class="border d-flex align-items-center justify-content-between py-1 px-3">
                                                    <span
                                                        class="small text-uppercase text-gray mr-4 no-select">Quant</span>
                                                    <div class="quantity">

                                                        <input class="form-control border-0 shadow-0 p-0" type="number"
                                                            value="100">

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

            <div class="modal fade" id="productView14" tabindex="-1">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content overflow-hidden border-0">
                        <a href="#" class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0"></a>
                        <div class="modal-body p-0">
                            <div class="row align-items-stretch">
                                <div class="col-lg-6 p-lg-0"><a
                                        class="glightbox product-view d-block h-100 bg-cover bg-center"
                                        href="../images/produtos/morango.png" data-gallery="gallery1"
                                        data-glightbox="Red digital smartwatch"> <img
                                            src="../images/produtos/morango.png" alt="" width="450px"></a><a
                                        class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1"
                                        data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none"
                                        href="img/product-5-alt-2.jpg" data-gallery="gallery1"
                                        data-glightbox="Red digital smartwatch"></a></div>
                                <div class="col-lg-6">
                                    <div class="p-4 my-md-4">
                                        <ul class="list-inline mb-2">

                                        </ul>
                                        <h2 class="h4">Morango com Chocolate</h2>
                                        <p class="text-muted">RS3,50</p>
                                        <p class="text-sm mb-4">Morango com Chocolate de qualidade. O preço acima
                                            é equivalente á uma unidade de Morango com Chocolate.
                                        </p>
                                        <p class=" text-sm mb-0">O pedido deve ser feito com, no mínimo, 5 dias de
                                            antecendência. </p>
                                        <div class="row align-items-stretch mb-4 gx-0">
                                            <div class="col-sm-7">
                                                <div
                                                    class="border d-flex align-items-center justify-content-between py-1 px-3">
                                                    <span
                                                        class="small text-uppercase text-gray mr-4 no-select">Quant</span>
                                                    <div class="quantity">

                                                        <input class="form-control border-0 shadow-0 p-0" type="number"
                                                            value="100">

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

            <div class="modal fade" id="productView15" tabindex="-1">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content overflow-hidden border-0">
                        <a href="#" class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0"></a>
                        <div class="modal-body p-0">
                            <div class="row align-items-stretch">
                                <div class="col-lg-6 p-lg-0"><a
                                        class="glightbox product-view d-block h-100 bg-cover bg-center"
                                        href="../images/produtos/trufa.png" data-gallery="gallery1"
                                        data-glightbox="Red digital smartwatch"> <img
                                            src="../images/produtos/trufa.png" alt="" width="450px"></a><a
                                        class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1"
                                        data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none"
                                        href="img/product-5-alt-2.jpg" data-gallery="gallery1"
                                        data-glightbox="Red digital smartwatch"></a></div>
                                <div class="col-lg-6">
                                    <div class="p-4 my-md-4">
                                        <ul class="list-inline mb-2">

                                        </ul>
                                        <h2 class="h4">Mini Trufa</h2>
                                        <p class="text-muted">RS3,00</p>
                                        <p class="text-sm mb-4">Trufa com chocolate de qualidade. O preço acima
                                            é equivalente á uma unidade de Trufa.
                                        </p>
                                        <p class=" text-sm mb-0">O pedido deve ser feito com, no mínimo, 5 dias de
                                            antecendência. </p>
                                        <div class="row align-items-stretch mb-4 gx-0">
                                            <div class="col-sm-7">
                                                <div
                                                    class="border d-flex align-items-center justify-content-between py-1 px-3">
                                                    <span
                                                        class="small text-uppercase text-gray mr-4 no-select">Quant</span>
                                                    <div class="quantity">

                                                        <input class="form-control border-0 shadow-0 p-0" type="number"
                                                            value="100">

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

            <div class="modal fade" id="productView16" tabindex="-1">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content overflow-hidden border-0">
                        <a href="#" class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0"></a>
                        <div class="modal-body p-0">
                            <div class="row align-items-stretch">
                                <div class="col-lg-6 p-lg-0"><a
                                        class="glightbox product-view d-block h-100 bg-cover bg-center"
                                        href="../images/produtos/bemcasado.png" data-gallery="gallery1"
                                        data-glightbox="Red digital smartwatch"> <img
                                            src="../images/produtos/bemcasado.png" alt="" width="450px"></a><a
                                        class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1"
                                        data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none"
                                        href="img/product-5-alt-2.jpg" data-gallery="gallery1"
                                        data-glightbox="Red digital smartwatch"></a></div>
                                <div class="col-lg-6">
                                    <div class="p-4 my-md-4">
                                        <ul class="list-inline mb-2">

                                        </ul>
                                        <h2 class="h4">Bem Casado</h2>
                                        <p class="text-muted">RS4,00</p>
                                        <p class="text-sm mb-4">Bem Casado tradicional. O preço acima
                                            é equivalente á uma unidade de bem Casado.
                                        </p>
                                        <p class=" text-sm mb-0">O pedido deve ser feito com, no mínimo, 5 dias de
                                            antecendência. </p>
                                        <div class="row align-items-stretch mb-4 gx-0">
                                            <div class="col-sm-7">
                                                <div
                                                    class="border d-flex align-items-center justify-content-between py-1 px-3">
                                                    <span
                                                        class="small text-uppercase text-gray mr-4 no-select">Quant</span>
                                                    <div class="quantity">

                                                        <input class="form-control border-0 shadow-0 p-0" type="number"
                                                            value="100">

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

            <div class="modal fade" id="productView17" tabindex="-1">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content overflow-hidden border-0">
                        <a href="#" class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0"></a>
                        <div class="modal-body p-0">
                            <div class="row align-items-stretch">
                                <div class="col-lg-6 p-lg-0"><a
                                        class="glightbox product-view d-block h-100 bg-cover bg-center"
                                        href="../images/produtos/brigadeiro.png" data-gallery="gallery1"
                                        data-glightbox="Red digital smartwatch"> <img
                                            src="../images/produtos/brigadeiro.png" alt="" width="450px"></a><a
                                        class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1"
                                        data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none"
                                        href="img/product-5-alt-2.jpg" data-gallery="gallery1"
                                        data-glightbox="Red digital smartwatch"></a></div>
                                <div class="col-lg-6">
                                    <div class="p-4 my-md-4">
                                        <ul class="list-inline mb-2">

                                        </ul>
                                        <h2 class="h4">Brigadeiro</h2>
                                        <p class="text-muted">RS95,00</p>
                                        <p class="text-sm mb-4">Brigadeiro com chocolate 50% de qualidade. O preço acima
                                            é equivalente á um cento de brigadeiro.
                                        </p>
                                        <p class=" text-sm mb-0">O pedido deve ser feito com, no mínimo, 5 dias de
                                            antecendência. </p>
                                        <div class="row align-items-stretch mb-4 gx-0">
                                            <div class="col-sm-7">
                                                <div
                                                    class="border d-flex align-items-center justify-content-between py-1 px-3">
                                                    <span
                                                        class="small text-uppercase text-gray mr-4 no-select">Quant</span>
                                                    <div class="quantity">

                                                        <input class="form-control border-0 shadow-0 p-0" type="number"
                                                            value="100">

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
                                    <h1 class="mb-3">DOCES</h1>
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
                                                    <a href="#productView" data-bs-toggle="modal"> <img
                                                        class="img-fluid" src="../images/produtos/brigadeiro.png"
                                                        alt="" /></a>
                                                </div>
                                                <div class="course_content">
                                                    <span class="price">R$ 95</span>
                                                    <span class="tag mb-4 d-inline-block">O cento</span>
                                                    <h4 class="mb-3">
                                                        <a href="#productView" data-bs-toggle="modal">Brigadeiro</a>
                                                    </h4>
                                                    <p>
                                                        Docinho tradicional de chocolate com granulado.
                                                        <br>
                                                        Pedido mínimo 50 unidades.
                                                    </p>
                                                    <div
                                                        class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                                        <div class="mt-lg-0 mt-3">
                                                        </div>
                                                    </div>
                                                    <div class="btns-cardapio">
                                                        <a class="btn btn-outline-dark" href="loginpersonalizado.html"
                                                            role="button">Encomendar</a>
                                                    </div>
                                                    <div class="btn_fav">
                                                        <a class="nav-link d-sm-flex align-items-sm-center add-cart cart36"
                                                            href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                                height="22" fill="currentColor" class="bi bi-heart"
                                                                viewBox="0 0 16 16">
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
                                                    <a href="#productView1" data-bs-toggle="modal"> <img
                                                        class="img-fluid" src="../images/produtos/beijinho.png"
                                                        alt="" /></a>
                                                </div>
                                                <div class="course_content">
                                                    <span class="price">R$ 95</span>
                                                    <span class="tag mb-4 d-inline-block">O cento</span>
                                                    <h4 class="mb-3">
                                                        <a  href="#productView1" data-bs-toggle="modal">Beijinho</a>
                                                    </h4>
                                                    <p>
                                                        Docinho tradicional de coco com granulado.
                                                        <br>
                                                        Pedido mínimo 50 unidades.
                                                    </p>
                                                    <div
                                                        class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                                        <div class="mt-lg-0 mt-3">
                                                        </div>
                                                    </div>
                                                    <div class="btns-cardapio">
                                                        <a class="btn btn-outline-dark" href="loginpersonalizado.html"
                                                            role="button">Encomendar</a>
                                                    </div>
                                                    <div class="btn_fav">
                                                        <a class="nav-link d-sm-flex align-items-sm-center add-cart cart37"
                                                            href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                                height="22" fill="currentColor" class="bi bi-heart"
                                                                viewBox="0 0 16 16">
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
                                                    <a href="#productView2" data-bs-toggle="modal"> <img
                                                        class="img-fluid" src="../images/produtos/doisamores.png"
                                                        alt="" /></a>
                                                </div>
                                                <div class="course_content">
                                                    <span class="price">R$100</span>
                                                    <span class="tag mb-4 d-inline-block">o cento</span>
                                                    <h4 class="mb-3">
                                                        <a href="#productView2" data-bs-toggle="modal">Dois Amores</a>
                                                    </h4>
                                                    <p>
                                                        Docinho meio brigadeiro branco meio chocolate.
                                                        <br>
                                                        Pedido mínimo 50 unidades.
                                                    </p>
                                                    <div
                                                        class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                                        <div class="mt-lg-0 mt-3">
                                                        </div>
                                                    </div>
                                                    <div class="btns-cardapio">
                                                        <a class="btn btn-outline-dark" href="loginpersonalizado.html"
                                                            role="button">Encomendar</a>
                                                    </div>
                                                    <div class="btn_fav">
                                                        <a class="nav-link d-sm-flex align-items-sm-center add-cart cart38"
                                                            href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                                height="22" fill="currentColor" class="bi bi-heart"
                                                                viewBox="0 0 16 16">
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
                                                    <a href="#productView3" data-bs-toggle="modal"> <img
                                                        class="img-fluid" src="../images/produtos/bichope.png"
                                                        alt="" /></a>
                                                </div>
                                                <div class="course_content">
                                                    <span class="price">R$ 99</span>
                                                    <span class="tag mb-4 d-inline-block">O cento</span>
                                                    <h4 class="mb-3">
                                                        <a  href="#productView3" data-bs-toggle="modal">Bicho de Pé</a>
                                                    </h4>
                                                    <p>
                                                        Docinho de morango.
                                                        Pedido mínimo 50 unidades.
                                                        <br>
                                                        <br>
                                                    </p>
                                                    <div
                                                        class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                                        <div class="mt-lg-0 mt-3">
                                                        </div>
                                                    </div>

                                                    <div class="btns-cardapio">
                                                        <a class="btn btn-outline-dark" href="loginpersonalizado.html"
                                                            role="button">Encomendar</a>
                                                    </div>
                                                    <div class="btn_fav">
                                                        <a class="nav-link d-sm-flex align-items-sm-center add-cart cart39"
                                                            href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                                height="22" fill="currentColor" class="bi bi-heart"
                                                                viewBox="0 0 16 16">
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
                                                    <a href="#productView4" data-bs-toggle="modal"> <img
                                                        class="img-fluid" src="../images/produtos/ninho.png"
                                                        alt="" /></a>
                                                </div>
                                                <div class="course_content">
                                                    <span class="price">R$130</span>
                                                    <span class="tag mb-4 d-inline-block">O cento</span>
                                                    <h4 class="mb-3">
                                                        <a href="#productView4" data-bs-toggle="modal">Ninho c/ Nutella</a>
                                                    </h4>
                                                    <p>
                                                        Docinho de leite Ninho recheado com Nutella.
                                                        <br>
                                                        Pedido mínimo 50 unidades.
                                                    </p>
                                                    <div
                                                        class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                                        <div class="mt-lg-0 mt-3">
                                                        </div>
                                                    </div>
                                                    <div class="btns-cardapio">
                                                        <a class="btn btn-outline-dark" href="loginpersonalizado.html"
                                                            role="button">Encomendar</a>
                                                    </div>
                                                    <div class="btn_fav">
                                                        <a class="nav-link d-sm-flex align-items-sm-center add-cart cart40"
                                                            href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                                height="22" fill="currentColor" class="bi bi-heart"
                                                                viewBox="0 0 16 16">
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
                                                    <a href="#productView5" data-bs-toggle="modal"> <img
                                                        class="img-fluid" src="../images/produtos/churros.png"
                                                        alt="" /></a>
                                                </div>
                                                <div class="course_content">
                                                    <span class="price">R$125</span>
                                                    <span class="tag mb-4 d-inline-block">o cento</span>
                                                    <h4 class="mb-3">
                                                        <a href="#productView5" data-bs-toggle="modal">Brigadeiro Churros</a>
                                                    </h4>
                                                    <p>
                                                        Docinho recheado com doce de leite.
                                                        <br>
                                                        Pedido mínimo 50 unidades.
                                                    </p>
                                                    <div
                                                        class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                                        <div class="mt-lg-0 mt-3">
                                                        </div>
                                                    </div>
                                                    <div class="btns-cardapio">
                                                        <a class="btn btn-outline-dark" href="loginpersonalizado.html"
                                                            role="button">Encomendar</a>
                                                    </div>
                                                    <div class="btn_fav">
                                                        <a class="nav-link d-sm-flex align-items-sm-center add-cart cart41"
                                                            href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                                height="22" fill="currentColor" class="bi bi-heart"
                                                                viewBox="0 0 16 16">
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
                                                    <a href="#productView6" data-bs-toggle="modal"> <img
                                                        class="img-fluid" src="../images/produtos/ferrero.png"
                                                        alt="" /></a>
                                                </div>
                                                <div class="course_content">
                                                    <span class="price">R$128</span>
                                                    <span class="tag mb-4 d-inline-block">O cento</span>
                                                    <h4 class="mb-3">
                                                        <a href="#productView6" data-bs-toggle="modal">Brigadeiro Ferrero Rocher</a>
                                                    </h4>
                                                    <p>
                                                        Brigadeiro de Ferrero Rocher, enrolado no amedoim.
                                                        <br>
                                                        Pedido mínimo 50 unidades.
                                                    </p>
                                                    <div
                                                        class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                                        <div class="mt-lg-0 mt-3">
                                                        </div>
                                                    </div>
                                                    <div class="btns-cardapio">
                                                        <a class="btn btn-outline-dark" href="loginpersonalizado.html"
                                                            role="button">Encomendar</a>
                                                    </div>
                                                    <div class="btn_fav">
                                                        <a class="nav-link d-sm-flex align-items-sm-center add-cart cart42"
                                                            href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                                height="22" fill="currentColor" class="bi bi-heart"
                                                                viewBox="0 0 16 16">
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
                                                    <a href="#productView7" data-bs-toggle="modal"> <img
                                                        class="img-fluid" src="../images/produtos/pacoca.png"
                                                        alt="" /></a>
                                                </div>
                                                <div class="course_content">
                                                    <span class="price">R$115</span>
                                                    <span class="tag mb-4 d-inline-block">O cento</span>
                                                    <h4 class="mb-3">
                                                        <a href="#productView7" data-bs-toggle="modal">Brigadeiro de Paçoca</a>
                                                    </h4>
                                                    <p>
                                                        Docinho de Amendoim enrolado na Paçoca.
                                                        <br>
                                                        Pedido mínimo 50 unidades.
                                                    </p>
                                                    <div
                                                        class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                                        <div class="mt-lg-0 mt-3">
                                                        </div>
                                                    </div>

                                                    <div class="btns-cardapio">
                                                        <a class="btn btn-outline-dark" href="loginpersonalizado.html"
                                                            role="button">Encomendar</a>
                                                    </div>
                                                    <div class="btn_fav">
                                                        <a class="nav-link d-sm-flex align-items-sm-center add-cart cart43"
                                                            href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                                height="22" fill="currentColor" class="bi bi-heart"
                                                                viewBox="0 0 16 16">
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
                                                    <a href="#productView8" data-bs-toggle="modal"> <img
                                                        class="img-fluid" src="../images/produtos/brigmorango.png"
                                                        alt="" /></a>
                                                </div>
                                                <div class="course_content">
                                                    <span class="price">R$128</span>
                                                    <span class="tag mb-4 d-inline-block">O cento</span>
                                                    <h4 class="mb-3">
                                                        <a  href="#productView8" data-bs-toggle="modal">Brigadeiro c/ morango</a>
                                                    </h4>
                                                    <p>
                                                        Docinho de chocolate recheado com morango.
                                                        <br>
                                                        Pedido mínimo 50 unidades..
                                                      </p>
                                                    <div
                                                        class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                                        <div class="mt-lg-0 mt-3">
                                                        </div>
                                                    </div>
                                                    <div class="btns-cardapio">
                                                        <a class="btn btn-outline-dark" href="loginpersonalizado.html"
                                                            role="button">Encomendar</a>
                                                    </div>
                                                    <div class="btn_fav">
                                                        <a class="nav-link d-sm-flex align-items-sm-center add-cart cart44"
                                                            href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                                height="22" fill="currentColor" class="bi bi-heart"
                                                                viewBox="0 0 16 16">
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
                                                    <a href="#productView9" data-bs-toggle="modal"> <img
                                                        class="img-fluid" src="../images/produtos/uva.png"
                                                        alt="" /></a>
                                                </div>
                                                <div class="course_content">
                                                    <span class="price">R$140</span>
                                                    <span class="tag mb-4 d-inline-block">O cento</span>
                                                    <h4 class="mb-3">
                                                        <a href="#productView9" data-bs-toggle="modal">Supresa de Uva</a>
                                                    </h4>
                                                    <p>
                                                        Docinho de Ninho recheado com uma uva.
                                                        <br>
                                                        Pedido mínimo 50 unidades.
                                                    </p>
                                                    <div
                                                        class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                                        <div class="mt-lg-0 mt-3">
                                                        </div>
                                                    </div>
                                                    <div class="btns-cardapio">
                                                        <a class="btn btn-outline-dark" href="loginpersonalizado.html"
                                                            role="button">Encomendar</a>
                                                    </div>
                                                    <div class="btn_fav">
                                                        <a class="nav-link d-sm-flex align-items-sm-center add-cart cart45"
                                                            href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                                height="22" fill="currentColor" class="bi bi-heart"
                                                                viewBox="0 0 16 16">
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
                                                    <a href="#productView10" data-bs-toggle="modal"> <img
                                                        class="img-fluid" src="../images/produtos/nozes.png"
                                                        alt="" /></a>
                                                </div>
                                                <div class="course_content">
                                                    <span class="price">R$180</span>
                                                    <span class="tag mb-4 d-inline-block">O cento</span>
                                                    <h4 class="mb-3">
                                                        <a  href="#productView10" data-bs-toggle="modal">Brigadeiro de Nozes</a>
                                                    </h4>
                                                    <p>
                                                        Docinho de nozes.
                                                        <br>
                                                        Pedido mínimo 50 unidades.
                                                      </p>
                                                    <div
                                                        class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                                        <div class="mt-lg-0 mt-3">
                                                        </div>
                                                    </div>
                                                    <div class="btns-cardapio">
                                                        <a class="btn btn-outline-dark" href="loginpersonalizado.html"
                                                            role="button">Encomendar</a>
                                                    </div>
                                                    <div class="btn_fav">
                                                        <a class="nav-link d-sm-flex align-items-sm-center add-cart cart46"
                                                            href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                                height="22" fill="currentColor" class="bi bi-heart"
                                                                viewBox="0 0 16 16">
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
                                                    <a href="#productView11" data-bs-toggle="modal"> <img
                                                        class="img-fluid" src="../images/produtos/brownie.png"
                                                        alt="" /></a>
                                                </div>
                                                <div class="course_content">
                                                    <span class="price">R$ 3</span>
                                                    <span class="tag mb-4 d-inline-block">A unidade</span>
                                                    <h4 class="mb-3">
                                                        <a href="#productView11" data-bs-toggle="modal">Mini Brownie</a>
                                                    </h4>
                                                    <p>
                                                        Sabores: Ninho, Nutella e Doce de Leite.
                                                        <br>
                                                        <br>
                                                      </p>
                                                    <div
                                                        class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                                        <div class="mt-lg-0 mt-3">
                                                        </div>
                                                    </div>
                                                    <div class="btns-cardapio">
                                                        <a class="btn btn-outline-dark" href="loginpersonalizado.html"
                                                            role="button">Encomendar</a>
                                                    </div>
                                                    <div class="btn_fav">
                                                        <a class="nav-link d-sm-flex align-items-sm-center add-cart cart47"
                                                            href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                                height="22" fill="currentColor" class="bi bi-heart"
                                                                viewBox="0 0 16 16">
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
                                                    <a href="#productView12" data-bs-toggle="modal"> <img
                                                        class="img-fluid" src="../images/produtos/camarfeu.png"
                                                        alt="" /></a>
                                                </div>
                                                <div class="course_content">
                                                    <span class="price">R$3,80</span>
                                                    <span class="tag mb-4 d-inline-block">A unidade</span>
                                                    <h4 class="mb-3">
                                                        <a  href="#productView12" data-bs-toggle="modal">Camafeu de Nozes</a>
                                                    </h4>
                                                    <p>
                                                        Recoberto com foudant e uma noz.
                                                        <br>
                                                        <br>
                                                        <br>
                                                      </p>
                                                    <div
                                                        class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                                        <div class="mt-lg-0 mt-3">
                                                        </div>
                                                    </div>
                                                    <div class="btns-cardapio">
                                                        <a class="btn btn-outline-dark" href="loginpersonalizado.html"
                                                            role="button">Encomendar</a>
                                                    </div>
                                                    <div class="btn_fav">
                                                        <a class="nav-link d-sm-flex align-items-sm-center add-cart cart48"
                                                            href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                                height="22" fill="currentColor" class="bi bi-heart"
                                                                viewBox="0 0 16 16">
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
                                                    <a href="#productView13" data-bs-toggle="modal"> <img
                                                        class="img-fluid" src="../images/produtos/torta.png"
                                                        alt="" /></a>
                                                </div>
                                                <div class="course_content">
                                                    <span class="price">R$3,80</span>
                                                    <span class="tag mb-4 d-inline-block">A unidade</span>
                                                    <h4 class="mb-3">
                                                        <a href="#">Mini Tortinha</a>
                                                    </h4>
                                                    <p>
                                                        Sabores: Limão, Ninho com morango, Brigadeiro e Churros.
                                                        <br>
                                                        <br>
                                                      </p>
                                                    <div
                                                        class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                                        <div class="mt-lg-0 mt-3">
                                                        </div>
                                                    </div>
                                                    <div class="btns-cardapio">
                                                        <a class="btn btn-outline-dark" href="loginpersonalizado.html"
                                                            role="button">Encomendar</a>
                                                    </div>
                                                    <div class="btn_fav">
                                                        <a class="nav-link d-sm-flex align-items-sm-center add-cart cart49"
                                                            href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                                height="22" fill="currentColor" class="bi bi-heart"
                                                                viewBox="0 0 16 16">
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
                                                    <a href="#productView14" data-bs-toggle="modal"> <img
                                                        class="img-fluid" src="../images/produtos/morango.png"
                                                        alt="" /></a>
                                                </div>
                                                <div class="course_content">
                                                    <span class="price">R$3,50</span>
                                                    <span class="tag mb-4 d-inline-block">A unidade</span>
                                                    <h4 class="mb-3">
                                                        <a href="#productView14" data-bs-toggle="modal">Morango c/ chocolate</a>
                                                    </h4>
                                                    <p>
                                                        Morango recoberto com cobertura de chocolate.
                                                      </p>
                                                    <div
                                                        class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                                        <div class="mt-lg-0 mt-3">
                                                        </div>
                                                    </div>
                                                    <div class="btns-cardapio">
                                                        <a class="btn btn-outline-dark" href="loginpersonalizado.html"
                                                            role="button">Encomendar</a>
                                                    </div>
                                                    <div class="btn_fav">
                                                        <a class="nav-link d-sm-flex align-items-sm-center add-cart cart50"
                                                            href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                                height="22" fill="currentColor" class="bi bi-heart"
                                                                viewBox="0 0 16 16">
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
                                                    <a href="#productView15" data-bs-toggle="modal"> <img
                                                        class="img-fluid" src="../images/produtos/trufa.png"
                                                        alt="" /></a>
                                                </div>
                                                <div class="course_content">
                                                    <span class="price">R$ 3</span>
                                                    <span class="tag mb-4 d-inline-block">A unidade</span>
                                                    <h4 class="mb-3">
                                                        <a  href="#productView15" data-bs-toggle="modal">Mini Trufa</a>
                                                    </h4>
                                                    <div
                                                        class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                                        <div class="mt-lg-0 mt-3">
                                                        </div>
                                                    </div>
                                                    <div class="btns-cardapio">
                                                        <a class="btn btn-outline-dark" href="loginpersonalizado.html"
                                                            role="button">Encomendar</a>
                                                    </div>
                                                    <div class="btn_fav">
                                                        <a class="nav-link d-sm-flex align-items-sm-center add-cart cart51"
                                                            href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                                height="22" fill="currentColor" class="bi bi-heart"
                                                                viewBox="0 0 16 16">
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
                                                    <a href="#productView16" data-bs-toggle="modal"> <img
                                                        class="img-fluid" src="../images/produtos/bemcasado.png"
                                                        alt="" /></a>
                                                </div>
                                                <div class="course_content">
                                                    <span class="price">R$ 4</span>
                                                    <span class="tag mb-4 d-inline-block">A unidade</span>
                                                    <h4 class="mb-3">
                                                        <a  href="#productView16" data-bs-toggle="modal">Bem Casado</a>
                                                    </h4>
                                                    <div
                                                        class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                                        <div class="mt-lg-0 mt-3">
                                                        </div>
                                                    </div>
                                                    <div class="btns-cardapio">
                                                        <a class="btn btn-outline-dark" href="loginpersonalizado.html"
                                                            role="button">Encomendar</a>
                                                    </div>
                                                    <div class="btn_fav">
                                                        <a class="nav-link d-sm-flex align-items-sm-center add-cart cart52"
                                                            href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                                height="22" fill="currentColor" class="bi bi-heart"
                                                                viewBox="0 0 16 16">
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