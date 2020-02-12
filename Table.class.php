<?php

class Table
{
    private array $bets;
    private Bet $bet;
    private Wheel $wheel;

    function __construct()
    {
        $this->bet = new Bet();
        $this->wheel = new Wheel();
    }

    public function placeBet()
    {
        $this->bet->addBet();
        $this->wheel->roll();
    }

}