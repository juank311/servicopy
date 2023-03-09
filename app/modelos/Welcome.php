<?php 

class Welcome
{
    private $db;
    public function __construct()
    {
        $this->db = new Base;
    }

    public function login($datos)
    {
        $this->db->query("SELECT * FROM usuarios WHERE email = :email");
        $this->db->bind(':email', $datos['email']);

        $consulta = $this->db->registro();

        if ($consulta) {
            $_SESSION['dataUser'] = $consulta;
            if ($_SESSION['dataUser']->password == $datos['password']) {
                $_SESSION['dataUser'];
                return $_SESSION['activo'] = true;
            }else {
                $_SESSION['activo'] = false;
                $_SESSION['error'] = "La Contraseña es incorrecta";
            }

        }else {
            $_SESSION['error'] = "El correo o la contraseña son incorrectos";
        }
        
        
        
    }
}