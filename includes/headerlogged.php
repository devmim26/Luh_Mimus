<?php

if(!isset($_SESSION)){
    session_start();
}


?>


<html> 

<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home | Confeitaria Luh Mimu's</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../css/responsive.css">
  <script defer src="./js/app.js"></script>
  <style>
    @media (min-width: 340px) and (max-width: 379px) {

/*Header para celular*/
  .nav-link{
    margin-top: -10px;
    width: 100%;
    text-align: center;
  }
  .header-topo{
    width: 100%;
  }
  #cabeca{
    margin-top: 40px;
    margin-left: 66px;
  }
/*fim*/
}
    </style>
</head>

<body>
  <div class="container-fluid">
    <!--start header-->
    <div class="header-topo">
      <nav class="navbar navbar-expand-lg navbar-light back">
        <div class="container-fluid justify-content-between">
          <ul class="navbar-nav flex-row logo" id="logotipo">
            <a class="nav-link" href="../index.html">
              <img src="../images/logo.jfif" alt="" width="140px">
            </a>
          </ul>

          <ul class="navbar-nav flex-row icones" id="cabeca" style="margin-top: 25px;">
          <p style="margin-top: 5px;">Bem vindo(a) <br> <?php echo $_SESSION['nome'];?><p>
            <li class="nav-item me-3 me-lg-1">

            <li class="nav-item dropdown">
              
                <a class="nav-link dropdown-toggle" href="../html/perfilFeito.html" id="dropdownId"
                  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                  data-hover="Produtos"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-person"
                          viewBox="0 0 16 16">
                          <path
                            d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                        </svg> </a> 
                        
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                  <a class="dropdown-item" href="../php/perfilFeito.php" data-hover="Contato">Meu perfil</a>
                  <a class="dropdown-item" href="../php/perfilFeito.php" data-hover="Contato">Minhas encomendas</a>
                  <a class="dropdown-item" href="./php/favoritoslogged.php" data-hover="Contato">Favoritos </a>
                  <hr>
                  <a class="dropdown-item" href="../php/logout.php" data-hover="Contato">Sair</a>
                 
                </div>
                
              </li>
           
            </li>
            <li class="nav-item me-3 me-lg-1">
              <a class="nav-link d-sm-flex align-items-sm-center" href="./html/favoritovazio.html">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                  <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                </svg>
              </a>
            </li>
            <li class="nav-item me-3 me-lg-1">
              <a class="nav-link d-sm-flex align-items-sm-center" href="./html/carrinhovazio.html">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                  <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
                </svg>
              </a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <hr>
    </html>