<?php
/*
 * try y catch sirve para capturar posibles
 * errores que se generen e el codigo
 */

try {
    //si ponemos $parametro = null, entramos en la excepcion
    $parametro = 3;
    if($parametro){
        echo "todo correcto";
    }else{
        throw new Exception("Error en el valor de parametro");
    }

}catch (Exception $e){
    echo "Ha habido un error".$e->getMessage();
}
