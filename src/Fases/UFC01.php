<?php 

namespace Ringue\Fases;

class UFC01 extends Fase
{
    public function exec(): bool 
    {
        $aleatorio = rand(0, 10);

        //exit("$aleatorio \n\n\n\n");

        return $aleatorio > 8;
    }
}
