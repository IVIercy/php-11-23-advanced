<?php

namespace Factory;

class StandardTypeCreate implements \TypeFactory
{


    public function createType(): Taxi
    {
        return new StandardTaxi();
    }
}
