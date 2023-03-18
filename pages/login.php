<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resources/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="resources/css/bootstrap.css">
    <link rel="stylesheet" href="lib/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="resources/css/app.css">
    <link rel="stylesheet" href="resources/css/pages/auth.css">
    <script src="resources/js/app.js"></script>
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="image">
            <img src="resources/images/login.svg" alt="">
        </div>
        <div class="form">
            <form action="#">
                <div class="form-header">
                    <div  class="title">
                        <img src="resources/images/logo.jfif">
                        <h1>BEM VINDO(A)!</h1>
                    </div>
                </div>
                <form action="index.html">
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="text" class="form-control form-control-xl" placeholder="Email">
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input type="password" class="form-control form-control-xl" placeholder="Senha">
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                    </div>
                
                    <a href="./html/dashboard.html" class="btn btn-secondary btn-block btn-lg shadow-lg mt-5 login">Entrar</a> 
                </form>
                <div class="text-center mt-5
                
                text-lg fs-4">
                    <p><a class="font-bold" href="html/recuperar-senha.html">Esqueci minha senha</a>.</p>
                </div>
            </div>
        </div>
