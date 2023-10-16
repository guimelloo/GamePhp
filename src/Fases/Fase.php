<?php

namespace Ringue\Fases;

use Ringue\Personagens\Personagem;

abstract class Fase
{
    protected Personagem $player;

    public function __construct(
        protected Personagem $desafiante,
    ) {}

    public function setPlayer(Personagem $player): self
    {
        $this->player = $player;

        return $this;
    }

    final public function run(): bool
    {
        if (! isset($this->player)) {
            throw new \Exception('Voce precisa escolher o jogador.');
        }

        $passouDeFase = $this->exec();

        if ($passouDeFase) {
            echo sprintf("A Fase %s foi concluida.\n\n", get_class());
        } else {
            echo "Voce nao conseguiu concluir esta fase.\n\n";
        }
        

        return $passouDeFase;
    }

    abstract public function exec(): bool;
}
