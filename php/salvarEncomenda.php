<?php
include 'conn_banco.php';

$peso = $_POST['peso'];
$massa = $_POST['massa'];
$tema = $_POST['tema'];
$img = $_FILES['img']['name'];
$uploaddir = "img_encomendas/";
$separa = explode(".", $img);
$separa = array_reverse($separa);
$tipoa = $separa[0];
$imgrf = $peso . '.' . $tipoa;

$testar = $sql->query("SELECT * FROM encomenda WHERE massa_encomendas = '$massa'");
$check = mysqli_num_rows($testar);

if ($check == 1) {
  header('location: ../includes/calendario/calendario.php');
} else {
  move_uploaded_file($_FILES["img"]["tmp_name"], "../" . $uploaddir .
    $imgrf);

  $imgbd = $uploaddir . $imgrf;

  $sql->query("INSERT INTO encomenda(id_encomenda, id_anuncios, id_eventos, qtd_encomenda, massa_encomendas, tema_encomenda, img_encomenda) VALUES
        (NULL, NULL, NULL, '$peso', '$massa', '$tema','$imgbd')");

  header('location: ../includes/calendario/calendario.php');
}

?>