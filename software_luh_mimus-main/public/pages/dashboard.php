<!-- proteção da página -->
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
    <title>Dashboard | Luh' Mimus</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../resources/css/calender/calendarioStyle.css">
    <link rel="stylesheet" href="../resources/css/dashboard.css">
	<link rel="stylesheet" href="../lib/iconly/bold.css">
    <link rel="stylesheet" href="../resources/css/bootstrap.css">
    <link rel="stylesheet" href="../lib/iconly/bold.css">
    <link rel="stylesheet" href="../lib/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../lib/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../resources/css/app.css">
    <link rel="shortcut icon" href="../images/favicon.svg" type="image/x-icon">

</head>

<body>
    <!-- Menu Lateral -->
    <?php
    include '../includes/MenuLateral.php';
    ?>

    <!-----Header------->
    <?php
    include '../includes/menuHeaderBar.php';
    ?>

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
                        <h3>Olá, <?php echo $_SESSION['nome'];?></h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-content ">
            <section class="row">

                <!-- col da seção inteira-->
                <div class="col-12 col-lg-12">
                    <div class="row">
                        <!-----Cards de Vendas------->
                        <div class="col-6 col-lg-4 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h6 class="text-muted font-semibold">Saldo Final</h6>
                                            <h6 class="font-extrabold mb-0">R$ <?php 
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
                                                    ?></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-----Cards de Lucro------->
                        <div class="col-6 col-lg-4 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h6 class="text-muted font-semibold">Lucro Bruto</h6>
                                            <h6 class="font-extrabold mb-0">
												<?php 
												$totalBruto = $sql->query("SELECT SUM(valor) AS 'total' FROM lucro_bruto");
                                                $totalLucro = mysqli_fetch_array($totalBruto);
                                                $total_bruto0 = $totalLucro['total'];
                                                $total_bruto = str_replace(".",",", $total_bruto0);
												
												echo "R$ $total_bruto";
												?>
											</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-----Cards de Encomendas------->
                        <div class="col-6 col-lg-4 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">

                                        <div class="col-md-8">
                                            <h6 class="text-muted font-semibold">Despesas</h6>
                                            <h6 class="font-extrabold mb-0">
												<?php 
												$total = $sql->query("SELECT SUM(valor_despesas) AS 'total' FROM despesas");
                                                $totalDespesas = mysqli_fetch_array($total);
                                                $total_despesas0 = $totalDespesas['total'];
                                                $total_despesas = str_replace(".",",", $total_despesas0);
												
												echo "R$ $total_despesas";
												?>
											</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-----Fim de Cards no topo------->


                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header grafico1">
                                    <h4>Evolução do Lucro</h4>
                                </div>
                                <div class="col-lg-10 col-md-6 grafico1">
                                    <div>
                                        <canvas id="myChart"></canvas>
										<br>
										<h3 style="font-size: 15px; color: gray; text-align: center;">Valor Bruto se refere aos ganhos sem a subtração das despesas e investimentos</h3>
                                    </div>

                                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                                    <script>
                                        const ctx = document.getElementById('myChart');

                                        new Chart(ctx, {
                                            type: 'line',
                                            data: {
                                                labels: ['Lucro inicial do mês', 'Lucro atual do mês', ],
                                                datasets: [{
                                                    label: 'Lucro Bruto',
                                                    data: [0, <?php 
														$todosLucros = $sql->query("SELECT * FROM lucro_bruto");
                                                        $totalBruto = $sql->query("SELECT SUM(valor) AS 'total' FROM lucro_bruto");
                                                        $totalLucro = mysqli_fetch_array($totalBruto);
                                                        $total_bruto0 = $totalLucro['total'];
														
														echo $total_bruto0;
														?>],
                                                    responsive: true,
                                                    borderWidth: 1,
                                                    backgroundColor: 'rgba(255, 255, 255, 1)',
                                                    pointBackgroundColor: 'rgba(240, 120, 130, 1)',
                                                    pointBorderWidth: 1,
                                                    borderColor: 'rgb(240, 120, 130)',
                                                    tension: 2,
                                                }]
                                            },
                                            options: {
                                                scales: {
                                                    y: {
														min: 0,
														max: 10000,
                                                    }
                                                }
												
                                            }
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </section>
        </div>

        <!-----Footer------->
        <?php
        include '../includes/footer.php';
        ?>
    </div>
    </div>
    <script src="../resources/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../resources/js/bootstrap.bundle.min.js"></script>

    <script src="../lib/apexcharts/apexcharts.js"></script>
    <script src="../resources/js/pages/dashboard.js"></script>

    <script src="../resources/js/main.js"></script>
</body>

</html>