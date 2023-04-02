<?php
    include "../../config/conn_MySQLI.php";

    $id = $_GET['id'];

    $dados_clientes = $sql->query("SELECT * FROM lucro_bruto WHERE id = '$id'");


    mysqli_query($sql, "DELETE FROM lucro_bruto WHERE id ='$id'");
    
    echo "Dados excluídos com sucesso";
    echo "<meta http-equiv='refresh' content='1;url=financas.php'>";
?>