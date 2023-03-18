<?php 
include "../config/conn_mySQLI.php";

     $nomeDaDespesa = $_POST['nome_despesa'];
     $valorDaDespesa0 = $_POST['valor_despesa'];
     $valorDaDespesa = str_replace(",",".", $valorDaDespesa0);
     $valorTot = 0;

     $sql->query("INSERT INTO despesas(nome_despesas, valor_despesas, total_despesas) VALUES
     ('$nomeDaDespesa','$valorDaDespesa', $valorTot)");

    header("Refresh:1; url=financas.php");
?>