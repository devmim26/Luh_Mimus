<?php

include 'conn_banco.php';

if(!isset($_SESSION['id'])){
    session_start();
    
}
    $idTeste = $_SESSION['id'];
    $cpf = $_POST['cpf'];
    $nome = $_POST['nome'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $dtn = $_POST['dtn'];
    $senha = $_POST['senha'];
    /* $avatar = $_FILES['avatar']['name'];
    $uploaddir = "avatar/";
    $separa =  explode(".", $avatar);
    $separa = array_reverse($separa);
    $tipo = $separa[0];
    $avatar_final = $cpf . '.' . $tipo;
    $avatar_UserCdstSite = $uploaddir . $avatar_final;
    unlink("../$avatar_UserCdstSite");

    $sql->query("INSERT INTO user_cdst_site SET avatar_UserCdstSite='$avatar_UserCdstSite' WHERE cpf_UserCdstSite = '$cpf' ");
    move_uploaded_file($_FILES['avatar']['tmp_name'],'../' .  $uploaddir . $avatar_final); */

     
    $sql->query("UPDATE user_cdst_site SET nome_UserCdstSite='$nome', email_UserCdstSite='$email',
    dtn_UserCdstSite='$dtn', senha_UserCdstSite='$senha', celula_UserCdstSiter='$celular', cpf_UserCdstSite='$cpf' WHERE id= '$idTeste'");


    // echo "<a href='../HTML/login.html'><center><button type='button'></center><span></span>LOGIN</button></a>";
    include 'cadastrosucesso.php';
    header("Refresh:6; url=perfilFeito.php");
 

    
    ?>