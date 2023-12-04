<?php

namespace Factory;

abstract class Taxi
{
    abstract public function getType(): string;
    abstract public function getPrice(): float;
}