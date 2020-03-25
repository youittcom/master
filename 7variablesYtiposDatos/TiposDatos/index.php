<?php
/*
 * TIPOS DE DATOS:
 *      Los tipos de datos disponibles en PH son:
 * Tipos Escalares:
 *      - número entero
 *      - número de coma flotante
 *      - cadena de caracteres (string)
 *      - booleano (lógico)
 * Tipos compuestos:
 *      - matriz (array)
 *      - objeto
 *      - función de recordatorio
 *      - iterable (pseudotipo introducido a partir de php7.1)
 * Tipos Especiales:
 *      - NULL
 *      - Recurso
 *
 * Tipos Escalares(entero, flotante, cadena, booleano):
 *      Entero: El tipo entero (integer) permite almacenar un número
 *              de 32 bits o de 64 bits. Es ddecir, cuyos valores estén
 *              comprendido entre -2³¹ y +2³¹ para 32 bits. Y entre -2⁶³
 *              y +2⁶³-1 en 64 bits. Los valores del entero mas pequeño
 *              y del mas grande admitidos por su plataforma son facilitados
 *              por las constantes predefinidas PHP_INT_MIN y PHP_INT_MAX
 *              $maximo_entero = PHP_INT_MAX; --->  9.223.372.036.854.775.807
 *              $minimo_entero = PHP_INT_MIN;----> -9.223.372.036.854.775.808
 *
 *      Punto Flotante: El tipo de unto flotante (float) permite almacenar un
 *                      numero decimal comprendido entre 10⁻³⁰⁸ y 10 ⁺³⁰⁸. Este
 *                      número se puede expresar en formato decimal(123.987) ó
 *                      en notación científica (1.2345E2). Las constantes
 *                      predefinidas para estos tipos de valores son respectivamente:
 *                      PHP_FLOAT_MIN y PHP_FLOAT_MAX.
 *                      $minimo_float= PHP_FLOAT_MIN; ---->  2.2250738585072E-308
 *                      $maximo_float = PHP_FLOAT_MAX;----> 1.7976931348623E+308
 *                      En caso de conversion de un numero decimal a numero entero,
 *                      el número se trunca (NO SE REDONDEA) al entero mas próximo.
 *                      (1,9 se truncara a 1).
 *
 *    Cadena de Caracteres: El tipo cadena de caracteres (string) permite almacenar
 *                          cualquier secuencia de caracteres de un byte( entre 0 y
 *                          255 caracteres)sin limitación de tamaño.
 *                          Una expresion literal de tipo cadena de caracteres, se
 *                          puede representar bien entre "" o bien entre ''.
 *                          Hay que tener presente que si en una cadena que está
 *                          entre "jsd" le queremos añadir dentro de ésta otras "",
 *                          estas deberan estar ESCAPADAS con (\) para que se represneten.
 *                          Ejemplo:
 *                                  echo "yo digo \" HOLA\"";
 *                                  echo 'It\'s raining';
 *
 */
echo 'It\'s raining';


