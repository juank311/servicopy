<?php
//clase para conectarse a la base de datos y ejecutar consultas 
class Base
{
    private $host = DB_HOST;
    private $user_db = DB_USUARIO;
    private $password = DB_PASSWORD;
    private $db = DB_NAME;

    private $conn;
    private $stmt;
    private $error;


    public function __construct()
    {
        //configurar conexion
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->db;
        $opciones = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        #crear una instancia de PDO
        try {
            //configuracion de la instancia PDO
            $this->conn = new PDO($dsn, $this->user_db, $this->password, $opciones);
            $this->conn->exec('set names utf8');
        } catch (PDOException $e) {
            //Si hay error en la conexión mostrarlo
            $this->error =  $e->getMessage();
            echo $this->error;
        }
    }

    public function query($sql)
    {
        $this->stmt = $this->conn->prepare($sql);
    }
    public function bind($parametro, $valor, $tipo = null)
    {
        if (is_null($tipo)) 
        {
            switch (true) {
                case is_int($valor):
                    $tipo = PDO::PARAM_INT;
                    break;
                case is_bool($valor):
                    $tipo = PDO::PARAM_BOOL;
                    break;
                case is_null($valor):
                    $tipo = PDO::PARAM_NULL;
                    break;
                default:
                    $tipo = PDO::PARAM_STR;
                    break;
            }
        }
        $this->stmt->bindValue($parametro, $valor, $tipo);

    }
    public function execute()
    {
        return $this->stmt->execute();

    }
    public function registros()
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_OBJ);
    }
    public function registro()
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_OBJ);
    }
    public function rowCount()
    {
        return $this->stmt->rowCount();
    }


}
