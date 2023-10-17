<?php

namespace Ringue\Armas;

class Pistola implements Bala   
{
    private int $numeroDeBalasNoPente;

    public function ataque(): int 
    {
        return 5;
    }

    public function tirarBala(int $bala)
    {
        $this->numeroDeBalasNoPente -= $bala;
    }
}
