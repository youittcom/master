<?php
/*
 * PROGRAMACIÓN ORIENTADA A OBJETOS
 *
 * clases: es un 'molde'a partir del cual
 *      podemos crear infinidad de objetos
 *      que tengan caraterísticas similares.
 * por ejemplo: una clase podria ser el
 *      concepto de COCHE,  a partir de la
 *      cual, si la vemos com un 'molde', la
 *      podríamos usar para crear muchos coches
 *      de distintas marcas y tipos.(bmw, mercedes...)
 * Hay que señalar que cada una de estas clases
 * tendrán definidos una serie de atributos y métodos.
 * Entendiendo un atributo como una característica que
 * pueda tener ese 'objeto' que crearemos mas tarde,
 * y entendiendo un método como una 'acción' que pueda
 * realizar ese objeto.
 * ejemplo: si partimos de la idea de clase 'coche',
 *          algunos atributos de esta clase coche podrían
 *          ser: nº puertas, color, marca, modelo....
 *          y algunos métodos que podría tener dicha clase
 *          serían: arrancar, acelerar, frenar,etc.
 */
class Coche1{

    //atributos
    public $color = "rojo";
    public $modelo = "430";
    public $velocidad= 200;
    public $velocidad_max= 300;
    public $marca = "ferrari";
    public $cv = 650;
    public $plazas= 2;

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * @param string $modelo
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    /**
     * @return int
     */
    public function getVelocidadMax()
    {
        return $this->velocidad_max;
    }

    /**
     * @param int $velocidad_max
     */
    public function setVelocidadMax($velocidad_max)
    {
        $this->velocidad_max = $velocidad_max;
    }

    /**
     * @return string
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * @param string $marca
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    /**
     * @return int
     */
    public function getCv()
    {
        return $this->cv;
    }

    /**
     * @param int $cv
     */
    public function setCv($cv)
    {
        $this->cv = $cv;
    }

    /**
     * @return int
     */
    public function getPlazas()
    {
        return $this->plazas;
    }

    /**
     * @param int $plazas
     */
    public function setPlazas($plazas)
    {
        $this->plazas = $plazas;
    }

    /**
     * @return int
     */
    public function getVelocidad()
    {
        return $this->velocidad;
    }

    /**
     * @param int $velocidad
     */
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

$miCoche = new Coche1();
var_dump($miCoche);
echo "La velocidad actual de MI COCHE es: ".$miCoche->getVelocidad()."<br>";
$miCoche->acelerar();
echo "La velocidad de MI COCHE despues de acelerar es: ".$miCoche->getVelocidad()."<br>";
$coche2 = new Coche1();
echo "la velocidad del coche 2 es de: ".$coche2->getVelocidad()."<br>";
$coche2->frenar();
echo "la velocidad de coche 2 despues de frenar es: ".$coche2->getVelocidad();