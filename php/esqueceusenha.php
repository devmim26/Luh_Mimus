<?php

    include("conn_banco.php");

    if(isset($_POST['ok'])){

        $email = $mysqli->escape_string($_POST['email']);

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $erro[] = "Email inválido.";
        }

        $sql_code = "SELECT senha_UserCdstSite, id_UserCdstSite FROM user_cdst_site WHERE email_UserCdstSite = '$email'";
        $sql_query = $mysqli->query($sql_code) or die($mysqli->error);
        $dado = $sql_query->fetch_assoc();
        $total = $sql_query->num_rows;

        if($total == 0){
            $erro[] = "O email informado não existe no banco de dados";
        }


        if(count($erro) == 0 && $total > 0){

            $novasenha = subster(md5(time()), 0, 6);
            $nscriptografada = md5(md5($novasenha));
            
    
            if(mail($email, "Sua nova senha:", $novasenha)){
    
                $sql_code = "UPDATE user_cdst_site SET senha_UserCdstSite = '$nscriptografada' WHERE email_UserCdstSite = '$email' ";
                $sql_query = $mysqli->query($sql_code) or die($mysqli->error);

                // if($sql_query){
                //     $erro[] = "Senha Alterada com sucesso!"
                // }
                    
            
            }

        }
    

    }

?>

