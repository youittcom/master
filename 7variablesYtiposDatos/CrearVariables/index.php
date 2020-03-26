<?php
echo "<h1 style='text-align: center'>seccion 7 </h1>";
echo "\n";
echo "<h1> Variables y Tipos de datos: VARIABLES</h1>";
echo "<p>Una variable en PHP en un 'contenedor' donde se almacenará cierta información.\n</p>";
echo "\n";
echo "<p>Para definir una variable tendremos que poner el simbolo '$' y despues al nobre de la variable.</p>";
echo "<p>Un ejemplo de la definición de una variable sería:</p>";
echo "\n";
echo "<p><b>$ mivariable</b> "."= 'valor de la variable'</p>";
//el resto de la explicacíon estará en codigo PHP
/*
 * Alcance y duración de una variable:
 *      El alcance de una variable es la secuencia de comandos en la que se la defina.
 * Por lo tanto, una variable se puede definir en una primera linea del codigo, y utilizarse
 * en otra sección de codigo del mismo Script.
 *      La duración de una variable es el tiempo de ejecución del Script. Cuando el Script
 * termina, las variables se eliminan.
 *      Si más adelante se vuelve a llamar al mismo Script, las variables de definen de nuevo.
 * Ejemplo:
 */
// Mostrar el contenido de la variable $nombre
echo '$nombre ='.$nombre.'<br/>';
// Inicializar la variables $nombre
$nombre = 'Santi';
//volvemos a mostrar el contenido de la variable $nombre:
echo '$nombre = '. $nombre.'<br/>';
// el resultado será algo como:
// $nombre =
// $nombre = Oliver
/*
 * Variable Dinámicas:
 *      En PHP tenemos una funcionalidad que es la de variable dinámica.
 * la cual puede llegar a ser útil en determinadas situaciones.
 * El principio del concepto está en usar una varibles que almacena el nombre
 * de otra variable y , a continuación, se hace referencia a ella con la
 * notación $$variable (doble $) ó ${$variable}. Con esta notación,
 * la $variable "interior"se sustituye por el valor $variable(valor, por ejemplo)
 * que se utiliza como un nombre de variable por la $variable "exterior", es decir,
 * $valor en este ejemplo.
 *
 * Ejemplo:
 */
$una_variable = 10;
$nombre_variable = 'una_variable';
echo '$una_variable = '.$una_variable.'<br/>';
echo '$nombre_variable = '.$nombre_variable.'<br/>';
echo '$$nombre_variable = '.$$nombre_variable.'<br/>';