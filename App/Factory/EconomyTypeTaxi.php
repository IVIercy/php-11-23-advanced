<?php

namespace Factory;

class EconomyTypeTaxi extends Taxi
{

    public function getTaxi(): TypeTaxi
    {
        return new EconomyType();
    }
}