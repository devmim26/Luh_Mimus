<?php
include "../../config/conn_mySQLI.php";

$nomeDaDespesa = $_POST['nome_lucro'];
$valorDaDespesa0 = $_POST['valor_lucro'];
$valorDaDespesa = str_replace(",",".", $valorDaDespesa0);

$sql->query("INSERT INTO lucro_bruto(tipo_lucro, valor) VALUES
('$nomeDaDespesa','$valorDaDespesa')");

header("Refresh:1; url=financas.php");