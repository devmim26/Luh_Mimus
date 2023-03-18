<?php

if(!isset($_SESSION)){
    session_start();
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finanças | Luh' Mimus</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../resources/css/dashboard.css">
    <link rel="stylesheet" href="../resources/css/financas.css">

    <link rel="stylesheet" href="../resources/css/bootstrap.css">
    <link rel="stylesheet" href="../lib/iconly/bold.css">
    <link rel="stylesheet" href="../lib/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../lib/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../resources/css/app.css">
    <link rel="shortcut icon" href="../images/favicon.svg" type="image/x-icon">
</head>

<body>

    <!-- Header -->
    <?php
    include '../includes/menuHeaderBar.php';
    ?>

    <!-- Header -->
    <?php
    include '../includes/menuLateral.php';
    ?>

    <script src="../resources/js/bootstrap.bundle.min.js"></script>
        <script src="../resources/js/main.js"></script>



        <!-----Fim do Menu Lateral------->
        

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
                        <h3>Finanças</h3>
                    </div>
                </div>
            </div>
           


            <div class="dropdown open">
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


            <!-- Basic Tables start -->
            <section class="section">
                <div class="row" id="basic-table">
                    <div class="col-12 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Lucro bruto</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <!-- Table with outer spacing -->
                                    <div class="table-responsive">
                                        <table class="table table-borderless">
                                            <thead>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row" class="table-name">Pedidos</th>
                                                    <td>R$</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="table-name">Encomendas</th>
                                                    <td>R$</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="table-name">Total</th>
                                                    <td colspan="2">R$</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Saldo final</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <!-- Table with outer spacing -->
                                    <div class="table-responsive">
                                        <table class="table table-borderless">
                                            <thead>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row" class="table-name">Total</th>
                                                    <td>R$</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Despesas fixas

                                    <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalId"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                            <path
                                                d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                            <path
                                                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                        </svg></a>
                                </h4>

                                <!-- Modal Body-->
                                <div class="modal fade" id="modalId" tabindex="-1" role="dialog"
                                    aria-labelledby="modalTitleId" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                        <form action="salvar_despesa.php" method="POST">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalTitleId">Adicionar despesa</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="container-fluid">
                                                        <div class="mb-3">
                                                            <label for="" class="form-label">Nome</label>
                                                            <input type="text" class="form-control" name="nome_despesa" id="nome_despesa"
                                                                aria-describedby="emailHelpId" placeholder="Ex: gasolina">

                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="" class="form-label">Valor</label>
                                                            <input type="text" class="form-control" name="valor_despesa" id="valor_despesa"
                                                                aria-describedby="emailHelpId" placeholder="ex: 30,00">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-dark">Salvar</button>
                                                </div>
                                            </div>
</form>
                                        </div>
                                </div>

                                <div class="modal fade" id="modalId3" tabindex="-1" role="dialog"
                                    aria-labelledby="modalTitleId" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalTitleId">Editar despesa</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Nome</label>
                                                        <input type="text" class="form-control" name="" id=""
                                                            aria-describedby="emailHelpId" placeholder="gasolina">

                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Valor</label>
                                                        <input type="text" class="form-control" name="" id=""
                                                            aria-describedby="emailHelpId" placeholder="R$50,00">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-dark"
                                                    data-bs-dismiss="modal">Salvar</button>
                                                <button type="button" class="btn btn-dark">Cancelar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <!-- Table with outer spacing -->
                                    <div class="table-responsive">
                                        <table class="table table-borderless">
                                            <thead>
                                                <tr>
                                                    <th>Nome</th>
                                                    <th style="width: 100px;">Valor</th>
                                                    <th>Editar</th>
                                                    <th>Excluir</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                include "../config/conn_mySQLI.php";
                                                $todasDespesas = $sql->query("SELECT * FROM despesas");
                                                $total = $sql->query("SELECT SUM(valor_despesas) AS 'total' FROM despesas");
                                                $totalDespesas = mysqli_fetch_array($total);
                                                $total_despesas0 = $totalDespesas['total'];
                                                $total_despesas = str_replace(".",",", $total_despesas0);
                                                
                                                
                                                while($despesas = mysqli_fetch_array($todasDespesas)) {
                                                    $idDaDespesa = $despesas['id_despesas'];
                                                    $nomeDaDespesa = $despesas['nome_despesas'];
                                                    $valorDaDespesa0 = $despesas['valor_despesas'];
                                                    $valorDaDespesa = str_replace(".",",", $valorDaDespesa0);
                                                    

                                                echo "
                                                
                                                <tr>
                                                <td>$nomeDaDespesa</td>
                                                    
                                                <td>R$&nbsp;$valorDaDespesa</td>
                                                <td>
                                                <a data-bs-toggle='modal'
                                                            data-bs-target='#modalId3'><svg
                                                                xmlns='http://www.w3.org/2000/svg' width='16'
                                                                height='16' fill='currentColor'
                                                                class='bi bi-pencil-square' viewBox='0 0 16 16'>
                                                                <path
                                                                    d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z' />
                                                                <path fill-rule='evenodd'
                                                                    d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z' />
                                                            </svg></a>
                                                </td>
                                                <td>
                                                <a href='excluir_despesa.php?id=$idDaDespesa' data-bs-toggle='modal'><svg
                                                                xmlns='http://www.w3.org/2000/svg' fill='currentColor' class='bi bi-trash'>
                                                                <path
                                                                    d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z' />
                                                                <path fill-rule='evenodd'
                                                                    d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z' />
                                                            </svg></a>
                                                </td>

                                                </tr>";}

                                                echo "<tr>
                                                <td style='font-size: 20px'>Total</td>
                                                
                                                <td>R$ $total_despesas</td>

                                                </tr>"
                                                
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
        </div>
    </div>
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
    <script src="../resources/js/bootstrap.bundle.min.js"></script>

    <script src="../resources/js/main.js"></script>
</body>

</html>