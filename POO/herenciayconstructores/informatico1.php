<?php
require_once 'persona1.php';
class informatico1 extends persona1{
    public $puesto;
    public $experiencia;
    public $lenguajes;

    public function __construct()
    {
        $this->puesto = "tecnico en informatica";
        $this->experiencia = 3;
        $this->lenguajes = "html,css,php,js";
    }
}