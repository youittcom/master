<?php
//para poder cargar correctamente las clases,
//el nombre de la clase de be llamarse igual
//que el nombre del fichero
function autocargar_clases($class){
    require_once 'clases/'.$class.'.php';
}
spl_autoload_register('autocargar_clases');