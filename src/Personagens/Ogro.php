<?php

namespace Ringue\Personagens;
use Ringue\Armas\Arma;
use Ringue\Armas\Lamina;
use Ringue\Personagens\Personagem;

class Ogro implements Personagem
{
    private int $hp = 290;
    private Lamina $arma;

    public function nome(): string
    {
        return 'Ogro';
    }

    public function forca(): int
    {
        return 9;
    }

    public function hp(): int
    {
        return $this->hp;
    }

    public function ataque(): int
    {
        return 7;
    }

    public function precisao(): int 
    {
        return 1;
    }

    public function defesa(): int
    {
        return 5;
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