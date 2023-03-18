<?php
    include "../config/conn_MySQLI.php";

    $id = $_GET['id'];

    $dados_clientes = $sql->query("SELECT * FROM despesa WHERE id_despesas = '$id'");


    mysqli_query($sql, "DELETE FROM despesas WHERE id_despesas ='$id'");
    
    echo "Dados excluídos com sucesso";
    echo "<meta http-equiv='refresh' content='1;url=financas.php'>";
?>