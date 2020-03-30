<?php
class Usuario{

    const URL_COMPLETA = "http://localhost";
    public $email;
    public $password;

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
}

$usuario = new Usuario();
//no nos aparecerá la constante
var_dump($usuario);
//pero si hacemos esto
//para acceder a las constante tenemos que usar los ::
//no haría falta tener instanciado el objeto
echo $usuario::URL_COMPLETA;
