<?php

require_once __DIR__ . '/../../vendor/autoload.php';

function clientCode(TypeFactory $factory): void
{
    $taxi = $factory->createType();

    echo "Type: " . $taxi->getType() . PHP_EOL;
    echo "Prise: $" . $taxi->getPrice() . PHP_EOL;
}


echo "Economy Taxi: ";
clientCode(new EconomyTypeCreate());

echo "Standard Taxi: ";
clientCode(new StandardTypeCreate());

echo "Luxury Taxi: ";
clientCode(new LuxuryTypeCreate());