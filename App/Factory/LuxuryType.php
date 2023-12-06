<?php

namespace Factory;

class LuxuryType implements TypeTaxi
{

    public function getType(): string
    {
        return "Luxury ";
    }

    public function getPrice(): float
    {
        return rand(130,200);
    }
}