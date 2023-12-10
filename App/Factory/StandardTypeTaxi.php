<?php

namespace Factory;

class StandardTypeTaxi extends Taxi
{

    public function getTaxi(): TypeTaxi
    {
        return new StandardType();
    }
}