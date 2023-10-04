<?php

namespace DeliveryCalculation\service;

use DeliveryCalculation\factory\DeliveryFactoryInterface;
use DeliveryCalculation\factory\FastDeliveryFactory;
use JetBrains\PhpStorm\Pure;

class FastDeliveryService extends AbstractDeliveryService
{

    #[Pure]
    protected function getDeliveryFactory(): DeliveryFactoryInterface
    {
        return new FastDeliveryFactory();
    }
}