<?php
class Persona{

    public $nombre;
    public $apellidos;
    public $altura;
    public $edad;

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function getEdad()
    {
        return $this->edad;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }

    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    public function setEdad($edad)
    {
        $this->edad = $edad;
    }

    public function andar()
    {
        echo "estoy hablando";
    }

    public function caminar()
    {
        echo "estoy caminando";
    }
}
