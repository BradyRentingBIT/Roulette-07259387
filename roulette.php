<?php

spl_autoload_register(function($className) {
    include_once $className . '.class' . '.php';
});

class Roulette
{
    private RouletteGame $rouletteGame;

    function __construct()
    {
        $this->rouletteGame = new RouletteGame();
    }

    public function createGame()
    {
        $this->rouletteGame->play();
    }
}

$roulette = new Roulette();
$roulette->createGame();