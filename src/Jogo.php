<?php

namespace Ringue;

use Ringue\Personagens\Arqueiro;
use Ringue\Personagens\Mago;
use Ringue\Personagens\Personagem;
use Ringue\Personagens\Samurai;
use Ringue\Personagens\Soldado;
use Ringue\Fases\Fase;

class Jogo
{
    private Personagem $player;

    public function __construct(
        private array $fases = [],
    ) {}

    public function addFase(Fase $fase): self
    {
        $this->fases[] = $fase;

        return $this;
    }

    public function setFases(array $fases): self
    {
        $this->fases = $fases;

        return $this;
    }

    public function start()
    {
        $this->escolherJogador();

        foreach ($this->fases as $fase) {
            $this->executarFase($fase);
        }


        exit('O jogo acabou');
    }

    private function executarFase(Fase $fase)
    {
        do {
            $passouDeFase = $fase->setPlayer($this->player)->run();
            sleep(1);
        } while (! $passouDeFase);
    }

    private function escolherJogador()
    {
        do {
            $input = readline('Digite qual personagem voce gostaria de jogar (Samurai, Mago, Arqueiro ou Soldado): ');

            $player = match (strtolower($input)) {
                'samurai' => new Samurai,
                'arqueiro' => new Arqueiro,
                'soldado' => new Soldado,
                'mago' => new Mago,
                default => null,
            };

            if (! $player) {
                echo "Personagem $input nao foi encontrado! \n";
            }

        } while (! $player);
        
        $this->player = $player;
    }
}
