<?php

namespace Ringue\Personagens;

class Mago extends Personagem
{
    protected string $nome = 'mago';
    protected int $hp = 230;
    // needs to be 100 till 300
    protected int $precisao = 7;
     // needs to be 1 till 10
    protected int $forca = 3;
    // needs to be 1 till 10
    
    public function atacar(){}
    public function defender(){}

}
