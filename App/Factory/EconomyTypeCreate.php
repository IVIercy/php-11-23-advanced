<?php

namespace Factory;

class EconomyTypeCreate implements \TypeFactory
{
    public function createType(): Taxi
    {
        return new EconomyTaxi();
    }
}