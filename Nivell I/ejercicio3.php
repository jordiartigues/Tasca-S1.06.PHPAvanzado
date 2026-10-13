<?php

class Paella
{

    private string $tipo = "Vegetariana";

    public function __toString(): string
    {
        return "Paella de tipo: " . $this->tipo;
    }

    public function __clone(): void
    {
        $this->tipo = "Marisco";
    }
}

$paellaVegetariana = new Paella();

echo $paellaVegetariana . "\n";

$paellaMarisco = clone $paellaVegetariana;

echo $paellaMarisco;

