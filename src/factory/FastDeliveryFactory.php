<?php

namespace DeliveryCalculation\factory;

use DeliveryCalculation\apiClient\AbstractDeliveryApiClient;
use DeliveryCalculation\apiClient\FastDeliveryApiClient;
use DeliveryCalculation\service\correction\CostCorrectionServiceInterface;
use DeliveryCalculation\service\correction\FastDeliveryCorrectionService;
use JetBrains\PhpStorm\Pure;

class FastDeliveryFactory implements DeliveryFactoryInterface
{

    #[Pure]
    public function getApiClient(): AbstractDeliveryApiClient
    {
        return new FastDeliveryApiClient();
    }

    #[Pure]
    public function getCostCorrectionService(): CostCorrectionServiceInterface
    {
        return new FastDeliveryCorrectionService();
    }
}