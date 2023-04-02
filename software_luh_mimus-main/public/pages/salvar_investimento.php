<?php 
include "../../config/conn_mySQLI.php";

     $valorDoInvestimento0 = $_POST['valor_investimento'];
     $valorDoInvestimento = str_replace(",",".", $valorDoInvestimento0);
     

     $sql->query("INSERT INTO investimento(investimento_valor) VALUES
     ('$valorDoInvestimento')");
     

    header("Refresh:1; url=financas.php");
?>