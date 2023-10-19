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
        do {
            $this->atacar($this->player, $this->desafiante);
            $this->atacar($this->desafiante, $this->player);

            var_dump("Life do desafiante " . $this->desafiante->hp());
            var_dump("Life do player " . $this->player->hp());
            sleep(1);

        } while ($this->desafiante->hp() > 0 || $this->player->hp() >= 0 );

        if($this->desafiante->hp() <= 0){
            echo "Personagem {$this->desafiante->nome()} morreu \n";
        }
        if($this->player->hp() <= 0){
            echo "Personagem {$this->player->nome()} morreu \n";
        }
        
        
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