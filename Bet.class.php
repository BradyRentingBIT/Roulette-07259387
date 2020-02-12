<?php

class Bet
{
    private int $amount;
    private string $type;

    function __construct($amount, $type)
    {
        $this->amount = $amount;
        $this->type = $type;
    }

    private function getAmount()
    {
        return $this->amount;
    }

    private function getType()
    {
        return $this->type;
    }
}