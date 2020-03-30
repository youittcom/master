<?php
/*
 * cuando queremos hacer uso de un metodo
 * cuyo objeto todavía no existe
 */
class Persona{
    private $nombre;
    private $edad;
    private $ciudad;

    public function __construct($nombre,$edad,$ciudad){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->ciudad = $ciudad;
    }
    //método para poder llamar a metodos
    //que todavía no han sido implementados
    public function __call($name, $arguments)
    {
        $prefijo_metodo = substr($name,0,3);
        if($prefijo_metodo == 'get'){
            $nombre_metodo = substr(strtolower($name),3);
            if(!isset($this->$nombre_metodo)){
                return "El metodo no extiste";
            }
            return $this->$nombre_metodo;
        }else{
            return "El metodo no extiste";
        }
    }
}

$persona = new Persona("Victor",66,"Madrid");
//si llamásemos a getNombre();
$persona->getNombre(); //no habría problema por se ejecutaría
                       //metodo __call()
