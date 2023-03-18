<?php
    /* $hostname = "localhost";
    $banco = "luh_mimus";
    $user = "root";
    $senha = "512";

     
    $sql = new mysqli($hostname, $user, $senha, $banco);
     
    if ($sql->connect_errno){
        echo"Falha ao conectar (" . $sql->connect_errno . ")" . $sql->connect_errno;
    } */

     //conectar banco hospedado nuvem

     $hostname = "luhmimus.mysql.dbaas.com.br";
     $banco = "luhmimus";
     $user = "luhmimus";
     $senha = "Luhmimus@2022";
 
      
     $sql = new mysqli($hostname, $user, $senha, $banco);
      
     if ($sql->connect_errno){
         echo"Falha ao conectar (" . $sql->connect_errno . ")" . $sql->connect_errno;
     } 


    
?>