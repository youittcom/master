<?php
echo "ejemplos de datos de tipo entero<br/><br/>";

//declarar una variable con un número entero
echo "variable definida como numero:";
echo "<br/><br/>";
$numero = 6;//tipo entero
$tipo = gettype($numero);
echo '$numero = '.$numero." es de tipo: ".$tipo;
echo "<br/><br/>";
//si dicha variable la hubiésemos definido de esta manera:
$numero_string = '7'; //nos las estaría tratando como un string
               //con las "" tambien la trataría como un string
$tipo = gettype($numero_string);
echo "variable definida como string:";
echo "<br/><br/>";
echo '$numero = "'.$numero.'"'." es de tipo: ".$tipo;
echo "<br/><br/>";
echo "si hacemos un x2 de la variable obtenemos:";
echo "<br/><br/>";
$numero_string = $numero_string*3;
echo "el resultado del *2 es:".$numero_string;
//si queremos forzar el que una determinada variable sea de tipo (integer)
$numero_forzado = '7';
$tipo = gettype($numero_forzado);

//formazos el (integer)
$numero_forzado = (int)$numero_forzado;
$tipo_forzado = gettype($numero_forzado);
echo "<br/><br/>";
echo $tipo_forzado;