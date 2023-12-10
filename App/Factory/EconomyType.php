<?php

namespace Factory;

class EconomyType implements TypeTaxi
{
    public function getType(): string
    {
        return "Economy ";
    }

    public function getPrice(): float
    {
        return rand(45, 55);
    }
}