<?php

namespace Factory;

class LuxuryTypeTaxi extends Taxi
{

    public function getTaxi(): TypeTaxi
    {
        return new LuxuryType();
    }
}