<?php

include '../includes/menuHeaderBar.php';


if(!isset($_SESSION)){
    session_start();
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes | Luh Mimu's</title>

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

        <div class="page-heading" style="width: 100%;">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Lista de usuários</h3>
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        Todos (x)
                    </div>
                    <div class="card-body">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th style="width: 40px;">Excluir</th>
                                    <th style="width: 45px;">Detalhes</th>
                                    <th>Foto</th>
                                    <th style="width: 30px;">ID</th>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>CPF</th>
                                    <th>Contato</th>
                                </tr>
                            </thead>

                            <script>
                                        var modalId = document.getElementById('modalId');

                                        modalId.addEventListener('show.bs.modal', function(event) {
                                            // Button that triggered the modal
                                            let button = event.relatedTarget;
                                            // Extract info from data-bs-* attributes
                                            let recipient = button.getAttribute('data-bs-whatever');

                                            // Use above variables to manipulate the DOM
                                        });
                                    </script>

                            <tbody>
                                

                    </div>
                </div>


                <script src="../vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
                <script src="../js/bootstrap.bundle.min.js"></script>

                <script src="../vendors/simple-datatables/simple-datatables.js"></script>
                <script>
                    // Simple Datatable
                    let table1 = document.querySelector('#table1');
                    let dataTable = new simpleDatatables.DataTable(table1);
                </script>

                <script src="../js/main.js"></script>
                
</body>

</html>

<?php
include "../config/conn_MySQLI.php";

$dados_usuarios = $sql->query("SELECT * FROM User_Cdst_Site");


while ($linha = mysqli_fetch_array($dados_usuarios)) {
    $id = $linha['id_UserCdstSite'];
    $cpf = $linha['cpf_UserCdstSite'];
    $nome = $linha['nome_UserCdstSite'];
    $email = $linha['email_UserCdstSite'];
    $dtn = $linha['dtn_UserCdstSite'];
    $senha = $linha['senha_UserCdstSite'];
    $celular = $linha['celular_UserCdstSite'];


    echo "
    <!-- Modal -->
    <div class='modal fade' id='modalId' tabindex='-1' role='dialog' aria-labelledby='modalTitleId' aria-hidden='true'>
        <div class='modal-dialog' role='document'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <h5 class='modal-title' id='modalTitleId'>Excluir?</h5>
                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                </div>
                <div class='modal-body'>
                    <div class='container-fluid'>
                        Tem certeza que deseja excluir esse perfil?
                    </div>
                </div>
                <div class='modal-footer'>
                    <button type='button' class='btn btn-dark' data-bs-dismiss='modal'>Cancelar</button>
                    <a href='excluir_Cliente.php?cpf=$cpf'><button type='button' class='btn btn-dark'>Excluir</button></a>
                </div>
            </div>
        </div>
    </div>

        <tr>

        
            <td>
            
            <button type='button' class='btn btn-primary btn-lg icon' data-bs-toggle='modal' data-bs-target='#modalId'><i class='bi bi-trash'></i>
                                        </button>
            </td>

            <td>
            <a href='usuario.php?cpf=$cpf'>
            <button type='button' class='btn btn-primary btn-lg icon'><i class='bi bi-info-circle'></i>
                                        </button></a>
            </td>
        
        <td>imagem</td>
        <td>$id</td>
        <td>$nome</td>
        <td>$email</td>
        <td>$cpf</td>
        <td>$celular</td>
 
        </tr>";
}
echo "
    </tbody>
        </table>
        </section>
            </div>";

// Footer
include '../includes/footer.php';


echo "</div>";

echo "</div>";

?>