<?php

interface EatingBird
{
    public function eat();

}

interface FlyingBird
{
    public function fly();

}

class Swallow implements EatingBird, FlyingBird
{

    public function eat()
    {
        // TODO: Implement eat() method.
    }

    public function fly()
    {
        // TODO: Implement fly() method.
    }
}

class Ostrich implements EatingBird
{

    public function eat()
    {
        // TODO: Implement eat() method.
    }
}