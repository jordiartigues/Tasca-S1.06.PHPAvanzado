<?php

class Programa
{
    public function mostrarInformacion(): void
    {
        echo "Información del programa\n";
        echo "Fichero: " . __FILE__ . "\n";
        echo "Directorio: " . __DIR__ . "\n";
        echo "Clase: " . __CLASS__ . "\n";
        echo "Método: " . __METHOD__ . "\n";
    }
}

$programa = new Programa();

$programa->mostrarInformacion();

