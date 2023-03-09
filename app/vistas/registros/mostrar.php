<?php

require RUTA_APP . '/vistas/inc/head.php';
require RUTA_APP . '/vistas/inc/header.php';
?>

<main id="formulario">
    <div class="container mt-4">
        <div class="row border">
            <div class="col-3 border">
                <img src="<?= RUTA_URL ?>/img/logo.png" class="img-fluid" alt="Responsive image font-weight-bold">
            </div>
            <div class="col-6 border">
                <div class="row">
                    <div class="col-12 border-bottom text-center align-center">
                        <b>Sistema de Gestión de Calidad</b>
                    </div>
                    <div class="col-12 border-bottom text-center align-center">
                        <b>CLINICA UNIVERSITARIA MEDICINA INTEGRAL SAS</b>
                    </div>
                    <div class="col-12 text-center align-cente">
                        <b>MACROPROCESO: GESTIÓN CLÍNICA</b>
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
    <br>
    <div class="container">
        <div class="row">
            <div class="col-12 border text-center align-center py-2">
                <b>REVISIÓN DIARIA DE CARRO DE PARO</b>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <form action="<?= RUTA_URL ?>/formularios/mostrar/<?= $datos['data']->id ?>" method="POST">
            <div class="row">
                <div class="col-3">
                    <label for="selec"><b>Piso No:</b></label>
                    <input type="text" class="form-control" id="" name="piso" value="<?= $datos['data']->piso ?>" readonly>
                </div>
                <div class="col-4">
                    <label for="usuario"><b>Usuario:</b></label>
                    <input type="text" class="form-control" name="usuario" id="usuario" value="<?= $datos['data']->usuario ?>" readonly>
                </div>
            </div>
    </div>
    <div class="container">
    <div class="col-6 mt-2 mb-2">
        <a href="<?= RUTA_URL ?>/formularios/lista01" class="btn btn-dark"><i class="fas fa-undo-alt"></i> Regresar</a>
    </div>
        <div class="row">
            <div class="col-12 border  text-center align-center bg-primary py-1">
                <h6><b>REGISTRO DE CONTROL DE EQUIPOS DE APOYO</b></h6>
            </div>
            <div class="container mt-2">
                <div class="row">
                    <div class="col-12">
                        <table id="tblContactos" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th class="col-6 border align-cente text-center">Descripción</th>
                                    <th class="col-1 border align-cente text-center ">Si</th>
                                    <th class="col-1 border align-cente text-center">No</th>
                                    <th class="col-1 border align-cente text-center">N/A</th>
                                    <th class="col-1 border align-cente text-center">Observaciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="col-6 border align-cente text-center">
                                        Sistema de cierre de seguridad íntegro operativo
                                        <sup style="color: red;">*</sup>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio1" value="si" <?php if ($datos['data']->pregunta_1 == "si") {
                                                                                                                                            echo "checked";
                                                                                                                                        } ?> required>
                                            <label class="form-check-label" for="inlineRadio1"></label>
                                        </div>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline align-center">
                                            <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio2" value="no" <?php if ($datos['data']->pregunta_1 == "no") {
                                                                                                                                            echo "checked";
                                                                                                                                        } ?> required>
                                            <label class="form-check-label" for="inlineRadio2"></label>
                                        </div>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pregunta_1" id="inlineRadio2" value="na" <?php if ($datos['data']->pregunta_1 == "na") {
                                                                                                                                            echo "checked";
                                                                                                                                        } ?> required>
                                            <label class="form-check-label" for="inlineRadio2"></label>
                                        </div>
                                    </td>
                                    <td class="col-3 border align-cente text-center">
                                        <div>
                                            <input type="text" class="form-control" id="" name="obs_p1" value="<?= $datos['data']->obs_p1 ?>">
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="col-6 border align-cente text-center">
                                        Monitor de signos vitales completo en buen estado
                                        <sup style="color: red;">*</sup>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pregunta_2" id="inlineRadio1" value="si" <?php if ($datos['data']->pregunta_2 == "si") {
                                                                                                                                            echo "checked";
                                                                                                                                        } ?> required>
                                            <label class="form-check-label" for="inlineRadio1"></label>
                                        </div>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline align-center">
                                            <input class="form-check-input" type="radio" name="pregunta_2" id="inlineRadio2" value="no" <?php if ($datos['data']->pregunta_2 == "no") {
                                                                                                                                            echo "checked";
                                                                                                                                        } ?> required>
                                            <label class="form-check-label" for="inlineRadio2"></label>
                                        </div>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pregunta_2" id="inlineRadio2" value="na" <?php if ($datos['data']->pregunta_2 == "na") {
                                                                                                                                            echo "checked";
                                                                                                                                        } ?> required>
                                            <label class="form-check-label" for="inlineRadio2"></label>
                                        </div>
                                    </td>
                                    <td class="col-3 border align-cente text-center">
                                        <div>
                                            <input type="text" class="form-control" id="" name="obs_p2" value="<?= $datos['data']->obs_p2 ?>">
                                        </div>
                                    </td>
                                </tr>

                                </tr>
                                <tr>
                                    <td class="col-6 border align-cente text-center">
                                        Laringoscopio, limpio, completo y en buen estado
                                        <sup style="color: red;">*</sup>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pregunta_3" id="inlineRadio1" value="si" <?php if ($datos['data']->pregunta_3 == "si") {
                                                                                                                                            echo "checked";
                                                                                                                                        } ?> required>
                                            <label class="form-check-label" for="inlineRadio1"></label>
                                        </div>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline align-center">
                                            <input class="form-check-input" type="radio" name="pregunta_3" id="inlineRadio2" value="no" <?php if ($datos['data']->pregunta_3 == "no") {
                                                                                                                                            echo "checked";
                                                                                                                                        } ?> required>
                                            <label class="form-check-label" for="inlineRadio2"></label>
                                        </div>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pregunta_3" id="inlineRadio2" value="na" <?php if ($datos['data']->pregunta_3 == "na") {
                                                                                                                                            echo "checked";
                                                                                                                                        } ?> required>
                                            <label class="form-check-label" for="inlineRadio2"></label>
                                        </div>
                                    </td>
                                    <td class="col-3 border align-cente text-center">
                                        <div>
                                            <input type="text" class="form-control" id="" name="obs_p3" value="<?= $datos['data']->obs_p3 ?>">
                                        </div>
                                    </td>
                                </tr>

                                </tr>
                                <tr>
                                    <td class="col-6 border align-cente text-center">
                                        Guía auxiliar para intubación endotraqueal
                                        <sup style="color: red;">*</sup>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pregunta_4" id="inlineRadio1" value="si" <?php if ($datos['data']->pregunta_4 == "si") {
                                                                                                                                            echo "checked";
                                                                                                                                        } ?> required>
                                            <label class="form-check-label" for="inlineRadio1"></label>
                                        </div>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline align-center">
                                            <input class="form-check-input" type="radio" name="pregunta_4" id="inlineRadio2" value="no" <?php if ($datos['data']->pregunta_4 == "no") {
                                                                                                                                            echo "checked";
                                                                                                                                        } ?> required>
                                            <label class="form-check-label" for="inlineRadio2"></label>
                                        </div>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pregunta_4" id="inlineRadio2" value="na" <?php if ($datos['data']->pregunta_4 == "na") {
                                                                                                                                            echo "checked";
                                                                                                                                        } ?> required>
                                            <label class="form-check-label" for="inlineRadio2"></label>
                                        </div>
                                    </td>
                                    <td class="col-3 border align-cente text-center">
                                        <div>
                                            <input type="text" class="form-control" id="" name="obs_p4" value="<?= $datos['data']->obs_p4 ?>">
                                        </div>
                                    </td>
                                </tr>

                                </tr>
                                <tr>
                                    <td class="col-6 border align-cente text-center">
                                        Ambú pediátrico en buen estado y completo
                                        <sup style="color: red;">*</sup>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pregunta_5" id="inlineRadio1" value="si" <?php if ($datos['data']->pregunta_5 == "si") {
                                                                                                                                            echo "checked";
                                                                                                                                        } ?> required>
                                            <label class="form-check-label" for="inlineRadio1"></label>
                                        </div>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline align-center">
                                            <input class="form-check-input" type="radio" name="pregunta_5" id="inlineRadio2" value="no" <?php if ($datos['data']->pregunta_5 == "no") {
                                                                                                                                            echo "checked";
                                                                                                                                        } ?> required>
                                            <label class="form-check-label" for="inlineRadio2"></label>
                                        </div>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pregunta_5" id="inlineRadio2" value="na" <?php if ($datos['data']->pregunta_5 == "na") {
                                                                                                                                            echo "checked";
                                                                                                                                        } ?> required>
                                            <label class="form-check-label" for="inlineRadio2"></label>
                                        </div>
                                    </td>
                                    <td class="col-3 border align-cente text-center">
                                        <div>
                                            <input type="text" class="form-control" id="" name="obs_p5" value="<?= $datos['data']->obs_p5 ?>">
                                        </div>
                                    </td>
                                </tr>

                                </tr>
                                <tr>
                                    <td class="col-6 border align-cente text-center">
                                        Ambú adultos en buen estado y completo
                                        <sup style="color: red;">*</sup>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pregunta_6" id="inlineRadio1" value="si" <?php if ($datos['data']->pregunta_6 == "si") {
                                                                                                                                            echo "checked";
                                                                                                                                        } ?> required>
                                            <label class="form-check-label" for="inlineRadio1"></label>
                                        </div>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline align-center">
                                            <input class="form-check-input" type="radio" name="pregunta_6" id="inlineRadio2" value="no" <?php if ($datos['data']->pregunta_6 == "no") {
                                                                                                                                            echo "checked";
                                                                                                                                        } ?> required>
                                            <label class="form-check-label" for="inlineRadio2"></label>
                                        </div>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pregunta_6" id="inlineRadio2" value="na" <?php if ($datos['data']->pregunta_6 == "na") {
                                                                                                                                            echo "checked";
                                                                                                                                        } ?> required>
                                            <label class="form-check-label" for="inlineRadio2"></label>
                                        </div>
                                    </td>
                                    <td class="col-3 border align-cente text-center">
                                        <div>
                                            <input type="text" class="form-control" id="" name="obs_p6" value="<?= $datos['data']->obs_p6 ?>">
                                        </div>
                                    </td>
                                </tr>

                                </tr>
                                <tr>
                                    <td class="col-6 border align-cente text-center">
                                        Bala de Oxigeno completa y funcional
                                        <sup style="color: red;">*</sup>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pregunta_7" id="inlineRadio1" value="si" <?php if ($datos['data']->pregunta_7 == "si") {
                                                                                                                                            echo "checked";
                                                                                                                                        } ?> required>
                                            <label class="form-check-label" for="inlineRadio1"></label>
                                        </div>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline align-center">
                                            <input class="form-check-input" type="radio" name="pregunta_7" id="inlineRadio2" value="no" <?php if ($datos['data']->pregunta_7 == "no") {
                                                                                                                                            echo "checked";
                                                                                                                                        } ?> required>
                                            <label class="form-check-label" for="inlineRadio2"></label>
                                        </div>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pregunta_7" id="inlineRadio2" value="na" <?php if ($datos['data']->pregunta_7 == "na") {
                                                                                                                                            echo "checked";
                                                                                                                                        } ?> required>
                                            <label class="form-check-label" for="inlineRadio2"></label>
                                        </div>
                                    </td>
                                    <td class="col-3 border align-cente text-center">
                                        <div>
                                            <input type="text" class="form-control" id="" name="obs_p7" value="<?= $datos['data']->obs_p7 ?>">
                                        </div>
                                    </td>
                                </tr>

                                </tr>
                                <tr>
                                    <td class="col-6 border align-cente text-center">
                                        Equipo de succión completo
                                        <sup style="color: red;">*</sup>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pregunta_8" id="inlineRadio1" value="si" <?php if ($datos['data']->pregunta_8 == "si") {
                                                                                                                                            echo "checked";
                                                                                                                                        } ?> required>
                                            <label class="form-check-label" for="inlineRadio1"></label>
                                        </div>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline align-center">
                                            <input class="form-check-input" type="radio" name="pregunta_8" id="inlineRadio2" value="no" <?php if ($datos['data']->pregunta_8 == "no") {
                                                                                                                                            echo "checked";
                                                                                                                                        } ?> required>
                                            <label class="form-check-label" for="inlineRadio2"></label>
                                        </div>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pregunta_8" id="inlineRadio2" value="na" <?php if ($datos['data']->pregunta_8 == "na") {
                                                                                                                                            echo "checked";
                                                                                                                                        } ?> required>
                                            <label class="form-check-label" for="inlineRadio2"></label>
                                        </div>
                                    </td>
                                    <td class="col-3 border align-cente text-center">
                                        <div>
                                            <input type="text" class="form-control" id="" name="obs_p8" value="<?= $datos['data']->obs_p8 ?>">
                                        </div>
                                    </td>
                                </tr>

                                </tr>
                                <tr>
                                    <td class="col-6 border align-cente text-center">
                                        Carpeta de carro de paro completa y actualizada
                                        <sup style="color: red;">*</sup>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pregunta_9" id="inlineRadio1" value="si" <?php if ($datos['data']->pregunta_9 == "si") {
                                                                                                                                            echo "checked";
                                                                                                                                        } ?> required>
                                            <label class="form-check-label" for="inlineRadio1"></label>
                                        </div>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline align-center">
                                            <input class="form-check-input" type="radio" name="pregunta_9" id="inlineRadio2" value="no" <?php if ($datos['data']->pregunta_9 == "no") {
                                                                                                                                            echo "checked";
                                                                                                                                        } ?> required>
                                            <label class="form-check-label" for="inlineRadio2"></label>
                                        </div>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pregunta_9" id="inlineRadio2" value="na" <?php if ($datos['data']->pregunta_9 == "na") {
                                                                                                                                            echo "checked";
                                                                                                                                        } ?> required>
                                            <label class="form-check-label" for="inlineRadio2"></label>
                                        </div>
                                    </td>
                                    <td class="col-3 border align-cente text-center">
                                        <div>
                                            <input type="text" class="form-control" id="" name="obs_p9" value="<?= $datos['data']->obs_p9 ?>">
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="col-6 border align-cente text-center">
                                        N° DE CONSECUTIVOS PARA REPOSICION EN CASO DE APERTURA
                                    </td>

                                    <td class="col-1 border align-cente text-center">
                                        <div>
                                            <input type="text" class="form-control" id="" name="consecutivo" value="<?= $datos['data']->consecutivo ?>">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container bt-5">
        <div class="row">
            <div class="col-12 border text-center align-center bg-primary py-1">
                <h6><b>DESFRIBILADOR</b></h6>
            </div>
            <div class="container mt-2">
                <div class="row">
                    <div class="col-12">
                        <table id="tblContactos" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th class="col-6 border align-cente text-center">Descripción</th>
                                    <th class="col-1 border align-cente text-center ">Si</th>
                                    <th class="col-1 border align-cente text-center">No</th>
                                    <th class="col-1 border align-cente text-center">N/A</th>
                                    <th class="col-1 border align-cente text-center">Observaciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="col-6 border align-cente text-center">
                                        Equipo completo, sin daños externos
                                        <sup style="color: red;">*</sup>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pregunta_10" id="inlineRadio1" value="si" <?php if ($datos['data']->pregunta_10 == "si") {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?> required>
                                            <label class="form-check-label" for="inlineRadio1"></label>
                                        </div>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline align-center">
                                            <input class="form-check-input" type="radio" name="pregunta_10" id="inlineRadio2" value="no" <?php if ($datos['data']->pregunta_10 == "no") {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?> required>
                                            <label class="form-check-label" for="inlineRadio2"></label>
                                        </div>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pregunta_10" id="inlineRadio2" value="na" <?php if ($datos['data']->pregunta_10 == "na") {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?> required>
                                            <label class="form-check-label" for="inlineRadio2"></label>
                                        </div>
                                    </td>
                                    <td class="col-3 border align-cente text-center">
                                        <div>
                                            <input type="text" class="form-control" id="" name="obs_p10" value="<?= $datos['data']->obs_p10 ?>">
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="col-6 border align-cente text-center">
                                        Organizado, limpio y puesto en carro de paro
                                        <sup style="color: red;">*</sup>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pregunta_11" id="inlineRadio1" value="si" <?php if ($datos['data']->pregunta_11 == "si") {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?> required>
                                            <label class="form-check-label" for="inlineRadio1"></label>
                                        </div>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline align-center">
                                            <input class="form-check-input" type="radio" name="pregunta_11" id="inlineRadio2" value="no" <?php if ($datos['data']->pregunta_11 == "no") {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?> required>
                                            <label class="form-check-label" for="inlineRadio2"></label>
                                        </div>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pregunta_11" id="inlineRadio2" value="na" <?php if ($datos['data']->pregunta_11 == "na") {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?> required>
                                            <label class="form-check-label" for="inlineRadio2"></label>
                                        </div>
                                    </td>
                                    <td class="col-3 border align-cente text-center">
                                        <div>
                                            <input type="text" class="form-control" id="" name="obs_p11" value="<?= $datos['data']->obs_p11 ?>">
                                        </div>
                                    </td>
                                </tr>

                                </tr>
                                <tr>
                                    <td class="col-6 border align-cente text-center">
                                        Ubicado correctamente con respecto a la localización del paciente <sup style="color: red;">*</sup>

                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pregunta_12" id="inlineRadio1" value="si" <?php if ($datos['data']->pregunta_12 == "si") {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?> required>
                                            <label class="form-check-label" for="inlineRadio1"></label>
                                        </div>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline align-center">
                                            <input class="form-check-input" type="radio" name="pregunta_12" id="inlineRadio2" value="no" <?php if ($datos['data']->pregunta_12 == "no") {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?> required>
                                            <label class="form-check-label" for="inlineRadio2"></label>
                                        </div>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pregunta_12" id="inlineRadio2" value="na" <?php if ($datos['data']->pregunta_12 == "na") {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?> required>
                                            <label class="form-check-label" for="inlineRadio2"></label>
                                        </div>
                                    </td>
                                    <td class="col-3 border align-cente text-center">
                                        <div>
                                            <input type="text" class="form-control" id="" name="obs_p12" value="<?= $datos['data']->obs_p12 ?>">
                                        </div>
                                    </td>
                                </tr>

                                </tr>
                                <tr>
                                    <td class="col-6 border align-cente text-center">
                                        Conectado a fuente eléctrica
                                        <sup style="color: red;">*</sup>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pregunta_13" id="inlineRadio1" value="si" <?php if ($datos['data']->pregunta_13 == "si") {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?> required>
                                            <label class="form-check-label" for="inlineRadio1"></label>
                                        </div>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline align-center">
                                            <input class="form-check-input" type="radio" name="pregunta_13" id="inlineRadio2" value="no" <?php if ($datos['data']->pregunta_13 == "no") {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?> required>
                                            <label class="form-check-label" for="inlineRadio2"></label>
                                        </div>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pregunta_13" id="inlineRadio2" value="na" <?php if ($datos['data']->pregunta_13 == "na") {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?> required>
                                            <label class="form-check-label" for="inlineRadio2"></label>
                                        </div>
                                    </td>
                                    <td class="col-3 border align-cente text-center">
                                        <div>
                                            <input type="text" class="form-control" id="" name="obs_p13" value="<?= $datos['data']->obs_p13 ?>">
                                        </div>
                                    </td>
                                </tr>

                                </tr>
                                <tr>
                                    <td class="col-6 border align-cente text-center">
                                        Sistema de batería en buen estado
                                        <sup style="color: red;">*</sup>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pregunta_14" id="inlineRadio1" value="si" <?php if ($datos['data']->pregunta_14 == "si") {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?> required>
                                            <label class="form-check-label" for="inlineRadio1"></label>
                                        </div>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline align-center">
                                            <input class="form-check-input" type="radio" name="pregunta_14" id="inlineRadio2" value="no" <?php if ($datos['data']->pregunta_14 == "no") {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?> required>
                                            <label class="form-check-label" for="inlineRadio2"></label>
                                        </div>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pregunta_14" id="inlineRadio2" value="na" <?php if ($datos['data']->pregunta_14 == "na") {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?> required>
                                            <label class="form-check-label" for="inlineRadio2"></label>
                                        </div>
                                    </td>
                                    <td class="col-3 border align-cente text-center">
                                        <div>
                                            <input type="text" class="form-control" id="" name="obs_p14" value="<?= $datos['data']->obs_p14 ?>">
                                        </div>
                                    </td>
                                </tr>

                                </tr>
                                <tr>
                                    <td class="col-6 border align-cente text-center">
                                        Se encuentra cargado y conectado
                                        <sup style="color: red;">*</sup>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pregunta_15" id="inlineRadio1" value="si" <?php if ($datos['data']->pregunta_15 == "si") {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?> required>
                                            <label class="form-check-label" for="inlineRadio1"></label>
                                        </div>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline align-center">
                                            <input class="form-check-input" type="radio" name="pregunta_15" id="inlineRadio2" value="no" <?php if ($datos['data']->pregunta_15 == "no") {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?> required>
                                            <label class="form-check-label" for="inlineRadio2"></label>
                                        </div>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pregunta_15" id="inlineRadio2" value="na" <?php if ($datos['data']->pregunta_15 == "na") {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?> required>
                                            <label class="form-check-label" for="inlineRadio2"></label>
                                        </div>
                                    </td>
                                    <td class="col-3 border align-cente text-center">
                                        <div>
                                            <input type="text" class="form-control" id="" name="obs_p15" value="<?= $datos['data']->obs_p15 ?>">
                                        </div>
                                    </td>
                                </tr>

                                </tr>
                                <tr>
                                    <td class="col-6 border align-cente text-center">
                                        Cuenta con gel conductor y parches multifuncional
                                        <sup style="color: red;">*</sup>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pregunta_16" id="inlineRadio1" value="si" <?php if ($datos['data']->pregunta_16 == "si") {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?> required>
                                            <label class="form-check-label" for="inlineRadio1"></label>
                                        </div>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline align-center">
                                            <input class="form-check-input" type="radio" name="pregunta_16" id="inlineRadio2" value="no" <?php if ($datos['data']->pregunta_16 == "no") {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?> required>
                                            <label class="form-check-label" for="inlineRadio2"></label>
                                        </div>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pregunta_16" id="inlineRadio2" value="na" <?php if ($datos['data']->pregunta_16 == "na") {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?> required>
                                            <label class="form-check-label" for="inlineRadio2"></label>
                                        </div>
                                    </td>
                                    <td class="col-3 border align-cente text-center">
                                        <div>
                                            <input type="text" class="form-control" id="" name="obs_p16" value="<?= $datos['data']->obs_p16 ?>">
                                        </div>
                                    </td>
                                </tr>

                                </tr>
                                <tr>
                                    <td class="col-6 border align-cente text-center">
                                        Se evidencian cables accesorios completos y en buen estado
                                        <sup style="color: red;">*</sup>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pregunta_17" id="inlineRadio1" value="si" <?php if ($datos['data']->pregunta_17 == "si") {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?> required>
                                            <label class="form-check-label" for="inlineRadio1"></label>
                                        </div>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline align-center">
                                            <input class="form-check-input" type="radio" name="pregunta_17" id="inlineRadio2" value="no" <?php if ($datos['data']->pregunta_17 == "no") {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?> required>
                                            <label class="form-check-label" for="inlineRadio2"></label>
                                        </div>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pregunta_17" id="inlineRadio2" value="na" <?php if ($datos['data']->pregunta_17 == "na") {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?> required>
                                            <label class="form-check-label" for="inlineRadio2"></label>
                                        </div>
                                    </td>
                                    <td class="col-3 border align-cente text-center">
                                        <div>
                                            <input type="text" class="form-control" id="" name="obs_p17" value="<?= $datos['data']->obs_p17 ?>">
                                        </div>
                                    </td>
                                </tr>

                                </tr>
                                <tr>
                                    <td class="col-6 border align-cente text-center">
                                        Paletas de descarga eléctrica pediátricas y adultas en buen estado
                                        <sup style="color: red;">*</sup>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pregunta_18" id="inlineRadio1" value="si" <?php if ($datos['data']->pregunta_18 == "si") {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?> required>
                                            <label class="form-check-label" for="inlineRadio1"></label>
                                        </div>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline align-center">
                                            <input class="form-check-input" type="radio" name="pregunta_18" id="inlineRadio2" value="no" <?php if ($datos['data']->pregunta_18 == "no") {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?> required>
                                            <label class="form-check-label" for="inlineRadio2"></label>
                                        </div>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pregunta_18" id="inlineRadio2" value="na" <?php if ($datos['data']->pregunta_18 == "na") {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?> required>
                                            <label class="form-check-label" for="inlineRadio2"></label>
                                        </div>
                                    </td>
                                    <td class="col-3 border align-cente text-center">
                                        <div>
                                            <input type="text" class="form-control" id="" name="obs_p18" value="<?= $datos['data']->obs_p18 ?>">
                                        </div>
                                    </td>
                                </tr>

                                </tr>
                                <tr>
                                    <td class="col-6 border align-cente text-center">
                                        Se evidencian botones de las aplicaciones en funcionamiento
                                        <sup style="color: red;">*</sup>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pregunta_19" id="inlineRadio1" value="si" <?php if ($datos['data']->pregunta_19 == "si") {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?> required>
                                            <label class="form-check-label" for="inlineRadio1"></label>
                                        </div>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline align-center">
                                            <input class="form-check-input" type="radio" name="pregunta_19" id="inlineRadio2" value="no" <?php if ($datos['data']->pregunta_19 == "no") {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?> required>
                                            <label class="form-check-label" for="inlineRadio2"></label>
                                        </div>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pregunta_19" id="inlineRadio2" value="na" <?php if ($datos['data']->pregunta_19 == "na") {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?> required>
                                            <label class="form-check-label" for="inlineRadio2"></label>
                                        </div>
                                    </td>
                                    <td class="col-3 border align-cente text-center">
                                        <div>
                                            <input type="text" class="form-control" id="" name="obs_p19" value="<?= $datos['data']->obs_p19 ?>">
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="col-6 border align-cente text-center">
                                        Evidencia de iluminación de pantalla en óptimas condiciones
                                        <sup style="color: red;">*</sup>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pregunta_20" id="inlineRadio1" value="si" <?php if ($datos['data']->pregunta_20 == "si") {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?> required>
                                            <label class="form-check-label" for="inlineRadio1"></label>
                                        </div>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline align-center">
                                            <input class="form-check-input" type="radio" name="pregunta_20" id="inlineRadio2" value="no" <?php if ($datos['data']->pregunta_20 == "no") {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?> required>
                                            <label class="form-check-label" for="inlineRadio2"></label>
                                        </div>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pregunta_20" id="inlineRadio2" value="na" <?php if ($datos['data']->pregunta_20 == "na") {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?> required>
                                            <label class="form-check-label" for="inlineRadio2"></label>
                                        </div>
                                    </td>
                                    <td class="col-3 border align-cente text-center">
                                        <div>
                                            <input type="text" class="form-control" id="" name="obs_p20" value="<?= $datos['data']->obs_p20 ?>">
                                        </div>
                                    </td>
                                </tr>

                                </tr>
                                <tr>
                                    <td class="col-6 border align-cente text-center">
                                        Evidencia de sonido de alarmas audible
                                        <sup style="color: red;">*</sup>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pregunta_21" id="inlineRadio1" value="si" <?php if ($datos['data']->pregunta_21 == "si") {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?> required>
                                            <label class="form-check-label" for="inlineRadio1"></label>
                                        </div>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline align-center">
                                            <input class="form-check-input" type="radio" name="pregunta_21" id="inlineRadio2" value="no" <?php if ($datos['data']->pregunta_21 == "no") {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?> required>
                                            <label class="form-check-label" for="inlineRadio2"></label>
                                        </div>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pregunta_21" id="inlineRadio2" value="na" <?php if ($datos['data']->pregunta_21 == "na") {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?> required>
                                            <label class="form-check-label" for="inlineRadio2"></label>
                                        </div>
                                    </td>
                                    <td class="col-3 border align-cente text-center">
                                        <div>
                                            <input type="text" class="form-control" id="" name="obs_p21" value="<?= $datos['data']->obs_p21 ?>">
                                        </div>
                                    </td>
                                </tr>

                                </tr>
                                <tr>
                                    <td class="col-6 border align-cente text-center">
                                        Visualización de aplicaciones en pantalla
                                        <sup style="color: red;">*</sup>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pregunta_22" id="inlineRadio1" value="si" <?php if ($datos['data']->pregunta_22 == "si") {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?> required>
                                            <label class="form-check-label" for="inlineRadio1"></label>
                                        </div>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline align-center">
                                            <input class="form-check-input" type="radio" name="pregunta_22" id="inlineRadio2" value="no" <?php if ($datos['data']->pregunta_22 == "no") {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?> required>
                                            <label class="form-check-label" for="inlineRadio2"></label>
                                        </div>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pregunta_22" id="inlineRadio2" value="na" <?php if ($datos['data']->pregunta_22 == "na") {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?> required>
                                            <label class="form-check-label" for="inlineRadio2"></label>
                                        </div>
                                    </td>
                                    <td class="col-3 border align-cente text-center">
                                        <div>
                                            <input type="text" class="form-control" id="" name="obs_p22" value="<?= $datos['data']->obs_p22 ?>">
                                        </div>
                                    </td>
                                </tr>

                                </tr>
                                <tr>
                                    <td class="col-6 border align-cente text-center">
                                        Se realiza prueba de usuario manual indicada sin dificultad
                                        <sup style="color: red;">*</sup>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pregunta_23" id="inlineRadio1" value="si" <?php if ($datos['data']->pregunta_23 == "si") {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?> required>
                                            <label class="form-check-label" for="inlineRadio1"></label>
                                        </div>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline align-center">
                                            <input class="form-check-input" type="radio" name="pregunta_23" id="inlineRadio2" value="no" <?php if ($datos['data']->pregunta_23 == "no") {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?> required>
                                            <label class="form-check-label" for="inlineRadio2"></label>
                                        </div>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pregunta_23" id="inlineRadio2" value="na" <?php if ($datos['data']->pregunta_23 == "na") {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?> required>
                                            <label class="form-check-label" for="inlineRadio2"></label>
                                        </div>
                                    </td>
                                    <td class="col-3 border align-cente text-center">
                                        <div>
                                            <input type="text" class="form-control" id="" name="obs_p23" value="<?= $datos['data']->obs_p23 ?>">
                                        </div>
                                    </td>
                                </tr>

                                </tr>
                                <tr>
                                    <td class="col-6 border align-cente text-center">
                                        Se evidencia la descarga de la prueba en el tiempo esperado
                                        <sup style="color: red;">*</sup>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pregunta_24" id="inlineRadio1" value="si" <?php if ($datos['data']->pregunta_24 == "si") {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?> required>
                                            <label class="form-check-label" for="inlineRadio1"></label>
                                        </div>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline align-center">
                                            <input class="form-check-input" type="radio" name="pregunta_24" id="inlineRadio2" value="no" <?php if ($datos['data']->pregunta_24 == "no") {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?> required>
                                            <label class="form-check-label" for="inlineRadio2"></label>
                                        </div>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pregunta_24" id="inlineRadio2" value="na" <?php if ($datos['data']->pregunta_24 == "na") {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?> required>
                                            <label class="form-check-label" for="inlineRadio2"></label>
                                        </div>
                                    </td>
                                    <td class="col-3 border align-cente text-center">
                                        <div>
                                            <input type="text" class="form-control" id="" name="obs_p24" value="<?= $datos['data']->obs_p24 ?>">
                                        </div>
                                    </td>
                                </tr>

                                </tr>
                                <tr>
                                    <td class="col-6 border align-cente text-center">
                                        Se evidencia bandeja de impresora en buen estado
                                        <sup style="color: red;">*</sup>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pregunta_25" id="inlineRadio1" value="si" <?php if ($datos['data']->pregunta_25 == "si") {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?> required>
                                            <label class="form-check-label" for="inlineRadio1"></label>
                                        </div>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline align-center">
                                            <input class="form-check-input" type="radio" name="pregunta_25" id="inlineRadio2" value="no" <?php if ($datos['data']->pregunta_25 == "no") {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?> required>
                                            <label class="form-check-label" for="inlineRadio2"></label>
                                        </div>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pregunta_25" id="inlineRadio2" value="na" <?php if ($datos['data']->pregunta_25 == "na") {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?> required>
                                            <label class="form-check-label" for="inlineRadio2"></label>
                                        </div>
                                    </td>
                                    <td class="col-3 border align-cente text-center">
                                        <div>
                                            <input type="text" class="form-control" id="" name="obs_p25" value="<?= $datos['data']->obs_p25 ?>">
                                        </div>
                                    </td>
                                </tr>

                                </tr>
                                <tr>
                                    <td class="col-6 border align-cente text-center">
                                        Se evidencia papel registrador en impresora
                                        <sup style="color: red;">*</sup>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pregunta_26" id="inlineRadio1" value="si" <?php if ($datos['data']->pregunta_26 == "si") {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?> required>
                                            <label class="form-check-label" for="inlineRadio1"></label>
                                        </div>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline align-center">
                                            <input class="form-check-input" type="radio" name="pregunta_26" id="inlineRadio2" value="no" <?php if ($datos['data']->pregunta_26 == "no") {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?> required>
                                            <label class="form-check-label" for="inlineRadio2"></label>
                                        </div>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pregunta_26" id="inlineRadio2" value="na" <?php if ($datos['data']->pregunta_26 == "na") {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?> required>
                                            <label class="form-check-label" for="inlineRadio2"></label>
                                        </div>
                                    </td>
                                    <td class="col-3 border align-cente text-center">
                                        <div>
                                            <input type="text" class="form-control" id="" name="obs_p26" value="<?= $datos['data']->obs_p26 ?>">
                                        </div>
                                    </td>
                                </tr>

                                </tr>
                                <tr>
                                    <td class="col-6 border align-cente text-center">
                                        Registra la prueba con las aplicaciones aprobadas
                                        <sup style="color: red;">*</sup>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pregunta_27" id="inlineRadio1" value="si" <?php if ($datos['data']->pregunta_27 == "si") {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?> required>
                                            <label class="form-check-label" for="inlineRadio1"></label>
                                        </div>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline align-center">
                                            <input class="form-check-input" type="radio" name="pregunta_27" id="inlineRadio2" value="no" <?php if ($datos['data']->pregunta_27 == "no") {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?> required>
                                            <label class="form-check-label" for="inlineRadio2"></label>
                                        </div>
                                    </td>
                                    <td class="col-1 border align-cente text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="pregunta_27" id="inlineRadio2" value="na" <?php if ($datos['data']->pregunta_27 == "na") {
                                                                                                                                                echo "checked";
                                                                                                                                            } ?> required>
                                            <label class="form-check-label" for="inlineRadio2"></label>
                                        </div>
                                    </td>
                                    <td class="col-3 border align-cente text-center">
                                        <div>
                                            <input type="text" class="form-control" id="" name="obs_p27" value="<?= $datos['data']->obs_p27 ?>">
                                        </div>
                                    </td>
                                </tr>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-grid gap-2 col-2 mx-auto mt-4">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#editarModal"> <i class="fas fa-edit"></i>  Modificar</button>
        <!-- Modal Editar-->
        <div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="editarModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="text-dark" class="modal-title" id="editarModalLabel">Advertencia</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ¿Seguro que desea modificar el formulario?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-primary btn" value="actualizar_formulario" type="submit"><i class="fas fa-edit"></i><b>  Modificar</b></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</main>
<?php
require RUTA_APP . '/vistas/inc/footer.php';
?>