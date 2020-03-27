<?php
/*
 * OPERADORES LOGICOS en estructuras IF()
 * En las estructuras de control, podemos
 * hacer una comprobación multiple, es decir,
 * comprobar dos condiciones antes de 'entrar' en
 * dicha estructura
 * algunos de estos comparadores logicos son:
 *      && (si se cumplen las 2 ó N condiciones)
 *          comparación AND ---> 0*0 = 0
 *                               0*1 = 0
 *                               1*0 = 0
 *                               1*1 = 1
 *          donde 1 y 0 se pueden tomar como valores
 *          TRUE y FALSE respectivamente.
 *
 *      || (si alguna de las N condiciones se cumple)
 *          comparacion OR ---> 0+0 = 0
 *                              0+1 = 1
 *                              1+0 = 1
 *                              1+1 = 1
 *          donde 1 y 0 se pueden tomar como valores
 *          TRUE y FALSE respectivamente.
 *
 *      !   (si NO se cumple esa condición)
 *           comparacion NOT  ---> !0 = 1
 *                                 !1 = 0
 *           donde 1 y 0 se pueden tomar como valores
 *           TRUE y FALSE respectivamente.
 */
//ejemplos:
//operador &&
$edad = 20;
$edad1 = 18;
$edad2 = 33;
if ($edad >= $edad1 && $edad <= $edad2){
    echo " la edad esta entre ".$edad1." y ".$edad2;
}
else{
    echo "la edad no esta entre ".$edad1." y ".$edad2;
}
//operador ||
$edad = 18;
$edad1 = 18;
$edad2 = 33;
if ($edad >= $edad1 || $edad <= $edad2){
    echo " la edad esta entre ".$edad1." y ".$edad2;
}
else{
    echo "la edad no esta entre ".$edad1." y ".$edad2;
}
//operador !
$bool = false;
if (!$bool){
    echo " la variable es false";
}
else{
    echo "la variables es true";
}