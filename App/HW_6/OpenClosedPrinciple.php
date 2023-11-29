<?php

interface FormatInterface
{
    public function format($string);
}

interface DeliverInterface
{
    public function deliver($format);
}

class FormatRaw implements FormatInterface
{
    public function format($string)
    {
        return $string;
    }
}

class FormatWithDate implements FormatInterface
{
    public function format($string): string
    {
        return date('Y-m-d H:i:s') . $string;
    }
}

class FormatWithDateDetails implements FormatInterface
{
    public function format($string): string
    {
        return date('Y-m-d H:i:s') . $string . ' - With some details';
    }
}

class DeliverByEmail implements DeliverInterface
{
    public function deliver($format): void
    {
        echo "Format output ({$format}) by e-mail";
    }
}

class DeliverBySMS implements DeliverInterface
{
    public function deliver($format): void
    {
        echo "Format output ({$format}) by SMS";
    }
}

class DeliverToConsole implements DeliverInterface
{
    public function deliver($format): void
    {
        echo "Format output ({$format}) to the console";
    }
}

class Logger
{
    private $format;
    private $delivery;

    public function __construct(FormatInterface $format, DeliverInterface $delivery)
    {
        $this->format = $format;
        $this->delivery = $delivery;
    }

    public function log($string): void
    {
        $formatString = $this->format->format($string);
        $this->delivery->deliver($formatString);
    }
}

$rawFormatter = new FormatRaw();
$emailDelivery = new DeliverByEmail();

$logger = new Logger($rawFormatter, $emailDelivery);
$logger->log('Emergency error! Please fix me!');