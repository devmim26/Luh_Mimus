<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Luh' Mimus</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../resources/css/dashboard.css">

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
    <?php 
    include "../config/conn_MySQLI.php";

    $quant_clientes0 = $sql->query("SELECT COUNT(id_UserCdstSite) AS 'qnt_cliente' FROM user_cdst_site");
    $quant_clientes1 = mysqli_fetch_array($quant_clientes0);
    $quant_clientes2 = $quant_clientes1['qnt_cliente'];
    
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
                        <h3>Olá, *usuário*.</h3>
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
                                            <h6 class="text-muted font-semibold">Clientes</h6>
                                            <h6 class="font-extrabold mb-0"><?php echo $quant_clientes2;?></h6>
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
                                            <h6 class="text-muted font-semibold">Lucro</h6>
                                            <h6 class="font-extrabold mb-0">183.000</h6>
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
                                            <h6 class="text-muted font-semibold">Encomendas</h6>
                                            <h6 class="font-extrabold mb-0">80.000</h6>
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
                                    <h4>Encomendas</h4>
                                </div>
                                <div class="col-lg-10 col-md-6 grafico1">
                                    <div>
                                        <canvas id="myChart"></canvas>
                                    </div>

                                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                                    <script>
                                        const ctx = document.getElementById('myChart');

                                        new Chart(ctx, {
                                            type: 'line',
                                            data: {
                                                labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Maio', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez', ],
                                                datasets: [{
                                                    label: 'Encomendas',
                                                    data: [12, 20, 13, 25, 15, 13, 23, 20, 15, 19, 20, 15],
                                                    responsive: true,
                                                    borderWidth: 1,
                                                    backgroundColor: 'rgba(255, 255, 255, 1)',
                                                    pointBackgroundColor: 'rgba(240, 120, 130, 1)',
                                                    pointBorderWidth: 1,
                                                    borderColor: 'rgb(240, 120, 130)',
                                                    tension: 0.5,


                                                }]
                                            },
                                            options: {
                                                scales: {
                                                    y: {
                                                        beginAtZero: true
                                                    }
                                                }
                                            }
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Novas Encomendas</h4>
                                </div>
                                <div class="card-body encomendas">
                                    <div class="card-group">
                                        <div class="card">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <h4 class="card-title">Para o dia</h4>
                                                    <div id="circulo">
                                                        <div class="info-date">
                                                            <h1>20</h1>
                                                            <h2>Dezembro</h2>
                                                        </div>
                                                    </div>
                                                    <small class="text-muted">Cliente</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <h4 class="card-title">Para o dia</h4>
                                                    <div id="circulo">
                                                        <div class="info-date">
                                                            <h1>20</h1>
                                                            <h2>Dezembro</h2>
                                                        </div>
                                                    </div>
                                                    <small class="text-muted">Cliente</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <h4 class="card-title">Para o dia</h4>
                                                    <div id="circulo">
                                                        <div class="info-date">
                                                            <h1>20</h1>
                                                            <h2>Dezembro</h2>
                                                        </div>
                                                    </div>
                                                    <small class="text-muted">Cliente</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <h4 class="card-title">Para o dia</h4>
                                                    <div id="circulo">
                                                        <div class="info-date">
                                                            <h1>20</h1>
                                                            <h2>Dezembro</h2>
                                                        </div>
                                                    </div>
                                                    <small class="text-muted">Cliente</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-content">
                                                <div class="card-body">
                                                    <h4 class="card-title">Para o dia</h4>
                                                    <div id="circulo">
                                                        <div class="info-date">
                                                            <h1>20</h1>
                                                            <h2>Dezembro</h2>
                                                        </div>
                                                    </div>
                                                    <small class="text-muted">Cliente</small>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
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
    <script src="../vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>

    <script src="../vendors/apexcharts/apexcharts.js"></script>
    <script src="../js/pages/dashboard.js"></script>

    <script src="../js/main.js"></script>
</body>

</html>