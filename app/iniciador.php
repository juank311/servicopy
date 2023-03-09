<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
require_once('config/configurar.php');


/* require_once('librerias/Base.php');
require_once('librerias/Enrutador.php');
require_once('librerias/Controlador.php');
 */
//autoload 

spl_autoload_register(function($nombreClase){
    require_once('librerias/'.$nombreClase.'.php');
});
?>