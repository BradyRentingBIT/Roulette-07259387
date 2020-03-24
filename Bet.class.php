<?php

class Bet
{
    private int $_amount;
    private string $_type;

    function __construct($amount, $type)
    {
        $this->_amount = $amount;
        $this->_type = $type;
    }

    private function getAmount()
    {
        return $this->_amount;
    }

    private function getType()
    {
        return $this->_type;
    }
}