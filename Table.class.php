<?php

class Table
{
    private array $_bets;
    private Wheel $_wheel;

    function __construct()
    {
        $this->_wheel = new Wheel();
    }

    public function addBet($bet)
    {
        $this->_bets[] = $bet;
    }

    public function placeBet($amount, $type)
    {
        $this->addBet(new Bet($amount, $type));
    }

}