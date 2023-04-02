<!-- Menu Lateral -->
<?php
    include '../includes/MenuLateral.php';
    include '../includes/menuHeaderBar.php';
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encomendas - Luh' Mimus</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../resources/css/bootstrap.css">
    <link rel="stylesheet" href="../lib/iconly/bold.css">

    <link rel="stylesheet" href="../lib/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../lib/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../resources/css/pedido.css">
    <link rel="stylesheet" href="../resources/css/app.css">
    <link rel="shortcut icon" href="../resources/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="../resources/css/dashboard.css">
</head>

<body>
    
        <!---Fim do header do topo-->
        <br>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Encomendas</h3>
                    </div>
                </div>
            </div>
                <div class="dropdown open ">
                    <a href="#" class="btn btn-secondary btn-sm dropdown-toggle meses" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <strong>*mês*</strong>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="triggerId">
                        <li><a class="dropdown-item" href="#">Janeiro</a></li>
                        <li><a class="dropdown-item" href="#">Fevereiro</a></li>
                        <li><a class="dropdown-item" href="#">Março</a></li>
                        <li><a class="dropdown-item" href="#">Abril</a></li>
                        <li><a class="dropdown-item" href="#">Maio</a></li>
                        <li><a class="dropdown-item" href="#">Junho</a></li>
                        <li><a class="dropdown-item" href="#">Julho</a></li>
                        <li><a class="dropdown-item" href="#">Agosto</a></li>
                        <li><a class="dropdown-item" href="#">Setembro</a></li>
                        <li><a class="dropdown-item" href="#">Outubro</a></li>
                        <li><a class="dropdown-item" href="#">Novembro</a></li>
                        <li><a class="dropdown-item" href="#">Dezembro</a></li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                    </div>
                </div>
                <nav class="nav justify-content-center">
                    <a class="nav-link active" href="#" aria-current="page">Todas</a>
                    <a class="nav-link" href="./encomendas-finalizadas.html">Finalizadas</a>
                </nav>
            </div>
            <br>
            <p>Todos(0)</p>
            <div class="pedidosTot">
                <div class="pedidosUniInt">
                    <a href="ped01.html">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="">
                            <label class="form-check-label" for="">
                                Finalizar
                            </label>
                        </div>
                        <br>
                        <label class="form-check-label data-hora" for="">
                            Data e hora da entrega
                        </label>
                        <hr>
                        <table>
                            <tr>
                                <td>
                                    <img class="img-fluid"
                                        src="https://imagensemoldes.com.br/wp-content/uploads/2020/05/Brigadeiro-com-Fundo-Transparente-Doces-PNG.png"
                                        height="100" width="100">
                                </td>
                                <td>
                                    <p>código pedido</p>
                                    Nome do produto
                                    <p>(quant. produto)</p>
                                </td>
                                <td>
                                    Valor
                                </td>
                                <td>
                                    <img src="https://assets.stickpng.com/thumbs/585e4bf3cb11b227491c339a.png"
                                        height="100" width="100" class="usuario-img" id="usuario-lado">
                                    <p id="usuario-lado">Nome do usuário</p>
                                </td>
                            </tr>
                        </table>
                        <br>
                </div>
            </div>
            <br>
            <div class="pedidosTot">
                <div class="pedidosUniInt">
                    <a href="ped01.html">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="">
                            <label class="form-check-label" for="">
                                Finalizar
                            </label>
                        </div>
                        <br>
                        <label class="form-check-label data-hora" for="">
                            Data e hora da entrega
                        </label>
                        <hr>
                        <table>
                            <tr>
                                <td>
                                    <img class="img-fluid"
                                        src="https://imagensemoldes.com.br/wp-content/uploads/2020/05/Brigadeiro-com-Fundo-Transparente-Doces-PNG.png"
                                        height="100" width="100">
                                </td>
                                <td>
                                    <p>código pedido</p>
                                    Nome do produto
                                    <p>(quant. produto)</p>
                                </td>
                                <td>
                                    Valor
                                </td>
                                <td>
                                    <img src="https://assets.stickpng.com/thumbs/585e4bf3cb11b227491c339a.png"
                                        height="100" width="100" class="usuario-img" id="usuario-lado">
                                    <p id="usuario-lado">Nome do usuário</p>
                                </td>
                            </tr>
                        </table>
                        <br>
                </div>
            </div>
            <br>
            <div class="pedidosTot">
                <div class="pedidosUniInt">
                    <a href="ped01.html">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="">
                            <label class="form-check-label" for="">
                                Finalizar
                            </label>
                        </div>
                        <br>
                        <label class="form-check-label data-hora" for="">
                            Data e hora da entrega
                        </label>
                        <hr>
                        <table>
                            <tr>
                                <td>
                                    <img class="img-fluid"
                                        src="https://imagensemoldes.com.br/wp-content/uploads/2020/05/Brigadeiro-com-Fundo-Transparente-Doces-PNG.png"
                                        height="100" width="100">
                                </td>
                                <td>
                                    <p>código pedido</p>
                                    Nome do produto
                                    <p>(quant. produto)</p>
                                </td>
                                <td>
                                    Valor
                                </td>
                                <td>
                                    <img src="https://assets.stickpng.com/thumbs/585e4bf3cb11b227491c339a.png"
                                        height="100" width="100" class="usuario-img" id="usuario-lado">
                                    <p id="usuario-lado">Nome do usuário</p>
                                </td>
                            </tr>
                        </table>
                        <br>
                </div>
            </div>
            <br>
            <div class="pedidosTot">
                <div class="pedidosUniInt">
                    <a href="ped01.html">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="">
                            <label class="form-check-label" for="">
                                Finalizar
                            </label>
                        </div>
                        <br>
                        <label class="form-check-label data-hora" for="">
                            Data e hora da entrega
                        </label>
                        <hr>
                        <table>
                            <tr>
                                <td>
                                    <img class="img-fluid"
                                        src="https://imagensemoldes.com.br/wp-content/uploads/2020/05/Brigadeiro-com-Fundo-Transparente-Doces-PNG.png"
                                        height="100" width="100">
                                </td>
                                <td>
                                    <p>código pedido</p>
                                    Nome do produto
                                    <p>(quant. produto)</p>
                                </td>
                                <td>
                                    Valor
                                </td>
                                <td>
                                    <img src="https://assets.stickpng.com/thumbs/585e4bf3cb11b227491c339a.png"
                                        height="100" width="100" class="usuario-img" id="usuario-lado">
                                    <p id="usuario-lado">Nome do usuário</p>
                                </td>
                            </tr>
                        </table>
                        <br>
                </div>
            </div>
            <br>
            <div class="pedidosTot">
                <div class="pedidosUniInt">
                    <a href="ped01.html">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="">
                            <label class="form-check-label" for="">
                                Finalizar
                            </label>
                        </div>
                        <br>
                        <label class="form-check-label data-hora" for="">
                            Data e hora da entrega
                        </label>
                        <hr>
                        <table>
                            <tr>
                                <td>
                                    <img class="img-fluid"
                                        src="https://imagensemoldes.com.br/wp-content/uploads/2020/05/Brigadeiro-com-Fundo-Transparente-Doces-PNG.png"
                                        height="100" width="100">
                                </td>
                                <td>
                                    <p>código pedido</p>
                                    Nome do produto
                                    <p>(quant. produto)</p>
                                </td>
                                <td>
                                    Valor
                                </td>
                                <td>
                                    <img src="https://assets.stickpng.com/thumbs/585e4bf3cb11b227491c339a.png"
                                        height="100" width="100" class="usuario-img" id="usuario-lado">
                                    <p id="usuario-lado">Nome do usuário</p>
                                </td>
                            </tr>
                        </table>
                        <br>
                </div>
            </div>

            <!--Fim dos pedidos-->
            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-end">
                        <p>2022 &copy; Luh Mimu's</p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="../lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>

    <script src="../vendors/apexcharts/apexcharts.js"></script>
    <script src="../js/pages/dashboard.js"></script>

    <script src="../js/main.js"></script>
</body>

</html>