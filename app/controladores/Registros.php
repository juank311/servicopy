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
    public function registro_diario()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $datos =
                [
                    'valor_venta' => trim($_POST['valor_venta']),
                    'valor_gasto' => trim($_POST['valor_gasto']),
                    'id_rubro' => ($_POST['id_rubro'])
                ];

            if ($this->RegistrosModelo->agregarRegistro($datos)) {

                //header('Location: ' . RUTA_URL . '/Registros');
            } else {
                die('Algo está salio mal');
            }
        } else 
        {
            if ($this->RegistrosModelo->mostrar_rubros()) 
            {
                $datos = $this->RegistrosModelo->mostrar_rubros();
            }

            $this->vista('Registros/registro_diario', $datos);
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
                header('Location: ' . RUTA_URL . '/Registros/lista01');
                exit();
            }
        }

        $dataRegistros = $this->RegistrosModelo->mostrarFormulario($id);
        $datos = ['data' => $dataRegistros];
        $this->vista('Registros/borrar', $datos);
    }
}
