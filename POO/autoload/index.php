<?php
/*
 * si no queremos tener que hacer un require
 * de todos los archivos que vayamos a utilizar
 * podemos hacer uso del autoload, que nos cargará
 * automaticamente todos los archivos
 * require_once 'Usuario.php';
 * require_once 'categoria.php';
 * require_once 'entrada.php';
 * una buena práctica podría ser guardar todas las clases
 * dentro de una misma carpeta (clases)
 */
//require_once 'clases/Usuario.php';
//se cargarán automaticamente todas las clases
//que estén dentro de la carpeta /clases
require_once 'autoload.php';
$usuario = new Usuario();
echo $usuario->nombre;
$entrada = new entrada();
echo $entrada->titulo;
