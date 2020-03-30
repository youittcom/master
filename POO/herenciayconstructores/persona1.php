<?php
class persona1{

    public $nombre;
    public $sexo;
    public $altura;

    public function getNombre(){
        return $this->nombre;
    }

    public function getSexo(){
        return $this->sexo;
    }

    public function getAltura(){
        return $this->altura;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setSexo($sexo){
        $this->sexo = $sexo;
    }

    public function setAltura($altura){
        $this->altura = $altura;
    }

}