<?php

namespace Factory;

abstract class Taxi
{
    abstract protected function getTaxi(): TypeTaxi;

    public function getTypeTaxi(): void
    {
       $taxi = $this->getTaxi();
       d($taxi->getPrice());
       d($taxi->getType());
   }
}