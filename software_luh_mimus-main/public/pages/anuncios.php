<?php
include "../config/conn_MySQLI.php";
include '../includes/menuLateral.php';

$sql_code_categories = "SELECT * FROM categorias ORDER BY nome_categorias ASC";
$sql_query_categories = $sql->query($sql_code_categories) or die($sql->error);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bolos - Luh' Mimus</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../resources/css/dashboard.css">

    <link rel="stylesheet" href="../resources/css/bootstrap.css">
    <link rel="stylesheet" href="../lib/iconly/bold.css">
    <link rel="stylesheet" href="../lib/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../lib/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../resources/css/app.css">
    <link rel="shortcut icon" href="../images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../resources/css/anuncios.css">


    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
  

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous">
  
    <link rel="stylesheet" href="../resources/css/stylecardapio.css">

</head>

<body>
    <!-- Header -->
    <?php
    include '../includes/menuHeaderBar.php';
    ?>

    <!---Fim do header do topo-->
    <br>
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>
        <!--Modal de adicionar anúncio-->
        <div class="modal fade" id="modalId" tabindex="-1" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitleId">Adicionar novo anúncio ao site</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <!-- Formulário de cadastro do anuncios -->
                    <form action="Addbolo.php" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="container-fluid">
                                <!-- nome -->
                                <div class="mb-3">
                                    <label for="nome" class="form-label">Nome:</label>
                                    <input type="text" class="form-control" name="nome" id="nome" aria-describedby="emailHelpId" placeholder="Ex: Bolo de morango">
                                </div>
                                <!-- preço -->
                                <div class="mb-3">
                                    <label for="valor" class="form-label">Preço: (por quilo)</label>
                                    <input type="text" class="form-control" name="valor" id="valor" aria-describedby="emailHelpId" placeholder="R$90,00">
                                </div>

                                <div class="mb-3">
                                    <label for="nome" class="form-label">Recheio:</label>
                                    <input type="text" class="form-control" name="recheio" id="nome" aria-describedby="emailHelpId" placeholder="Ex: Brigadeiro">
                                </div>

                                <div class="mb-3">
                                    <label for="nome" class="form-label">Massa:</label>
                                    <input type="text" class="form-control" name="massa" id="nome" aria-describedby="emailHelpId" placeholder="Ex: Brigadeiro">
                                </div>

                                <!-- descrição -->
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="desc" rows="3"></textarea>
                                </div>

                                <!-- imagens -->
                                <div class="mb-3">
                                    <label for="avatar" class="form-label">Adicione a imagem</label>
                                    <input type="file" class="form-control" name="img_bolo" id="avatar" aria-describedby="emailHelpId" placeholder="Ex: Brigadeiro de chocolate">
                                </div>
                                <!-- botão -->
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-dark">Salvar</button>
                                    <button type="reset" class="btn btn-dark" data-bs-dismiss="modal">Cancelar</button>

                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- Fim formulário -->

                </div>
            </div>
        </div>
        <!--fim do modal de adicionar-->

        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Cadastre os bolos</h3>
                    </div>
                </div>
            </div>
            <nav class="nav justify-content-center ">
                <a class="nav-link add" data-bs-toggle="modal" data-bs-target="#modalId"> + Adicionar bolos ao site </a>
            </nav>
        </div>

        <!-- Total de registros -->
        <p>Todos(25)</p>


        <!-- Vitrine de produtos cadastrados -->
        <?php 
                // include '../includes/cardsBolo.php'
        ?>


        <!-- footer -->
        <?php
        include '../includes/footer.php';
        ?>
    </div>

        <script src="../lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <script src="../resources/js/bootstrap.bundle.min.js"></script>

        <script src="../lib/apexcharts/apexcharts.js"></script>
        <script src="../resources/js/pages/dashboard.js"></script>

        <script src="../resources/js/main.js"></script>
</body>

</html>