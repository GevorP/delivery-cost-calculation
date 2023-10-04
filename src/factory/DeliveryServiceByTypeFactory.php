<?php

namespace DeliveryCalculation\factory;

use DeliveryCalculation\service\DeliveryServiceInterface;
use DeliveryCalculation\service\FastDeliveryService;
use DeliveryCalculation\service\SlowDeliveryService;
use http\Exception\RuntimeException;

class DeliveryServiceByTypeFactory
{
    public static function getService(string $deliveryType): DeliveryServiceInterface
    {
        return match ($deliveryType) {
            'slow_delivery' => new SlowDeliveryService(),
            'fast_delivery' => new FastDeliveryService(),
            default => throw new RuntimeException("wrong type of delivery"),
        };
    }
}