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
    <title>Calendário - Luh' Mimus</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../resources/css/bootstrap.css">
    <link rel="stylesheet" href="../lib/iconly/bold.css">
    <link rel="stylesheet" href="../css/responsive.css">

    <link rel="stylesheet" href="../lib/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../lib/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../resources/css/anuncios.css">
    <link rel="stylesheet" href="../resources/css/app.css">
    <link rel="shortcut icon" href="../images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" href="../resources/css/dashboard.css">

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
  

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous">
  
    <link rel="stylesheet" href="../resources/css/stylecardapio.css">

</head>

<body>
    <!-- Header -->
    <?php
    include '../includes/menuHeaderBar.php';
    ?>

    <!---Calendário-->

    <?php 
        include "calendario.php";
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