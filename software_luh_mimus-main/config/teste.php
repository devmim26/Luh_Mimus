<?php 

    require 'Database.php';
    require 'conn_PDO.php';

    session_start();

    require_once('config.php');

    require_once('../vendor/autoload.php');

    $bd = new Database();
    $anuncios = $bd->select("SELECT * FROM anuncios");

