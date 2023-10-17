<?php

namespace Ringue\Personagens;

use Ringue\Armas\Arma;
use Ringue\Armas\Flecha;

class Arqueiro extends Personagem
{
    protected string $nome = 'arqueiro';
    protected int $hp = 190;
    // needs to be 100 till 300
    protected int $precisao = 4;
     // needs to be 1 till 10
    protected int $forca = 6;
    // needs to be 1 till 10

    protected int $ataque = 2;

    protected int $defesa = 4;

    public function atacar(): int
    {
        return parent::atacar() + 2;        
    }

    public function precisao(): int 
    {
        return parent::precisao() + 2;
    }


    public function defender(){}
    
    public function equiparArma(Arma $arma): self
    {       
        if (! $arma instanceof Flecha) {
            throw new \Exception('A arma que voce passou nao eh compativel com esse jogador');
        }

        $this->arma = $arma;

        return $this;
    }
}
