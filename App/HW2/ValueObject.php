<?php

class ValueObject
{

    /**
     * @throws Exception
     */
    public function __construct(private int|float $red,private int|float $green,private int|float $blue)
    {
        $this->setRed($red);
        $this->setGreen($green);
        $this->setBlue($blue);
    }

    public function getRed(): int|float
    {
        return $this->red;
    }

    public function getGreen(): int|float
    {
        return $this->green;
    }

    public function getBlue(): int|float
    {
        return $this->blue;
    }

    /**
     * @throws Exception
     */
    public function setGreen($green): void
    {
        $this->validator($green);
        $this->green = $green;
    }

    /**
     * @throws Exception
     */
    public function setRed($red): void
    {
        $this->validator($red);
        $this->red = $red;
    }

    /**
     * @throws Exception
     */
    public function setBlue($blue): void
    {
        $this->validator($blue);
        $this->blue = $blue;
    }

    private function validator($value): void
    {
        if ($value < 0 || $value > 255) {
            throw new Exception("Invalid color");
        }
    }

    public function equals(ValueObject $newColor): bool
    {
        return $this->red === $newColor->getRed() &&
            $this->green === $newColor->getGreen() &&
            $this->blue === $newColor->getBlue();
    }


    /**
     * @throws Exception
     */
    public static function randColor(): ValueObject
    {
        $randRed = rand(0, 255);
        $randGreen = rand(0, 255);
        $randBlue = rand(0, 255);

        return new ValueObject($randRed, $randGreen, $randBlue);
    }

    /**
     * @throws Exception
     */
    public function mix(ValueObject $newColor): ValueObject
    {
        $mixedRed = ($this->red + $newColor->getRed()) / 2;
        $mixedGreen = ($this->green + $newColor->getGreen()) / 2;
        $mixedBlue = ($this->blue + $newColor->getBlue()) / 2;

        return new ValueObject($mixedRed, $mixedGreen, $mixedBlue);
    }

}
