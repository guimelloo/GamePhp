<?php

namespace Ringue\Personagens;

class Soldado extends Personagem
{
    protected string $nome = 'soldado';
    protected int $hp = 200;
    // needs to be 100 till 300
    protected int $precisao = 7;
     // needs to be 1 till 10
    protected int $forca = 5;
    // needs to be 1 till 10
    
    public function atacar(){}
    public function defender(){}

}
