<?php
require_once 'informatico1.php';

class tecnicoRedes extends informatico1 {
    public $experiencia_redes;
    public $getion_redes;

    public function __construct()
    {
        //para poder heredar el constructor
        //de su clase padre hay que poner parent::
        parent::__construct();
        $this->experiencia_redes = true;
        $this->getion_redes = true;
    }
}
