<?php
require_once 'persona.php';
class Informatico extends Persona {

    public function programar()
    {
       return "soy programador";
    }

    public function repararOrdenador()
    {
        return "repara ordenadores";
    }

    public function hacerOfimatica()
    {
        return "estoy escribiendo en Word";
    }
}
