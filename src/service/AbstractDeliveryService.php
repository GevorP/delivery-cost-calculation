<?php

namespace DeliveryCalculation\service;

use DeliveryCalculation\dto\DeliveryCostResult;
use DeliveryCalculation\factory\DeliveryFactoryInterface;

abstract class AbstractDeliveryService implements DeliveryServiceInterface
{
    abstract protected function getDeliveryFactory(): DeliveryFactoryInterface;
    public function calculate(string $sourceKladr, string $targetKladr,float $weight): DeliveryCostResult
    {
        $deliveryClient = $this->getDeliveryFactory()->getApiClient();
        $deliveryClient->setSourceKladr($sourceKladr);
        $deliveryClient->setTargetKladr($targetKladr);
        $deliveryClient->setWeight($weight);
        $result = $deliveryClient->call();
        return $this->getDeliveryFactory()->getCostCorrectionService()->correct($result);
    }
}