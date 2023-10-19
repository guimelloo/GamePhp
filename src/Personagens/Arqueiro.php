<?php

namespace Ringue\Personagens;
use Ringue\Armas\Arma;
use Ringue\Personagens\Personagem;
use Ringue\Armas\Flecha;

class Arqueiro implements Personagem
{
    private int $hp = 190;
    private Flecha $arma;

    public function nome(): string
    {
        return 'Arqueiro';
    }

    public function forca(): int
    {
        return 6;
    }

    public function hp(): int
    {
        return $this->hp;
    }

    public function ataque(): int
    {
        return 2;
    }

    public function precisao(): int 
    {
        return 9;
    }

    public function defesa(): int
    {
        return 4;
    }

    public function atacar(): int
    {
        return $this->ataque() + $this->forca() + $this->arma()->ataque();
    }

    public function tirarLife(int $dano): self
    {
        $this->hp -= $dano;
        
        return $this;
    }

    public function arma(): Arma
    {
        return $this->arma;
    }

    public function defender()
    {}
    public function equiparArma(Arma $espada): self
    {
        $this->arma = $espada;

        return $this;
    }
}
