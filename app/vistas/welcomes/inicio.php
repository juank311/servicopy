<div id="login">
    <?php
    require RUTA_APP . '/vistas/inc/head.php';
    require RUTA_APP . '/vistas/inc/header.php';
    ?>
    <main>
        <br><br>
        <div class="container mt-5">
            <div class="row border" style="border-radius: 15px;">
                <div class="col-md-12 mx-auto">
                    <div class="row">
                        
                        <div class="col-12 mt-5 d-flex align-items-center justify-content-center">
                            <img src="<?= RUTA_URL ?>/img/logo.png" class="img-fluid" alt="Responsive image font-weight-bold" style="width: 40vmin;">
                        </div>
                        <div class="mt-5">
                            <h2>Formatos y Planillas en Línea</h2>
                        </div>
                        
                        <h2 class="mt-5">Bienvenido</h2>
                    </div>
                    <div class="row mt-4 mb-4">
                        <div class="col-12 d-flex align-items-center justify-content-center">
                            <a href="<?= RUTA_URL ?>/welcomes/login" class="btn btn-primary btn-lg">Ingresar</a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </main>
    <?php
    require RUTA_APP . '/vistas/inc/footer.php';
    ?>
</div>