<?php

namespace DeliveryCalculation\service;

use DeliveryCalculation\factory\DeliveryFactoryInterface;
use DeliveryCalculation\factory\SlowDeliveryFactory;
use JetBrains\PhpStorm\Pure;

class SlowDeliveryService extends AbstractDeliveryService
{

    #[Pure]
    protected function getDeliveryFactory(): DeliveryFactoryInterface
    {
        return new SlowDeliveryFactory();
    }
}