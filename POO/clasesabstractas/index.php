<?php
/*
 * una clase abstracta es una clase que no se puede
 * instanciar (no se pueden crear objetos con ella)
 * pero si que se puede utilizar para heredar de ella
 * y además puede definir la estructura de una clase
 * que herede de ella o incluso definir funcionalidad
 * a parte, cada metodo abstracto que se defina en dicha
 * clase, también deberá ser definido en la clase que
 * herede de ésta
 */
abstract class Ordenador{

    public $encendido;

    abstract public function encender();
    public function apagar(){
        $this->encendido = false;
    }
}
class PcAsus extends Ordenador {

    public $software;

    public function encender()
    {
        $this->encendido = true;
    }

    public function arrancarSoftware(){
        $this->software = true;
    }
}
$ordenador = new PcAsus();
$ordenador->arrancarSoftware();
$ordenador->encender();
var_dump($ordenador);