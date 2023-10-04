<?php

namespace DeliveryCalculation\factory;

use DeliveryCalculation\apiClient\AbstractDeliveryApiClient;
use DeliveryCalculation\service\correction\CostCorrectionServiceInterface;

interface DeliveryFactoryInterface
{
     public function getApiClient(): AbstractDeliveryApiClient;

     public function getCostCorrectionService(): CostCorrectionServiceInterface;
}