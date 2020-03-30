<?php
/*
 * una interfaz no es mas que un contrato donde
 * definimos QUÉ metodos y en QUÉ ORDEN van a estar
 * en una clase.Pa ra que así cuando definamos una clase
 * que implemente esa interfaz, ésta debera tener esos
 * mismo métodos que definimos en la interfaz
 */
interface Ordenador{
    public function encender();
    public function apagar();
    public function desfragmentar();
    public function reiniciar();
    public function detectarUBS();
}
/*
 * esta clase debera implementar los metodos
 * definidos en la interfaz
 */
class Imac implements Ordenador {

    public $modelo;

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }
    public function encender(){

    }
    public function apagar(){

    }
    public function desfragmentar(){

    }
    public function reiniciar(){

    }
    public function detectarUBS(){

    }

}