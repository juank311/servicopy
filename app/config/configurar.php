<?php
//configuracion de la base de datos 
define('DB_HOST', 'localhost');
define('DB_USUARIO', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'servicopy');
//ruta de la aplicacion 
define('RUTA_APP', dirname(dirname(__FILE__)));

//ruta url ejemplo: http://localhost/servicopy/
define('RUTA_URL', 'http://localhost/servicopy');


define('NOMBRESITIO', 'Servicopy');

//configurar zona horaria

date_default_timezone_set('America/Bogota');

