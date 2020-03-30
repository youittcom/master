<?php
class Usuario{
    public $nombre;
    public $email;

    public function __construct(){
        echo "Instanciando Objeto<br/>";
    }

    public function __destruct(){
        echo "destruyendo Objeto";
    }

    //si queremos sacar información relacionada
    //con el objeto, lo haremos a través del metodo
    //toString
    public function __toString()
    {
      return "Hola".$this->nombre;
    }
}
$usuario = new Usuario();

