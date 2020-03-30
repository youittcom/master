<?php
class Usuario{
    public $nombre;
    public $email;

    public function __construct(){
        echo "Instanciando Objeto<br/>";
    }
    //metodo que se llama automaticamente
    //cuando php detecta que ya no se llamará
    //mas al objeto creado
    public function __destruct(){
        echo "destruyendo Objeto";
    }
}
$usuario = new Usuario();
for($i=0;$i<10;$i++){
    echo $i."<br/>";
}