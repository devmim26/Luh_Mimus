<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/listar.css">
    <title>Listar</title>
    <style>
        table, th, td {
         border: 1px solid black;
        }
    </style>
</head>
<body>
<table id="tabela">
        <tr>
            <th>ID</th> 
            <th>CPF</th> 
            <th>NOME</th>
            <th>EMAIL</th>
            <th>DATA DE NASCIMENTO</th>
            <th>SENHA</th>
            <th>CELULAR</th>
            <th colspan="2">...</th>  
        </tr>   

<?php
    include "../config/conn_MySQLI.php";

    $dados_usuarios = $sql->query("SELECT * FROM User_Cdst_Site");
    
    while ($linha = mysqli_fetch_array($dados_usuarios)){
        $id = $linha['id_UserCdstSite'];
        $cpf = $linha['cpf_UserCdstSite'];
        $nome = $linha['nome_UserCdstSite'];
        $email = $linha['email_UserCdstSite'];
        $dtn = $linha['dtn_UserCdstSite'];
        $senha = $linha['senha_UserCdstSite'];
        $celular = $linha['celular_UserCdstSite'];

        
        echo"
        <tr>
        <td>$id</td>
        <td>$cpf</td>
        <td>$nome</td>
        <td>$email</td>
        <td>$dtn</td>
        <td>$senha</td>
        <td>$celular</td>
        </td>
        <td>
            <a href='excluir_aluno.php?cpf=$cpf' onclick=\"return confirm('Quer mesmo apagar esses dados!!!');\">
                Excluir
            </a>
        </td>
        <td>
            <a href='alterar.php?cpf=$cpf';\">
                Alterar
            </a>
        </td>
        </tr>";

    }
        echo"</table>";


?>