<!-- 
<?php
// include '../view/conn_banco.php';

// $sql_code_encomenda = "SELECT * FROM encomenda ORDER BY qtd_encomenda ASC";
// $sql_query_encomendas = $sql->query($sql_code_encomenda) or die($sql->error);


// //Selecioa todos os dados da tabela anuncios
// $dados_encomenda = $sql->query("SELECT * FROM encomenda");
// //calcula o número de linhas, ou seja, a qtd de resgistros
// $total = mysqli_num_rows($dados_encomenda);      
?> -->


<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home | Confeitaria Luh Mimu's</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400&display=swap" rel="stylesheet">


  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/responsive.css">
  <link rel="stylesheet" href="./vendor/glightbox/css/glightbox.min.css">
  <!-- Range slider-->
  <link rel="stylesheet" href="./vendor/nouislider/nouislider.min.css">
  <!-- Choices CSS-->
  <link rel="stylesheet" href="./vendor/choices.js/public/assets/styles/choices.min.css">
  <!-- Swiper slider-->
  <link rel="stylesheet" href="./vendor/swiper/swiper-bundle.min.css">


</head>

<body>
  
    <!--start header-->
    <div class="header-topo">
      <nav class="navbar navbar-expand-lg navbar-light back">
        <div class="container-fluid justify-content-between">
          <ul class="navbar-nav flex-row logo">
            <li class="nav-item me-3 me-lg-1 active">
              <a class="nav-link" href="../index.html">
                <img src="../images/logo.jfif" alt="" width="140px">
              </a>
            </li>
          </ul>
          <ul class="navbar-nav flex-row icones">
            <li class="nav-item me-3 me-lg-1">
              <a class="nav-link d-sm-flex align-items-sm-center" href="./login2.html">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                  <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                </svg>
              </a>
            </li>
            <li class="nav-item me-3 me-lg-1">
              <a class="nav-link d-sm-flex align-items-sm-center" href="./favorito.html">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                  <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                </svg>
              </a>
            </li>
            <li class="nav-item me-3 me-lg-1">
              <a class="nav-link d-sm-flex align-items-sm-center" href="./carrinhovazio.html">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                  <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                </svg>
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <!--start menu-->
    <div class="header-menu">
      <hr>
      <nav class="navbar navbar-expand-sm navbar-light">
        <div class="container">

          <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0 snip1143"">
                            <li class=" nav-item">
              <a class="nav-link active" href="../index.html" aria-current="page">Home<span class="visually-hidden">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="galeria.html" aria-current="page">Galeria<span class="visually-hidden">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="quemsomos.html" aria-current="page">Quem
                  somos<span class="visually-hidden">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="contato.html" aria-current="page">Contato<span class="visually-hidden">(current)</span></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="produtos.html" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produtos</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                  <a class="dropdown-item" href="bolos.html">Bolos</a>
                  <a class="dropdown-item" href="doces.html">Doces</a>
                  <a class="dropdown-item" href="salgados.html">Salgados</a>
                  <a class="dropdown-item" href="personalizados.html">Personalizados</a>
                  <a class="dropdown-item" href="kitfesta.html">Kit Festa</a>
                </div>
              </li>
            </ul>
            <form class="d-flex my-2 my-lg-0">
              <input class="form-control me-sm-2" type="text" placeholder="O que você procura?">
              <button class="btn btn-outline my-2 my-sm-0" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg></button>
            </form>
          </div>
        </div>
      </nav>
    </div>
    <!--end header-->
    <div class="container">
      <section class="py-5 bg-light">
        <div class="container">
          <div class="row px-4 px-lg-5 py-lg-4 align-items-center">
            <div class="col-lg-6">
              <h1 class="h2 text-uppercase mb-0">Carrinho</h1>
            </div>
            <div class="col-lg-6 text-lg-end">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-lg-end mb-0 px-0 bg-light">
                  <li class="breadcrumb-item"><a class="text-dark" href="../index.html">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Carrinho</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>
      <section class="py-5">
        <h2 class="h5 text-uppercase mb-4">Suas encomendas</h2>
        <div class="row">
          <div class="col-lg-8 mb-4 mb-lg-0">
            <!-- CART TABLE-->
            <div class="table-responsive mb-4">
              <table class="table text-nowrap">
                <thead class="bg-light">
                  <tr>
                    <th class="border-0 p-3" scope="col"> <strong class="text-sm text-uppercase">Produtos</strong></th>
                    <th class="border-0 p-3" scope="col"> <strong class="text-sm text-uppercase">Preço</strong></th>
                    <th class="border-0 p-3" scope="col"> <strong class="text-sm text-uppercase">Quantidade</strong></th>
                    <th class="border-0 p-3" scope="col"> <strong class="text-sm text-uppercase">Total</strong></th>
                    <th class="border-0 p-3" scope="col"> <strong class="text-sm text-uppercase"></strong></th>
                  </tr>
                </thead>
                <tbody class="border-0">
                  <tr>
                    <th class="ps-0 py-3 border-light" scope="row">
                      <div class="d-flex align-items-center">
                        <div class="ms-3"><strong class="h6"><a class="reset-anchor animsition-link" href="detail.html">Bolo de Brigadeiro</a></strong></div>
                      </div>
                    </th>
                    <td class="p-3 align-middle border-light">
                      <p class="mb-0 small">$50</p>
                    </td>
                    <td class="p-3 align-middle border-light">
                      <p class="mb-0 small">2kg</p>
                    </td>
                    <td class="p-3 align-middle border-light">
                      <p class="mb-0 small">
                        <?php
                        $valorBolo = 50;
                        $total = $valorBolo * 2;

                        echo $total;
                        ?>
                      </p>
                    </td>
                    <td class="p-3 align-middle border-light"><a class="reset-anchor" href="#!"><i class="fas fa-trash-alt small text-muted"></i></a></td>
                  </tr>
                  <tr>
                   
                  
                    <td class="p-3 align-middle border-0"><a class="reset-anchor" href="#!"><i class="fas fa-trash-alt small text-muted"></i></a></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- CART NAV-->
            <div class="bg-light px-4 py-3">
              <div class="row align-items-center text-center">
                <div class="col-md-6 mb-3 mb-md-0 text-md-start"><a class="btn btn-link p-0 text-dark btn-sm" href="./bolos.html"><i class="fas fa-long-arrow-alt-left me-2"> </i>Continue comprando</a></div>
                <div class="col-md-6 text-md-end"><a class="btn btn-outline-dark btn-sm cancel" href="checkout.html">Cancelar<i class="fas fa-long-arrow-alt-right ms-2"></i></a></div>
              </div>
            </div>
          </div>
          <!-- ORDER TOTAL-->
          <div class="col-lg-4">
            <div class="card border-0 rounded-0 p-lg-4 bg-light">
              <div class="card-body">
                <h5 class="text-uppercase mb-4">Total da compra</h5>
                <ul class="list-unstyled mb-0">
                  <li class="d-flex align-items-center justify-content-between"><strong class="text-uppercase small font-weight-bold">Subtotal</strong><span class="text-muted small">$100</span></li>
                  <li class="border-bottom my-2"></li>
                  <li class="d-flex align-items-center justify-content-between mb-4"><strong class="text-uppercase small font-weight-bold">Total</strong><span>$100</span></li>
                  <li>
                    <form action="./pagseguro/pay.php">
                      <div class="input-group mb-0">
                        
                        <button class="btn btn-dark btn-sm w-100" type="submit"> <i class="fas fa-gift me-2"></i>Prosseguir</button>
                      </div>
                    </form>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <?php 
      include '../includes/footer.php';
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo SCRIPT_PAGSEGURO; ?>"></script>
    <script src="js/script.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/tab.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/1.4.5/numeral.min.js"></script>
    <script src="js/tab-site.js"></script>
    <script src="js/languages/pt-br.js"></script>
    <!--end footer-->