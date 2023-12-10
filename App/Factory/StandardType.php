<?php

namespace Factory;

class StandardType implements TypeTaxi
{

    public function getType(): string
    {
        return "Standard ";
    }

    public function getPrice(): float
    {
        return rand(90,110);
    }
}
