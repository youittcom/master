<?php
class ConfiguracionStatic{

    /*cuando implementamos una clase con atributos o metodos
    estáticos, no hace falta instanciar el objeto de dicha clase
    para poder llamar a sus metodos ó modificar sus atributos*/
    public static $newsleter;
    public static $color;
    public static $entorno;

    public static function getNewsleter()
    {
        //para acceder a una propiedad cuando esta es estática
        //se hace a través de self::, es el equivalente a $this->
        return self::$newsleter;
    }

    public static function getColor()
    {
        return self::$color;
    }

    public static function getEntorno()
    {
        return self::$entorno;
    }

    public static function setNewsleter($newsleter)
    {
        self::$newsleter = $newsleter;
    }

    public static function setColor($color)
    {
        self::$color = $color;
    }

    public static function setEntorno($entorno)
    {
        self::$entorno = $entorno;
    }


}