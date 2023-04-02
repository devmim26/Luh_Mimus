<?php

include '../includes/menuHeaderBar.php';

if(!isset($_SESSION)){
    session_start();
}

?>
<?php 
include "../config/conn_MySQLI.php";
$cpf = $_GET['cpf'];

$dados_usuarios = $sql->query("SELECT * FROM User_Cdst_Site WHERE cpf_UserCdstSite = '$cpf'");

$linha = mysqli_fetch_array($dados_usuarios);
$id = $linha['id_UserCdstSite'];
$nome = $linha['nome_UserCdstSite'];
$email = $linha['email_UserCdstSite'];
$dtn = $linha['dtn_UserCdstSite'];
$senha = $linha['senha_UserCdstSite'];
$celular = $linha['celular_UserCdstSite'];
$endereco =  $linha['ender_UserCdstSite'];
$nres = $linha['nres_UserCdstSite'];
$cep = $linha['cep_UserCdstSite'];
$complemento  = $linha['complemento_UserCdstSite'];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuário | Luh Mimu's</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../resources/css/bootstrap.css">

    <link rel="stylesheet" href="../lib/simple-datatables/style.css">
    <link rel="stylesheet" href="../resources/css/dashboard.css">

    <link rel="stylesheet" href="../lib/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../lib/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../resources/css/app.css">
    <link rel="shortcut icon" href="../images/favicon.svg" type="image/x-icon">
</head>

<body>



    <!-- Menu Lateral -->
    <?php
    include '../includes/menuLateral.php';
    ?>
    
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/main.js"></script>

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
                        <h3>Detalhes do usuário</h3>
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-header" style="text-align: center;">
                        imagem
                    </div>
                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                            <tr>
                                <th style="width: 300px;">
                                    Nome
                                </th>
                                <td>
                                    <?php echo $nome;?>
                                </td>
                            </tr>
                            <tr>
                                <th style="width: 300px;">
                                    Email
                                </th>
                                <td>
                                <?php echo $email;?>
                                </td>
                            </tr>
                            <tr>
                                <th style="width: 300px;">
                                    CPF
                                </th>
                                <td>
                                <?php echo $cpf;?>
                                </td>
                            </tr>
                            <tr>
                                <th style="width: 300px;">
                                    Contato
                                </th>
                                <td>
                                <?php echo $celular;?>
                                </td>
                            </tr>
                            
                            <tr>
                                <th style="width: 300px;">
                                    Data de Nascimento
                                </th>
                                <td>
                                <?php echo $dtn;?>
                                </td>
                            </tr>
                            <tr>
                                <th style="width: 300px;">
                                    Senha
                                </th>
                                <td>
                                <?php echo $senha;?>
                                </td>
                            </tr>
                            <tr>
                                <th style="width: 300px;">
                                    CEP
                                </th>
                                <td>
                                    <?php echo $cep ?>
                                </td>
                            </tr>
                            <tr>
                                <th style="width: 300px;">
                                    Endereço
                                </th>
                                <td>
                                    <?php echo $endereco ?>
                                </td>
                            </tr>
                            <tr>
                                <th style="width: 300px;">
                                    Nº
                                </th>
                                <td>
                                    <?php echo $nres ?>
                                </td>
                            </tr>
                            <tr>
                                <th style="width: 300px;">
                                    Complemento
                                </th>
                                <td>
                                    <?php echo $complemento ?>
                                </td>
                            </tr>
                        </table>
                        </div>
                </div>
                        </section>
                        </div>