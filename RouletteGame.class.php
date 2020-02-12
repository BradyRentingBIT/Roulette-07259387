<?php

class RouletteGame
{
    private $table;
    private int $balance;

    function __construct($balance)
    {
        $this->balance = $balance;
    }

    public function play()
    {
        echo "Your current balance: " . $this->balance .  PHP_EOL;
    }

    public function addBalance($balance)
    {
        $this->balance = $balance;
    }
}