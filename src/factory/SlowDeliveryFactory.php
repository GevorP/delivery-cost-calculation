<?php

namespace DeliveryCalculation\factory;

use DeliveryCalculation\apiClient\AbstractDeliveryApiClient;
use DeliveryCalculation\apiClient\SlowDeliveryApiClient;
use DeliveryCalculation\service\correction\CostCorrectionServiceInterface;
use DeliveryCalculation\service\correction\SlowDeliveryCorrectionService;
use JetBrains\PhpStorm\Pure;

class SlowDeliveryFactory implements DeliveryFactoryInterface
{

    #[Pure]
    public function getApiClient(): AbstractDeliveryApiClient
    {
        return new SlowDeliveryApiClient();
    }

    #[Pure]
    public function getCostCorrectionService(): CostCorrectionServiceInterface
    {
        return new SlowDeliveryCorrectionService();
    }
}