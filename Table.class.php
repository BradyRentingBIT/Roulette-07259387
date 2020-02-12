<?php

class Table
{
    private array $bets;
    private Wheel $wheel;

    function __construct()
    {
        $this->wheel = new Wheel();
    }

    public function addBet($bet)
    {
        $this->bets[] = $bet;
    }

    public function placeBet($amount, $type)
    {
        $this->addBet(new Bet($amount, $type));
    }

}