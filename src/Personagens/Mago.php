<?php

namespace Ringue\Personagens;
use Ringue\Armas\Arma;
use Ringue\Armas\Magia;

class Mago extends Personagem
{
    protected string $nome = 'mago';
    protected int $hp = 230;
    // needs to be 100 till 300
    protected int $precisao = 5;
     // needs to be 1 till 10
    protected int $forca = 3;

    protected int $ataque = 5;

    protected int $defesa = 5;


    // needs to be 1 till 10
    
    public function defender(){}

    public function equiparArma(Arma $arma): self
    {       
        if (! $arma instanceof Magia) {
            throw new \Exception('A arma que voce passou nao eh compativel com esse jogador');    
        }

        $this->arma = $arma;

        return $this;
    }
}
