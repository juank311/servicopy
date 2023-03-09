<?php

class Welcomes extends Controlador
{
    public $welcomeModelo;

    public function __construct()
    {
        $this->welcomeModelo  = $this->modelo('Welcome');
    } 

    public function index()
    {
        $this->vista('welcomes/inicio');
        
    }

    public function close()
    {
        $this->vista('config/close');
        
    }

    public function login()
    {   
        if ($_SERVER['REQUEST_METHOD'] == 'POST' )
        {
            $datos = 
            [
                'email' => trim($_POST['email']),
                'password' => md5($_POST['password'])
            ];

            if ($this->welcomeModelo->login($datos)) 
            {
                if ($_SESSION['activo'] = true ) {
                    header('location:'.RUTA_URL.'/registros');
                }     
            }else 
            {
                header('location:'.RUTA_URL.'/welcome/login');
            }
        }else {
            $datos = [
                'email' => '',
                'password' => '',
            ];

            $this->vista('welcomes/login', $datos);

           
        }
    }
}
