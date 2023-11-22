<?php

require_once __DIR__ . '/vendor/autoload.php';

require_once __DIR__ . '/App/HW2/ValueObject.php';

$color = new ValueObject(45, 70, 56);

$newColor = $color->randColor();

$equals = $newColor->equals($newColor) . PHP_EOL;

$mixedColor = $color->mix($newColor);

echo $mixedColor->getRed() . PHP_EOL;
echo $mixedColor->getGreen() . PHP_EOL;
echo $mixedColor->getBlue() . PHP_EOL;

