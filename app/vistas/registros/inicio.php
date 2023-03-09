<?php
require RUTA_APP . '/vistas/inc/head.php';
require RUTA_APP . '/vistas/inc/header.php';
?>
<main>
    <br><br>
    <div class="container-md container-lg container-sm mt-5 ">
        
        <div class="row">
            <div class="col-sm-12 col-md-3 col-lg-2 mt-4">
                <a href="<?= RUTA_URL ?>/registros/dashboard">
               <div class="card" style="width: 11rem;">
                        <img src="<?= RUTA_URL ?>/img/formulario_01.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">CONTABILIDAD 2023</p>
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <div class="mx-auto">
                                    <a href="<?= RUTA_URL?>/formularios/lista01" class="btn btn-primary btn-sm"><i class="fa-solid fa-magnifying-glass"></i> Revisar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</main>
<div >
    <?php
    require RUTA_APP . '/vistas/inc/footer.php';
    ?>
</div>