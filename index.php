<?php

require_once __DIR__ . '/Color.php';

$color = new Color(45, 70, 56);

$newColor = $color->randColor();

$equals = $newColor->equals($newColor) . PHP_EOL;

$mixedColor = $color->mix($newColor);

echo $mixedColor->getRed() . PHP_EOL;
echo $mixedColor->getGreen() . PHP_EOL;
echo $mixedColor->getBlue() . PHP_EOL;

