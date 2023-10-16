<?php

namespace Ringue\Personagens;

class Arqueiro extends Personagem
{
    protected string $nome = 'arqueiro';
    protected int $hp = 190;
    // needs to be 100 till 300
    protected int $precisao = 9;
     // needs to be 1 till 10
    protected int $forca = 6;
    // needs to be 1 till 10
    
    public function atacar(){}
    public function defender(){}

}
