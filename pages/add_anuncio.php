<?php
    include "../config/conn_MySQLI.php";

    $nome = $_POST['nome'];
    $valor = $_POST['valor'];
    $desc = $_POST['desc'];
    $uploaddir = "image/produtos2";
    $avatar = $_FILES['avatar']['name'];
    $separa = explode(".", $avatar);
    $separa = array_reverse($separa);
    $tipoa = $separa[0];
    $avatarf = $nome. '.' . $tipoa;
    
    $testar = $sql->query("SELECT * FROM anuncios WHERE nome_anuncios = '$nome'");
    $check = mysqli_num_rows($testar);

    if ($check == 1){
        echo "Anuncio já cadastrado";
    }else{
        move_uploaded_file($_FILES["avatar"]["tmp_name"], "../" . $uploaddir . 
        $avatarf);

        $avatarbd = $uploaddir . $avatarf;

        $sql->query("INSERT INTO anuncios(id_anuncios, id_categorias, nome_anuncios, valor_anuncios, desc_anuncios, img_anuncios) VALUES
        (NULL, NULL,'$nome','$valor','$desc','$avatarbd')");

        header('Location: anuncios2.php');

    }

    
