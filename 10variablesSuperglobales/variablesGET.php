<?php
/*
 * VARIABLES get
 *
 * Lo vamos a mostrar a través de un formularioGET.php
 * donde le pasaremos algunas variables recogidas en un formulario
 * y ver como se puede recoger via GET
 */

//recogemos lo que nos manda el formulario
var_dump($_GET);

echo $_GET['nombre'];
echo $_GET['apellidos'];