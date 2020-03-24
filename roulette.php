<?php

spl_autoload_register(
    function ($className) {
        include_once $className + '.class' + '.php';
    }
);

class Roulette
{
    private RouletteGame $_rouletteGame;

    function __construct()
    {
        $this->_rouletteGame = new RouletteGame(0);
    }

    public function createGame()
    {
        $this->_rouletteGame->play();
    }
}

$roulette = new Roulette();
$roulette->createGame();