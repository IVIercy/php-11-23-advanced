<?php

namespace Factory;

class LuxuryTypeCreate implements \TypeFactory
{
    public function createType(): Taxi
    {
        return new LuxuryTaxi();
    }
}