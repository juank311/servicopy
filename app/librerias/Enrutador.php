<?php

//traer la url o mapear la url ingresada en el navegador
// 1- Controlador 2- Metodo 3- Parametro
//empelo: articulo/editar/4

class Enrutador 
{   
    protected $controladorDefault = 'Welcomes';
    protected $metodoDefault = 'index';
    protected $parametroDefault = [];
    public $controlador;
    #creacion de los parametros necesarios para la funcionalidad

    public function __construct()
    { 
        $url = $this->obtenerURL();
        #instancia al constructor que ejecuta el metodo que obtiene la URL y la divide en un array con diferentes indices (/), ej: Articulos/editar/6 
       //print_r ($this->obtenerURL());

       if (is_array($url)) 
       {
            if (file_exists(RUTA_APP.'/controladores/'.ucwords($url[0]).'.php')) 
            #verifica si existe el controlador en la carpeta controladores
            {
                $this->controladorDefault = ucwords($url[0]);
                #establece el controlador actual si existe
    
                unset($url[0]);
                #elimina el indice [0] de la url
            }
       }
       
       require_once(RUTA_APP.'/controladores/'.$this->controladorDefault).'.php';
       #requiere el controlador digitado en la url
       $class = $this->controladorDefault;
       $this->controladorDefault = new $class;

       if (isset($url[1])) 
       {
            if (method_exists($this->controladorDefault, $url[1])) 
            {
                $this->metodoDefault = $url[1];
                unset($url[1]);
                #elimina el indice [0] de la url
            }
       }
       
       $controlador = $this->metodoDefault;

        #obtener los parametros
        $this->parametroDefault = $url ? array_values($url) : [];
        #llamar callback con parametros array
        call_user_func_array([$this->controladorDefault, $this->metodoDefault], $this->parametroDefault);
      
        
    }

    public function obtenerURL()
    #constructor que ejecuta el metodo que obtiene la URL y la divide en un array con diferentes indices (/), ej: Articulos/editar/6 
    {
        if (isset($_GET['url'])) 
        {
            $url = rtrim($_GET['url'], '/');
            #elimina espacion en blanco
            $url = filter_var($url, FILTER_SANITIZE_URL);
            #filtra la url
            $url = explode('/', $url);
            #explota o divide la url
            return $url;
            #retorna el resultado de la condicion
        }
    }

};
