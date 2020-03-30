<?php
/*
 * ¿quepasaría si nostros quisiésemos
 * tener un método que lo compartiesen
 * las tres clases pero sin que dicho método
 * extendiese de una clase padre (la cual o es
 * 'común' a todas estas clases
 * Para eso usamos los traits
 */
trait Utilidades{
    public function mostrarNombre(){
        return $this->nombre;
    }
}
class Coche{
    public $nombre = "Audi";
    public $marca;
    use Utilidades;
}

class Persona{
    public $nombre = "Fernando";
    public $apellidos;

    use Utilidades;
}

class VideoJuego{
    public $nombre = "Parchis";
    public $anio;

    use Utilidades;
}

$coche = new Coche();
echo $coche->mostrarNombre();
$persona = new Persona();
echo $persona->mostrarNombre();
$videojuego = new VideoJuego();
echo $videojuego->mostrarNombre();