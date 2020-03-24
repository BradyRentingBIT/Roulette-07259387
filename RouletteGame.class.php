<?php

class RouletteGame
{
    private Table $_table;
    private int $_balance;

    function __construct($balance)
    {
        $this->_table = new Table();
        $this->_balance = $balance;
    }

    public function play()
    {
        echo "Your current balance: " . $this->_balance .  PHP_EOL;

        // Let user fill in data
        $amount = readline("Bet amount: ");
        $type = readline("Type: ");

        $this->_table->placeBet($amount, $type);
    }

    public function addBalance($balance)
    {
        $this->_balance = $balance;
    }
}