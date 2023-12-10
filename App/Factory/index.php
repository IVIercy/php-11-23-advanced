<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Factory\Taxi;

function clientCode(Taxi $getTaxi): void
{
    $getTaxi->getTypeTaxi();
}


echo "Economy Taxi: ";
clientCode(new \Factory\EconomyTypeTaxi()) . "\n";

echo "Standard Taxi: ";
clientCode(new \Factory\StandardTypeTaxi()) . "\n";

echo "Luxury Taxi: ";
clientCode(new \Factory\LuxuryTypeTaxi()) . "\n";