<?php
namespace DeliveryCalculation\service;

use DeliveryCalculation\dto\DeliveryCostResult;

interface DeliveryServiceInterface
{
    public function calculate(string $sourceKladr, string $targetKladr,float $weight): DeliveryCostResult;
}