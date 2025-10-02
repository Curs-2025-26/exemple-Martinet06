<?php

namespace App\Models;

abstract class Usuari
{
    private $nom = "";
    private $email = "";

    public function __construct($nom, $email)
    {
        $this->nom = $nom;
        $this->email = $email;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function saluda()
    {
        echo "Hola, sóc " . $this->nom . " i el meu email és " . $this->email;
    }
}
 