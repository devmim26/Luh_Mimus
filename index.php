<?php

//Abrir sessão 
session_start();

//carregar autoload (todas as classes do projeto)
require_once('../vendor/autoload.php');

//carregar config
require_once('../config/config.php'); 

//carregar o sistemas de rotas (loja, carrinho...)