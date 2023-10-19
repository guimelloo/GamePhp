<?php declare(strict_types=1);

use Ringue\Personagens\Ogro;
use Ringue\Personagens\Robo;
use Ringue\Personagens\Samurai;


require dirname(__DIR__) . '\ringue\vendor\autoload.php';

use Ringue\Jogo;
use Ringue\Fases\UFC01;
use Ringue\Personagens\Mago;
use Ringue\Combate;
use Ringue\Personagens\Arqueiro;
use Ringue\Armas\Arco;
use Ringue\Armas\Espada;
use Ringue\Armas\Magia;

// $fase1 = new UFC01(new Mago);

// $jogo = new Jogo([$fase1]);

// $jogo->start();



$player = new Ogro;

$player->equiparArma(new Espada);

$desafiante = new Mago;

$desafiante->equiparArma(new Magia);

$combate = new Combate($player, $desafiante);

$combate->combate();



