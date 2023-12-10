<?php
//
//interface TypeFactory
//{
//    public function createType(): Taxi;
//}
//
//abstract class Taxi
//{
//    abstract public function getType(): string;
//    abstract public function getPrice(): float;
//}
//
//class EconomyTypeCreate implements TypeFactory
//{
//    public function createType(): Taxi
//    {
//        return new EconomyTaxi();
//    }
//}
//
//class StandardTypeCreate implements TypeFactory
//{
//    public function createType(): Taxi
//    {
//        return new StandardTaxi();
//    }
//}
//
//class LuxuryTypeCreate implements TypeFactory
//{
//    public function createType(): Taxi
//    {
//        return new LuxuryTaxi();
//    }
//}
//
//class EconomyTaxi extends Taxi
//{
//    public function getType(): string
//    {
//        return "Economy";
//    }
//
//    public function getPrice(): float
//    {
//        return rand(45, 55);
//    }
//}
//
//class StandardTaxi extends Taxi
//{
//    public function getType(): string
//    {
//        return "Standard";
//    }
//
//    public function getPrice(): float
//    {
//        return rand(90,110);
//    }
//}
//
//class LuxuryTaxi extends Taxi
//{
//    public function getType(): string
//    {
//        return "Luxury";
//    }
//
//    public function getPrice(): float
//    {
//        return rand(130,200);
//    }
//}
//
//function clientCode(TypeFactory $factory): void
//{
//    $taxi = $factory->createType();
//
//    echo "Type: " . $taxi->getType();
//    echo "Prise: $" . $taxi->getPrice();
//}
//
//
//echo "Economy Taxi: ". PHP_EOL;
//clientCode(new EconomyTypeCreate());
//
//echo "Standard Taxi: ". PHP_EOL;
//clientCode(new StandardTypeCreate());
//
//echo "Luxury Taxi: ". PHP_EOL;
//clientCode(new LuxuryTypeCreate());