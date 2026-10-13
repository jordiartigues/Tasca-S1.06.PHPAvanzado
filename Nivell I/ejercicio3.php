<?php

class Paella
{

    private string $tipo = "Vegetariana";

    public function __toString(): string
    {
        return "Paella de tipo: " . $this->tipo;
    }
}

$paellaVegetariana = new Paella();

echo $paellaVegetariana;
