<?php

namespace Ringue\Personagens;
use Ringue\Armas\Lamina;

class Samurai extends Personagem
{
    protected string $nome = 'samurai';
    protected int $hp = 175;
    // needs to be 100 till 300
    protected int $precisao = 4;
     // needs to be 1 till 10
    protected int $forca = 5;
    // needs to be 1 till 10
    protected Lamina $arma;
    
    public function atacar(){}

    public function defender(){}
    
    public function equiparArma(Lamina $arma)
    {
        $this->arma = $arma;

        return $this;
    }

}
