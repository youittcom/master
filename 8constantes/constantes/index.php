<?php
/*
 * CONSTANTES
 * El concepto de constante en PHP es parecido al concepto de
 * variable, con la diferencia de que elvalor que se le asigna a
 * la constante no puede variar. Es decir, se le asigna un valor
 * a la hora de definir la constante y dicho valor se mantiene
 * permanentemente.
 *
 * Definir una constante: define('nombre_de_la_constante', valor de la constante);
 *                        define('CONSTANTE',5);
 *                        const CONSTANTE1 = 1;
 */
define('CONSTANTE',5);
const CONSTANTE1 = 1;
if(CONSTANTE){
    echo CONSTANTE1;
}