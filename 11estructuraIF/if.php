<?php
/*
 * ESTRUCTURA DE CONTROL IF:
 * es una estructura donde se comprueba
 * una determinada condición. Y en función de esa condición,
 * realizaremos una acción u otra.
 * una estructura básica sería:
 *      if(condición){
 *            instrucción
 *      }else{
 *            instrucción
 *      }
 */
//ejemplo básico:
$color = 'rojo';

if($color == 'rojo') {
    echo "el color es rojo";
} else {
    echo "el color no es rojo";
}
/*
 * tipos de comparadores:
 *      ==  ---> si es igual que
 *      === ---> si es igual que y además es del mismo tipo de dato
 *      !=  ---> si es distinto a
 *      <>  ---> si es distinto a
 *      !== ---> si no es idéntico
 *      <   ---> menor que
 *      >   ---> mayor que
 *      <=  ---> menor o igual que
 *      >=  ---> mayor o igual que
 * Todos estos comparadores se pueden usar en una estructura condicional IF
 */
echo "<br>";
$year = 2019;
if($year == 2019){
    echo "estas en el 2019";
}else{
    echo "no estas en el2019";
}
//
$bool = true;
if($bool === true){
    echo "el dato es true y además de tipo lógico";
}else{
    echo "el dato no es lógico";
}