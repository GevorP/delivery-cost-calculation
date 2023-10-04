<?php
namespace DeliveryCalculation\factory;

use DateTime;
use DeliveryCalculation\dto\DeliveryCostResult;
use JetBrains\PhpStorm\Pure;

class DeliveryCostResultFactory
{
    public static function create(?float $price, ?DateTime $date, ?string $error,): DeliveryCostResult
    {
        return new DeliveryCostResult($price, $date?->format("Y-m-d"), $error);
    }
}