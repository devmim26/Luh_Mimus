<?php
    include "../config/conn_MySQLI.php";

    $cpf = $_GET['cpf'];

    $dados_clientes = $sql->query("SELECT * FROM User_Cdst_Site WHERE cpf_UserCdstSite = '$cpf'");


    mysqli_query($sql, "DELETE FROM User_Cdst_Site WHERE cpf_UserCdstSite ='$cpf'");
    
    echo "Dados excluídos com sucesso";
    echo "<meta http-equiv='refresh' content='4;url=clientes.php'>";
?>