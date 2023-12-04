<?php

namespace Factory;

class EconomyTaxi extends Taxi
{

    public function getType(): string
    {
        return "Economy";
    }

    public function getPrice(): float
    {
        return rand(45, 55);
    }
}