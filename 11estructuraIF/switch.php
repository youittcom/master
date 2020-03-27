<?php
/*
 * ESTRUCTURA SWITCH
 * Se trata de una estructura similar al
 * if()-elseif().Se utiliza para comparar
 * el resultado de una expresion con varios
 * resultados
 *
 * estructura:
 *      switch(expresion){
 *              case expresion1:
 *                  instrucciones_1;
 *                  break;
 *              case expresion2:
 *                  instrucciones_2;
 *                  break;
 *              default:
 *                  instrucciones_n;
 *                  break;
 *      }
 */
//ejemplo:
$edad = 18;
switch ($edad){
    case 18:
        echo "eres mayor de edad";
        break;
    case 10:
        echo"eres menor de edad";
        break;
    default:
        echo "cualquier otra cosa";
        break;
}
