<?php

namespace App;  

class Producte
{

    public function __construct(
        protected string $nom,
        protected int $preu
    ) {}

    public function mostrar()
    {
        echo "El producte és " . $this->nom . " i el seu preu és " . $this->preu;
    }
}
