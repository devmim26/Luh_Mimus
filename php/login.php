<?php

include 'conn_banco.php';



if (isset($_POST['email']) || isset($_POST['senha'])){
    
    if(strlen($_POST['email']) == 0){
        echo"Prencha o campo email";

    }else if(strlen($_POST['password']) == 0){
        echo"Prencha o campo senha";

    }else{
        
        $login = $_POST['email'];
        $senha = $_POST['password'];

        $sql_logar = $sql->query("SELECT * FROM user_cdst_software WHERE cdst_sftw_email = '$login' AND cdst_sftw_senha = '$senha'");
        

        $qtd = $sql_logar->num_rows;

        if($qtd == 1){
        
            $usuario = $sql_logar->fetch_assoc();


            if(!isset($_SESSION)){
                session_start();
            }

            
            /* $_SESSION['email'] = $email;
            $_SESSION['login'] = $senha; */

            $_SESSION['id'] = $usuario['cdst_sftw_id'];
            $_SESSION['nome'] = $usuario['cdst_sftw_nome'];
            $_SESSION['senha'] = $usuario['cdst_sftw_senha'];
            $_SESSION['email'] = $usuario['cdst_sftw_email'];
            $_SESSION['cargo'] = $usuario['cdst_sftw_cargo'];
            $_SESSION['user'] = $usuario['cdst_sftw_user'];
          




            header("Location: ../software_luh_mimus-main/public/pages/dashboard.php");

        }else {
            
            header("Location: notuser.php");
        }

    }


}
?>