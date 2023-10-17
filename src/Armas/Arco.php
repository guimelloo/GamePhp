<?php

namespace Ringue\Armas;

class Arco implements Flecha
{
    public function ataque(): int 
    {
        return 5;
    }        
}
