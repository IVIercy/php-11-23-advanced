<?php

namespace Factory;

class LuxuryTaxi extends Taxi
{

    public function getType(): string
    {
        return "Luxury";
    }

    public function getPrice(): float
    {
        return rand(130,200);
    }
}