<?php

class RouletteGame
{
    private Table $table;
    private int $balance;

    function __construct($balance)
    {
        $this->table = new Table();
        $this->balance = $balance;
    }

    public function play()
    {
        echo "Your current balance: " . $this->balance .  PHP_EOL;

        // Let user fill in data
        $amount = readline("Amount: ");
        $type = readline("Type: ");

        $this->table->placeBet($amount, $type);
    }

    public function addBalance($balance)
    {
        $this->balance = $balance;
    }
}