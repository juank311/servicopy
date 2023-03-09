<header class="py-2">
    <nav>
        <div class="row mx-3">
            <div class="col-2" class="d-flex justify-content-end">
                <a href="<?php if (isset($_SESSION['activo']) && $_SESSION['activo'] == true) {
                                echo RUTA_URL . '/formularios';
                            } else {
                                echo RUTA_URL;
                            } ?>">
                    <img src="<?= RUTA_URL ?>/img/logo.png" style="width: 17vmin;">
                </a>
            </div>
            <div class="col-10">
                <?php if (isset($_SESSION['activo']) and $_SESSION['activo'] == true) : ?>
                    <div class="d-flex justify-content-end">
                        <a href="<?= RUTA_URL ?>/formularios/" class="btn btn-light mx-2"><i class="fa-solid fa-laptop-medical"></i> Formularios</a>
                        <!--  <a href="<?= RUTA_URL ?>/formularios/lista" class="btn btn-light mx-2"><i class="fa-solid fa-magnifying-glass"></i> Buscar</a> -->
                        <a href="<?= RUTA_URL ?>/welcomes/close" class="btn btn-light mx-2"><i class="fa-solid fa-up-right-from-square"></i> Cerrar Sesión</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>

    </nav>
</header>