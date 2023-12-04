<?php

namespace Factory;

class StandardTaxi extends Taxi
{

    public function getType(): string
    {
        return "Standard";
    }

    public function getPrice(): float
    {
        return rand(90,110);
    }
}