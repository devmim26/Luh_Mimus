<?php
include 'conn_banco.php';

//Selecioa todos os dados da tabela anuncios
$dados_anuncios = $sql->query("SELECT * FROM anuncios");
//calcula o número de linhas, ou seja, a qtd de resgistros
$total = mysqli_num_rows($dados_anuncios);

?>
        <div class="owl-carousel active_course owl-loaded owl-drag">
            <div class="owl-stage-outer">
                <?php while ($linha = mysqli_fetch_assoc($dados_anuncios)) { ?>
                    <div class="owl-item active" style="width: 330px; ">
                        <div class="single_course">
                            <div class="course_head">
                                <a href="#productView" data-bs-toggle="modal"> <img class="img-fluid" src="../<?php echo $avatar = $linha['img_anuncios'];?>" alt="" /></a>
                            </div>
                            <div class="course_content">
                                <span class="price"><?php echo $valor = $linha['valor_anuncios']; ?></span>
                                <span class="tag mb-4 d-inline-block">O cento</span>
                                <h4 class="mb-3">
                                    <a href="#productView" data-bs-toggle="modal">
                                        <?php echo $nome = $linha['nome_anuncios']; ?>
                                    </a>
                                </h4>
                                <p>
                                <?php echo $avatar = $linha['img_anuncios'];?>
                                    <?php echo $desc = $linha['desc_anuncios']; ?>
                                    <br>
                                    Pedido mínimo 50 unidades.
                                </p>
                                <div class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4">
                                    <div class="mt-lg-0 mt-3">
                                    </div>
                                </div>
                                <div class="btns-cardapio">
                                    <a class="btn btn-outline-dark" href="../lib_calendar/calendario.php" role="button">Encomendar</a>
                                </div>
                                <div class="btn_fav">
                                    <a class="nav-link d-sm-flex align-items-sm-center add-cart cart36" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                        </svg>
                                    </a>
                                </div>

                            </div>

                        </div>
                    </div>
                <?php } ?>