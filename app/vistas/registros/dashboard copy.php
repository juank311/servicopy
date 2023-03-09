<?php
require RUTA_APP . '/vistas/inc/head.php';
require RUTA_APP . '/vistas/inc/header.php';
?>
<main>
    <div class="row mt-5">
        <div class="col-12">
            <h2 style="color: rgb(133, 14, 14)">
                Listado de Formularios Realizados
            </h2>
        </div>
    </div>
    <div class="container" id="caja">
        <div class="row">
        </div>
        <div class="row mt-2 caja">
            <div class="col-sm-12">
                <table id="tblFormularios" class=" mt-4 mb-4" style="width:100%">
                    <thead>
                        <tr class="border">
                            <th>ID</th>
                            <th>Formulario</th>
                            <th>Usuario</th>
                            <th>Piso</th>
                            <th>Fecha de creación</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($datos['data'] as $row) : ?>
                            <tr class="border">
                                <td><?= $row->id; ?></td>
                                <td><?= "Revisión diaria de carro de paro"; ?></td>
                                <td><?= $row->usuario;?></td>
                                <td><?= $row->piso; ?></td>
                                <td><?= $row->date_creation; ?></td>
                                <td>
                                <a href="<?= RUTA_URL?>/formularios/mostrar/<?=$row->id?>" class="btn btn-warning"><i class="fa-solid fa-eye"></i> Ver</a>

                                <a href="<?= RUTA_URL?>/formularios/borrar/<?=$row->id?>" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Borrar</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
</main>

    <?php
    require RUTA_APP . '/vistas/inc/footer.php';
    ?>
</div>