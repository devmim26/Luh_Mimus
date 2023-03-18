<?php

include 'conn_banco.php';

include 'protect.php';


if(!isset($_SESSION['nome'])){
    session_start();
    
}
$cpf1 = $_SESSION['cpf'];

$dados_usuarios = $sql->query("SELECT * FROM User_Cdst_Site WHERE cpf_UserCdstSite = '$cpf1'");

$linha = mysqli_fetch_array($dados_usuarios);

$endereco =  $linha['ender_UserCdstSite'];
$nres = $linha['nres_UserCdstSite'];
$cep = $linha['cep_UserCdstSite'];
$complemento  = $linha['complemento_UserCdstSite'];


?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <title>Perfil | Confeitaria Luh Mimu's</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/perfilFeito.css">
    <link rel="stylesheet" href="../css/responsive.css">
</head>

<body>
<form method="POST" action="updateuser.php">
    <div class="container-fluid">
        <section class="py-5 my-5">
            <div class="container">
                <div class="container-fluid botaovolta">
                    <a href="../php/iniciologged.php" class="font-weight-bold back"> <svg xmlns="http://www.w3.org/2000/svg"
                            width="30" height="30" fill="currentColor" class="bi bi-arrow-left-circle-fill"
                            viewBox="0 0 16 16">
                            <path
                                d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                        </svg></a>
                </div>
                <h1 class="mb-5">Configurações da Conta</h1>
                <div class="bg-white shadow rounded-lg d-block d-sm-flex">
                    <div class="profile-tab-nav border-right">
                        <div class="max-width">
                            <div class="imageContainer">
                                <img src="../images/user.png" alt="Selecione uma imagem" name="avatar" id="imgavatar">
                                
                            </div>
                        </div>
                        <div class="p-4">
                            <input type="file" id="fileavatar" name="avatar" accept="image/*">
                            <script src="../js/perfilfeito.js"></script>
                            <h4 class="text-center"><?php echo $_SESSION['nome'];?></h4>
                        </div>
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                            aria-orientation="vertical">
                            <a class="nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab"
                                aria-controls="account" aria-selected="true">
                                <i class="fa fa-user text-center mr-1"></i>
                                Editar Perfil
                            </a>
                            <a class="nav-link" id="password-tab" data-toggle="pill" href="#password" role="tab"
                                aria-controls="password" aria-selected="false">
                                <i class="fa fa-key text-center mr-1"></i>
                                Histórico de Pedidos
                            </a>
                        </div>
                    </div>
                    <div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="account" role="tabpanel"
                            aria-labelledby="account-tab">
                            <h3 class="mb-4">Editar Perfil</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nome</label>
                                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Ex: Maria" value= <?php echo $_SESSION['nome'];?>>
                                       
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" class="form-control" name="email" id="email" placeholder=" Ex: Eduarda" value= <?php echo $_SESSION['email'];?> >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>CPF/CNPJ</label>
                                        <input type="text" class="form-control"  name="cpf" id="cpf" placeholder="Digite seu CPF" requiredonfocus="javascript: retirarFormatacao(this);" onblur="javascript: formatarCampo(this);" maxlength="14" value= <?php echo $_SESSION['cpf'];?>>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Número de Telefone</label>
                                        <input type="text" class="form-control" name="celular" id="telefone" placeholder="(ddd) 00000-0000" value= <?php echo $_SESSION['celular'];?>>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Endereço</label>
                                        <input type="text" class="form-control" name="endereco" id="endereco" value="<?php echo $endereco;?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>CEP</label>
                                        <input type="text" class="form-control" name="cep" id="cep" value="<?php echo $cep;?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nº</label>
                                        <input type="text" class="form-control" name="nres" id="nres" value="<?php echo $nres;?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Complemento</label>
                                        <input type="text" class="form-control" name="complemento" id="complemento" value="<?php echo $complemento;?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Data de Nascimento</label>
                                        <input type="date" class="form-control" name="dtn" id="dtn" value= <?php echo $_SESSION['dtn'];?>>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Senha</label>
                                        <input type="text" class="form-control" placeholder="Digite sua senha antiga" value= <?php echo $_SESSION['senha'];?> readonly>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nova senha</label>
                                        <input type="text" class="form-control" name="senha" id="senha" placeholder="Digite sua nova senha">
                                    </div>
                                </div>
                                <script src="../js/mascaras.js"></script>
                                
                            </div>
                            <br>
                                <!-- Button trigger modal -->
                                <button type="submit" class="btn btn-primary salvar" data-bs-toggle="modal"
                                    data-bs-target="#modalId">
                                    Salvar
                                </button>
                            <div>
                                

                                <!-- Modal -->
                                <div class="modal fade" id="modalId" tabindex="-1" role="dialog"
                                    aria-labelledby="modalTitleId" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalTitleId">Parabéns!</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="container-fluid">
                                                    Dados atualizados com sucesso
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <script>
                                    var modalId = document.getElementById('modalId');

                                    modalId.addEventListener('show.bs.modal', function (event) {
                                        // Button that triggered the modal
                                        let button = event.relatedTarget;
                                        // Extract info from data-bs-* attributes
                                        let recipient = button.getAttribute('data-bs-whatever');

                                        // Use above variables to manipulate the DOM
                                    });
                                </script>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
                            <h3 class="mb-4">Histórico de pedidos</h3>
                            <div class="card-group">
                                <div class="card">
                                    <img class="card-img-top" src="../images/produtos/beijinho.png"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">*Nome do produto*</h4>
                                        <p class="card-text">*Preço*</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="../images/produtos/beijinho.png"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">*Nome do produto*</h4>
                                        <p class="card-text">*Preço*</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top" src="../images/produtos/beijinho.png"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">*Nome do produto*</h4>
                                        <p class="card-text">*Preço*</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
                            <h3 class="mb-4">Cartões</h3>
                        <div class="row" id="cartoes">
                            <div class="card-group" style="margin-bottom: 20px;">
                                <div class="card">
                                    <img class="card-img-top1" src="../images/cartao.svg"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="cartao-card-title">*Número do Cartão*</h4>
                                        <p class="cartao-card-text">*Banco*</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top1" src="../images/cartao.svg"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="cartao-card-title">*Número do Cartão*</h4>
                                        <p class="cartao-card-text">*Banco*</p>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="card-img-top1" src="../images/cartao.svg"
                                        alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="cartao-card-title">*Número do Cartãp*</h4>
                                        <p class="cartao-card-text">*Banco*</p>
                                    </div>
                                </div>
                            </div>
                            
                                <button class="btn btn-primary salvar" onclick="adicionarCartao()">Adcionar Cartão</button>
                            
                        </div>
                        <div id="dadosNovoCartao">
                            <h4 style="text-align: center;font-size: 20px;">Insira as informações do seu cartão para cadastra-lo</h4>
                            <br>
                            <label for="nCartao">Número do Cartão</label>
                            <input class="form-control" style="width: 100%;" type="number" id="nCartao">
                            
                            <br>
                            <label for="cvv">CVV</label>
                                    <input type="text" class="form-control" id="cvv">
                            <br>
                            <label for="validade">Validade</label>
                                    <input type="date" class="form-control" id="validade">
                            <br>
                            <label for="ntitular">Nome do Titular</label>
                            <input class="form-control" style="width: 100%;" type="text" id="ntitular">
                            <br>
                            <label for="cpf">CPF/CNPJ do Titular</label>
                            <input class="form-control" style="width: 100%;" type="text" id="cpf">
                            <br>
                            <button class="btn btn-primary salvar" onclick="salvarCartao()">Salvar</button>
                        </div>
                            
                        </div>

                        <div class="tab-pane fade" id="application" role="tabpanel" aria-labelledby="application-tab">
                            <h3 class="mb-4">Sair da tela de edição de perfil?</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    </div>
                                </div>
                            </div>
                            <div>
                                <a class="btn btn-primary btn-lg confirm" href="../index.html" role="button">Sim</a>
                                <a class="btn btn-primary btn-lg confirm" href="#" role="button">Não</a>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="notification" role="tabpanel" aria-labelledby="notification-tab">
                            <h3 class="mb-4">Notification Settings</h3>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="notification1">
                                    <label class="form-check-label" for="notification1">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum accusantium
                                        accusamus, neque cupiditate quis
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="notification2">
                                    <label class="form-check-label" for="notification2">
                                        hic nesciunt repellat perferendis voluptatum totam porro eligendi.
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="notification3">
                                    <label class="form-check-label" for="notification3">
                                        commodi fugiat molestiae tempora corporis. Sed dignissimos suscipit
                                    </label>
                                </div>
                            </div>
                            <div>
                                <button class="btn btn-primary">Update</button>
                                <button class="btn btn-light">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
        function adicionarCartao(){
            var addCartao = document.getElementById('dadosNovoCartao')
            var cartoesSalvos = document.getElementById('cartoes')

            addCartao.style.display = 'block'
            cartoesSalvos.style.display = 'none'
        }

        function salvarCartao(){
            var addCartao = document.getElementById('dadosNovoCartao')
            var cartoesSalvos = document.getElementById('cartoes')

            addCartao.style.display = 'none'
            cartoesSalvos.style.display = 'block'
        }
    </script>
    </div>
    </form>
</body>

</html>