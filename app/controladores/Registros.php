<?php

class Registros extends Controlador
{
    public $RegistrosModelo;
    public function __construct()
    {
        $this->RegistrosModelo = $this->modelo('Registro');
    }

    public function index()
    {
        $this->vista('Registros/inicio');
    }
    /* -------------------------------------------- */
   
     /* -------------------------------------------- */
    public function dashboard()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['enviarFormulario'])) {
            $datos =
                [
                    'valor_venta' => trim($_POST['valor_venta']),
                    'valor_gasto' => trim($_POST['valor_gasto']),
                    'id_rubro' => ($_POST['id_rubro'])
                ];

            if ($this->RegistrosModelo->agregarRegistro($datos)) {

                header('Location: ' . RUTA_URL . '/registros/registro_diario');
                exit();
            } else {
                die('Algo está salio mal');
            }
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['enviarFormulario2'])) {
            $datos =
                [
                    'observacion' => trim($_POST['observacion']),
                    'valor_gasto' => trim($_POST['valor_gasto']),
                    'id_rubro' => trim($_POST['id_rubro'])
                ];

            if ($this->RegistrosModelo->agregarGasto($datos)) {

                header('Location: ' . RUTA_URL . '/registros/registro_diario');
                exit();
            } else {
                die('Algo está salio mal');
            }
        }else 
        {
            if ($this->RegistrosModelo->mostrar_rubros() && $this->RegistrosModelo->mostrar_gastos_hoy()) 
            {
                $datos = [
                            'dataRubros' => $this->RegistrosModelo->mostrar_rubros(),
                            'dataGastos' => $this->RegistrosModelo->mostrar_gastos_hoy()
                         ];
            }

            $this->vista('Registros/dashboard', $datos);
        };
    }
    /* --------------------------MOSTRAR RUBROS-------------------------- */
   /*  public function mostrar_rubros()
    {
        
    } */
    /* ---------------------------------------------------- */
    public function borrar($id)
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $datos = ['id' => $id];
            if ($this->RegistrosModelo->borrarFormulario($datos)) {
                header('Location: ' . RUTA_URL . '/registros/lista01');
                exit();
            }
        }

        $dataRegistros = $this->RegistrosModelo->mostrarFormulario($id);
        $datos = ['data' => $dataRegistros];
        $this->vista('Registros/borrar', $datos);
    }
}
