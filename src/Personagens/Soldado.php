<?php

namespace Ringue\Personagens;
use Ringue\Armas\Bala;

class Soldado extends Personagem
{
    protected string $nome = 'soldado';
    protected int $hp = 200;
    // needs to be 100 till 300
    protected int $precisao = 7;
     // needs to be 1 till 10
    protected int $forca = 5;
    // needs to be 1 till 10

    public function defender(){}
    
    // public function equiparArma(Bala $arma)
    // {
    //     $this->arma = $arma;

    //     return $this;
    // }

    public function atacar(): int
    {
        if ($this->arma->numeroBala() > 1) {
            return $this->ataque + $this->forca + $this->arma->ataque();
        }
        
        return 0;
    }
}
