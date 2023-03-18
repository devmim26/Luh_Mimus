<?php

include'conn_banco.php';

$cpf = $_POST['cpf'];
$avatar = $_FILES['avatar']['name'];
$uploaddir = "avatar/";
$separa =  explode(".", $avatar);
$separa = array_reverse($separa);
$tipo = $separa[0];
$avatar_final = $cpf . '.' . $tipo;
$avatar_UserCdstSite = $uploaddir . $avatar_final;
unlink("../$avatar_UserCdstSite");

$sql->query("UPDATE user_cdst_site SET avatar_UserCdstSite='$avatarbd' WHERE cpf = '$cpf' ");
move_uploaded_file($_FILES['avatar']['tmp_name'],'../' .  $uploaddir . $avatar_final);





?>