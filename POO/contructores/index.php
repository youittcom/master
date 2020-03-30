<?php
require_once 'coche.php';
//le pasamos los parametros al constructor
$coche1 = new Coche("rojo","ferrari",340,600,2,"430");

$coche1->color = "amarillo";
//tendremos que acceder a $marca a través del método set
$coche1->setMarca("seat");
//lo mismo para el atributo $modelo
$modelo = $coche1->getModelo();
var_dump($modelo);

