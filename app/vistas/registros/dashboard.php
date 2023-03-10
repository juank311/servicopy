<?php
require RUTA_APP . '/vistas/inc/head.php';
require RUTA_APP . '/vistas/inc/header.php';
?>

<aside id="myAside">

    <div class="d-grid gap-2 mt-4">
        <br>
        <button type="button" class="btn btn-outline-light">Ventas</button>
        <button type="button" class="btn btn-outline-light">Gastos</button>
        <button type="button" class="btn btn-outline-light">Reportes</button>
        <button type="button" class="btn btn-outline-light">otros</button>
    </div>

</aside>
<main style="margin: 50px; margin-left: 200px;">
    <!-- <button id="btn-toggle-aside" type="button" class="btn btn-primary">
  Mostrar/Ocultar Aside
</button> -->
    <!-- --------------main ----------- -->
    <br><br>
    <div class="container">
        <div class="row border">
            <div class="col-3 border d-flex align-items-center justify-content-center" style="text-align: center; ">
                <img src="<?= RUTA_URL ?>/img/logo.png" style="width: 12vmin;">
            </div>
            <div class="col-6 border">
                <div class="row">
                    <div class="col-12 border-bottom text-center align-center">
                        <b>Sistema de Registro de Ingresos y Gastos Diarios</b>
                    </div>
                    <div class="col-12 border-bottom text-center align-center">
                        <b>PAPELERIA Y VARIEDADES SERVICOPY</b>
                    </div>
                    <div class="col-12 text-center align-cente">
                        <b>MACROPROCESO: CONTABILIDAD</b>
                    </div>
                </div>
            </div>
            <div class="col-3 border">
                <div class="row">
                    <div class="col-12 border-bottom display-12">
                        CÓDIGO: GCL-ENF-F042
                    </div>
                    <div class="col-12 border-bottom">
                        VERSIÓN: 01
                    </div>
                    <div class="col-12">
                        VIGENCIA: 25-08-2021
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-2">
        <div class="row">
            <div class="col-4">
                <label for="usuario"><b>Usuario Actual:</b></label>
                <input type="text" class="form-control" name="usuario" id="usuario" value="<?= $_SESSION['dataUser']->nombre . ' ' . $_SESSION['dataUser']->apellidos; ?>" readonly>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12 border  text-center align-center  py-1" style="background-color: #36769e; color: aliceblue;">
                <h6>REGISTRO DE VENTAS Y GASTOS DIARIOS</h6>
            </div>
            <div class="container mt-2">
                <div class="row">
                    <div class="col-12">
                        <form action="" method="POST" id="miFormulario">
                            <table id="tblContactos" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th class="col-2 border align-cente text-center">Descripción</th>
                                        <th class="col-1 border align-cente text-center ">($ venta)</th>
                                        <th class="col-1 border align-cente text-center ">Gasto</th>
                                        <th class="col-1 border align-cente text-center ">Tipo de Gasto</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="col-1 border align-cente text-center">
                                            VENTAS <?= date('Y-M-d'); ?>
                                            <sup style="color: red;">*</sup>
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div>
                                                <input required type="text" class="form-control" id="venta" name="valor_venta" placeholder="$">
                                            </div>
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <div>
                                                <input type="number" class="form-control" id="gasto" name="valor_gasto" placeholder="-$">
                                            </div>
                                        </td>
                                        <td class="col-1 border align-cente text-center">
                                            <select id="id_rubro" <?php if (isset($_POST['valor_gasto']) && !empty($_POST['valor_gasto'])) {
                                                                        echo " required";
                                                                    } ?> class="form-select" aria-label="Default select example" name="id_rubro">
                                                <option value="8" selected>--Tipo de Gasto--</option>
                                                <?php foreach ($datos['dataRubros'] as $data) : ?>
                                                    <option value="<?= $data->id ?>"><?= $data->nombre; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </td>
                                </tbody>
                            </table>
                            <div class="mt-2">
                                <button type="button" class="btn" style="background-color: #36769e; color: aliceblue;" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"><i class="bi bi-plus-circle-fill"></i> Agregar Gasto</button>
                            </div>
                            <div class="d-grid gap-2 col-3 mx-auto mt-4">
                                <button class="btn btn-dark" style="color: aliceblue;" id="enviarFormulario" name="enviarFormulario" type="submit"><b>Enviar Venta</b></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-12 border  text-center align-center  py-1" style="background-color: #36769e; color: aliceblue;">
                <h6>GASTOS DE HOY <?= date('M-d'); ?></h6>
            </div>
        </div>
        <div class="container border">
        <table id="gastos" class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Gasto</th>
                        <th>Rubro</th>
                        <th>Fecha</th>
                        <th>Observación</th>
                        <th>Acciones</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($datos['dataGastos'] as $data) : ?>
                        <tr>
                            <td>1</td>
                            <td><?= $data->valor_gasto?></td>
                            <td><?= $data->rubro?></td>
                            <td><?= $data->date_creation?></td>
                            <td><?= $data->observacion?></td>
                            <td>
                                <button class="btn btn-primary">Ver</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
      
    <!-- modal -->
    <form action="" method="POST">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #1A5276;">
                        <h5 style="color:antiquewhite;" class="modal-title" id="exampleModalLabel"><i class="fas fa-plus-square"></i> Nuevo Gasto</h5>
                    </div>
                    <div class="modal-body">

                        <div class="mb-1">
                            <label for="recipient-name" class="col-form-label">Valor:</label>
                            <input required type="number" class="form-control" id="recipient-name" name="valor_gasto">
                        </div>
                        <div class="mb-1">
                            <label for="recipient-name" class="col-form-label">Tipo de Gasto:</label>
                            <select required class="form-select" aria-label="Default select example" name="id_rubro">
                                <option selected>--Seleccione el tipo de gasto--</option>
                                <?php foreach ($datos['dataRubros'] as $data) : ?>
                                    <option value="<?= $data->id ?>"><?= $data->nombre; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-1">
                            <label for="message-text" class="col-form-label">Observación:</label>
                            <textarea name="observacion" class="form-control" id="message-text"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                        <button name="enviarFormulario2" type="submit" class="btn btn-primary">Resgistrar Gasto</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- --------------end main ----------- -->
</main>

<?php
require RUTA_APP . '/vistas/inc/footer.php';
?>
 <script>
        $(document).ready(function() {
            $('#gastos').DataTable();
        });
    </script>

<script>
    $(document).ready(function() {
        $("#enviarFormulario").click(function() {
            var gasto = $("#gasto").val();
            var id_rubro = $("#id_rubro").val();

            if (gasto != '' && id_rubro == '8') {
                alert('Debe seleccionar un tipo de gasto');
                return false;
            }

            // Realiza una petición AJAX a la misma página
            $.ajax({
                type: "POST",
                url: "registro_diario.php",
                data: {
                    valor_gasto: gasto,
                    id_rubro: id_rubro
                },
                success: function() {

                    // Limpia los campos del formulario
                    $("#miFormulario")[0].reset();
                },
                error: function() {
                    alert("Error al enviar el formulario");
                }
            });
        });
    });
</script>
<!-- <script>
    // Obtener el botón y el aside
    const btnToggleAside = document.getElementById('btn-toggle-aside');
    const myAside = document.getElementById('myAside');

    // Agregar evento click al botón
    btnToggleAside.addEventListener('click', function() {
        // Toggle de la clase d-none para mostrar/ocultar el aside
        myAside.classList.toggle('d-none');
    });
</script> -->

</div>