<?php

declare(strict_types=1);

require dirname(__DIR__) . '\ringue\vendor\autoload.php';

use Ringue\Jogo;
use Ringue\Fases\UFC01;
use Ringue\Personagens\Mago;

$fase1 = new UFC01(new Mago);

$jogo = new Jogo([$fase1]);

$jogo->start();