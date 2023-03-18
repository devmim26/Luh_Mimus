<?php

     //Salvar cadastro com validação 

     include 'conn_banco.php';
     
     $cpf = $_POST['cpf'];
     $nome = $_POST['nome'];
     $email = $_POST['email'];
     $dtn = $_POST['dtn'];
     $senha = $_POST['senha'];
     $celular = $_POST['celular'];
     $endereco = $_POST['Endereco'];
     $nres = $_POST['n_residencia'];
     $cep = $_POST['cep'];
     $complemento = $_POST['complemento'];
     
     $testar = $sql->query("SELECT * FROM User_Cdst_Site WHERE cpf_UserCdstSite = '$cpf'");

     $check = mysqli_num_rows($testar);
 
     if ($check != 0){

        // echo "<h4><center><font color='white'>CPF $cpf já está cadastrado.</font></center></h4>";
        // echo "<a href='../HTML/login.html'><button type='button'><span></span>TENTE NOVAMENTE</button></a>";
        include 'errocpf.php';
        header("Refresh:6; url=cadastro2.php");


     }else{
         
         $sql->query("INSERT INTO User_Cdst_Site(cpf_UserCdstSite, nome_UserCdstSite, email_UserCdstSite, dtn_UserCdstSite, celular_UserCdstSite, senha_UserCdstSite, ender_UserCdstSite, cep_UserCdstSite, nres_UserCdstSite, complemento_UserCdstSite) VALUES
         ('$cpf','$nome','$email','$dtn','$celular','$senha','$endereco','$cep','$nres','$complemento')");


        // echo "<a href='../HTML/login.html'><center><button type='button'></center><span></span>LOGIN</button></a>";
        include 'cadastrosucesso.php';
        header("Refresh:6; url=../html/login2.html");
     }

 