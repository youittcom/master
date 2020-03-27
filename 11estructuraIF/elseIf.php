<?php
/*
 * ESTRUCTURA ELSEIF:
 * Es complementaria a la estructura if
 * pero con la diferencia que sirve para
 * 'ahorra' el anidamiento de la estructura if
 */
//ejemplo
$dia = 3;
if($dia == 1){
    echo "es lunes";
}else{
    if($dia == 2){
        echo "es martes";
    }else{
        if($dia == 3){
            echo "es miercoles";
        }else{
            if($dia == 4){
                echo "es jueves";
            }
        }
    }
}
/*
 * para poder evitar todas esta anidaciones, podemos hacer
 * uso del elseif
 */
if($dia == 1){
    echo "es lunes";
}
elseif ($dia == 2){
    echo " es martes";
}
elseif ($dia == 3){
    echo "es miercoles";
}