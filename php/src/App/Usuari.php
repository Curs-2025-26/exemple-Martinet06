<?php

namespace App;

class Usuari
{

    private string $nom;
    private string $email;
    private string $clau;

    public function __construct(string $nom, string $email, string $clau) {
        $this->nom = $nom;
        $this->email = $email;
        $this->clau = $clau;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function saluda()
    {
        echo "Hola, sóc " . $this->nom . " i el meu email és " . $this->email;
    }

    public function getClau()
    {
        return $this->clau;
    }

    public function validar($usuari, $clau)
    {
        return $this->nom === $usuari && $this->clau === $clau;
    }
}
