<?php

namespace Ringue;
use Ringue\Armas\Arma;
use Ringue\Armas\Bala;
use Ringue\Personagens\Personagem;

class Combate
{
    public function __construct(
        private Personagem $player,
        private Personagem $desafiante
    ) {}

    public function combate()
    {
        $this->atacar($this->player, $this->desafiante);
        $this->atacar($this->desafiante, $this->player);

        var_dump($this->desafiante->life());
        var_dump($this->player->life());
    }

    private function atacar(Personagem $atacante, Personagem $defensor)
    {
        $defesa = 0;
        $random = rand(0, 10);

        if ($random <= $atacante->precisao()) {
            $defensor->tirarLife($atacante->atacar() - $defesa);

            $this->retirarBala($atacante->arma());    
        }
    }


    private function retirarBala(Arma $arma)
    {
        if ($arma instanceof Bala) {
            $arma->tirarBala(1);
        }
    }
}