<?php

namespace Ringue\Personagens;

abstract class Personagem 
{
    protected string $nome;
    protected int $hp;
    // needs to be 100 till 300
    protected int $precisao;
     // needs to be 1 till 10
    protected int $forca;
    // needs to be 1 till 10

    public function atacar(){}
    public function defender(){}

}
