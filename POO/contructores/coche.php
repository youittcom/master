<?php
class Coche{

    //atributos
    //public: podemos acceder a el desde cualquier lugar.
             //1º desde la propia clase, 2º desde las clases
             //que hereden esta clase,3º desde fuera de la clase
    public $color;
    //protected: podemos acceder solo de desde la clase donde se
               //definan o desde la clases que hereden de esta
    protected $marca;
    //private: solo se puede acceder desde la propia clase
    private $modelo;
    public $velocidad_max;
    public $velocidad;
    public $cv;
    public $plazas;

    //constructor de la clase coche
    public function __construct($color,$marca,$velocidad_max,$cv,$plazas,$modelo)
    {
        $this->color = $color;
        $this->marca = $marca;
        $this->velocidad_max = $velocidad_max;
        $this->cv = $cv;
        $this->plazas = $plazas;
        $this->modelo = $modelo;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function getVelocidadMax()
    {
        return $this->velocidad_max;
    }

    public function setVelocidadMax($velocidad_max)
    {
        $this->velocidad_max = $velocidad_max;
    }

    public function getMarca()
    {
        return $this->marca;
    }

    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    public function getCv()
    {
        return $this->cv;
    }

    public function setCv($cv)
    {
        $this->cv = $cv;
    }

    public function getPlazas()
    {
        return $this->plazas;
    }

    public function setPlazas($plazas)
    {
        $this->plazas = $plazas;
    }

    public function getVelocidad()
    {
        return $this->velocidad;
    }

    public function setVelocidad($velocidad)
    {
        $this->velocidad = $velocidad;
    }

    public function acelerar(){
        $this->velocidad ++;
    }

    public function frenar(){
        $this->velocidad--;
    }
}
