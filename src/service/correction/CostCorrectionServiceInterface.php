<?php

namespace DeliveryCalculation\service\correction;

use DeliveryCalculation\dto\DeliveryCostResult;

interface CostCorrectionServiceInterface
{
    public function correct(object $data): DeliveryCostResult;
}