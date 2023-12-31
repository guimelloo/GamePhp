<?php

namespace Ringue\Personagens;
use Ringue\Armas\Arma;
use Ringue\Armas\Bala;
use Ringue\Personagens\Personagem;

class Soldado implements Personagem
{
    private int $hp = 170;
    private Bala $arma;

    public function nome(): string
    {
        return 'Soldado';
    }

    public function forca(): int
    {
        return 5;
    }

    public function hp(): int
    {
        return $this->hp;
    }

    public function ataque(): int
    {
        return 5;
    }

    public function precisao(): int 
    {
        return 7;
    }

    public function defesa(): int
    {
        return 3;
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
