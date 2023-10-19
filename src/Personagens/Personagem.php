<?php

namespace Ringue\Personagens;

use Ringue\Armas\Arma;

// abstract class Personagem 
// {
//     protected string $nome;
//     protected int $hp;
//     // needs to be 100 till 300
//     protected int $precisao;
//      // needs to be 1 till 10
//     protected int $forca;
//     // needs to be 1 till 10

//     protected int $ataque;
//     // needs to be 1 till 10

//     protected int $defesa;
    
//     protected Arma $arma;

//     public function atacar(): int
//     {
//         return $this->ataque + $this->forca + $this->arma->ataque();
//     }

//     public function precisao(): int 
//     {
//         return $this->precisao;
//     }

//     public function life(): int 
//     {
//         return $this->hp;
//     }

//     public function tirarLife(int $dano): self
//     {
//         $this->hp -= $dano;
        
//         return $this;
//     }

//     public function arma(): Arma
//     {
//         return $this->arma;
//     }

//     //public function defender()
//     //{}

//     //public abstract function equiparArma(Arma $arma): self;
// }

interface Personagem
{
    public function nome(): string;

    public function forca(): int;

    public function hp(): int;

    public function ataque(): int;

    public function defesa(): int;
   
    public function atacar(): int;

    public function precisao(): int;

    public function tirarLife(int $dano): self;

    public function arma(): Arma;

    public function defender();

    public function equiparArma(Arma $arma): self;
}
