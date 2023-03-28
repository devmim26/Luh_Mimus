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
    <script src="../resources/js/jquery.min.js"></script>
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
                <a href="#" id="mes" class="btn btn-secondary btn-sm dropdown-toggle meses" data-bs-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <strong><?php $hoje = new DateTime(); echo $hoje->format('d/m'); ?></strong>
                </a>
            </div>


            <!-- Basic Tables start -->
           
            <br>
                      
    
                <div class="row" id="basic-table">
                    <div class="col-12 col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Lucro bruto
                                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalId1"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                            <path
                                                d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                            <path
                                                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                                        </svg></a>
                                </h4>
                                
                            </div>
                             <!-- Modal Body-->
                             <div class="modal fade" id="modalId1" tabindex="-1" role="dialog"
                                    aria-labelledby="modalTitleId" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                        <form action="salvar_lucro.php" method="POST">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalTitleId">Adicionar Lucro</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="container-fluid">
                                                        <div class="mb-3">
                                                            <label for="" class="form-label">Tipo de Lucro</label>

                                                                <select class="form-select" name="nome_lucro" id="nome_lucro" aria-label="Default select example">
                                                                <option value="Pedido" selected>Pedido</option>
                                                                <option value="Encomenda">Encomenda</option>
                                                                </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="" class="form-label">Valor</label>
                                                            <input type="text" class="form-control" name="valor_lucro" id="valor_lucro"
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
                            <div class="card-content">
                                <div class="card-body">
                                    <!-- Table with outer spacing -->
                                    <div class="table-responsive">
                                        <table class="table table-borderless">
                                            <thead>
                                                <tr style="text-align: center;">
                                                    <th>Tipo de Lucro</th>
                                                    <th style="width: 100px;">Valor</th>
                                                    <th>Excluir</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                include "../../config/conn_mySQLI.php";
                                                $todosLucros = $sql->query("SELECT * FROM lucro_bruto");
                                                $totalBruto = $sql->query("SELECT SUM(valor) AS 'total' FROM lucro_bruto");
                                                $totalLucro = mysqli_fetch_array($totalBruto);
                                                $total_bruto0 = $totalLucro['total'];
                                                $total_bruto = str_replace(".",",", $total_bruto0);
                                                
                                                
                                                while($despesas = mysqli_fetch_array($todosLucros)) {
                                                    $idDoLucro = $despesas['id'];
                                                    $nomeDoLucro = $despesas['tipo_lucro'];
                                                    $valorDoLucro0 = $despesas['valor'];
                                                    $valorDoLucro = str_replace(".",",", $valorDoLucro0);
                                                    

                                                echo "
                                                
                                                <tr>
                                                <td>$nomeDoLucro</td>
                                                    
                                                <td>R$&nbsp;$valorDoLucro</td>
                                                <td style='padding-right: 55px;'>
                                                <a href='excluir_lucroBruto.php?id=$idDoLucro' data-bs-toggle='modal'><svg
                                                                xmlns='http://www.w3.org/2000/svg' fill='currentColor' class='bi bi-trash'>
                                                                <path
                                                                    d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z' />
                                                                <path fill-rule='evenodd'
                                                                    d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z' />
                                                            </svg></a>
                                                </td>

                                                </tr>";}

                                                echo "
                                                <br>
                                                <tr>
                                                <td style='font-size: 20px'>Total</td>
                                                
                                                <td>R$ $total_bruto</td>

                                                </tr>"
                                                
                                                ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="invoice">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Saldo Final</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <!-- Table with outer spacing -->
                                    <div class="table-responsive">
                                        <table class="table table-borderless">
                                            <thead>
                                            </thead>
                                            <tbody>
                                                <tr style="text-align: center;">
                                                    <th scope="row" class="table-name">Total</th>
                                                    <td>R$ <?php 
                                                        include "../../config/conn_mySQLI.php";
                                                        $todasDespesas = $sql->query("SELECT * FROM despesas");
                                                        $total = $sql->query("SELECT SUM(valor_despesas) AS 'total' FROM despesas");
                                                        $totalDespesas = mysqli_fetch_array($total);
                                                        $total_despesas0 = $totalDespesas['total'];
                                                        $total_despesas = str_replace(".",",", $total_despesas0);

                                                        $todosLucros = $sql->query("SELECT * FROM lucro_bruto");
                                                        $totalBruto = $sql->query("SELECT SUM(valor) AS 'total' FROM lucro_bruto");
                                                        $totalLucro = mysqli_fetch_array($totalBruto);
                                                        $total_bruto0 = $totalLucro['total'];
                                                        $total_bruto = str_replace(".",",", $total_bruto0);
                                                        
														$totalInves = $sql->query("SELECT * FROM investimento WHERE id_inves ORDER BY id_inves DESC limit 1");
														while($totInves = mysqli_fetch_array($totalInves)){
														$totInves2 = $totInves['investimento_valor'];
														$totInves3 = str_replace(".",",", $totInves2);
														
                                                        $saldo_final = (float)$total_bruto0 - ((float)$totInves2 + (float)$total_despesas0);
                                                        echo (float)$saldo_final;}
                                                    ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
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

                                
                            <div class="card-content">
                                <div class="card-body">
                                    <!-- Table with outer spacing -->
                                    <div class="table-responsive">
                                        
                                        <table class="table table-borderless">
                                            <thead>
                                                <tr style="text-align: center;">
                                                    <th>Nome</th>
                                                    <th style="width: 100px;">Valor</th>
                                                    <th>Excluir</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                include "../../config/conn_mySQLI.php";
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
                                                <td style='padding-right: 55px;'>
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

                    
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Investimento total </h4>
                            </div>
                        </div>
                    
                    <div class="card-content">
                        <div class="card-body">
                            <!-- Table with outer spacing -->
                            <div class="table-responsive">  
                                <form action="salvar_investimento.php" method="POST">
                                <div class="mb-3">
                                    <label for="" class="form-label">Valor</label>
                                        <input type="text" class="form-control" name="valor_investimento"
                                            aria-describedby="emailHelpId" placeholder="<?php 
											include "../../config/conn_mySQLI.php";
											$totalInves = $sql->query("SELECT * FROM investimento WHERE id_inves ORDER BY id_inves DESC limit 1");
											while($totInves = mysqli_fetch_array($totalInves)){
												$totInves2 = $totInves['investimento_valor'];
                                                $totInves3 = str_replace(".",",", $totInves2);
												echo"O valor atual é R$ $totInves3";
											};
											
											?>">
                                </div>
                                <br>
                                <button type="submit" class="btn btn-dark" style="float: right;">Salvar</button>
                                <br>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>        
            </div>
    <footer>
	<a href="htmltopdf.php" style="background-color: #000; text-decoration: none; color: #fff; padding: 10px; border-radius: 20px; margin-top: 40px;">Baixar Relatório</a>
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
    <script src="../resources/js/financas.js"></script>
    <script src="../resources/js/main.js"></script>
</body>

</html>