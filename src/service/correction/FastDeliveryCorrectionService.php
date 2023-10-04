<?php

namespace DeliveryCalculation\service\correction;

use DateTime;
use DeliveryCalculation\dto\DeliveryCostResult;
use DeliveryCalculation\factory\DeliveryCostResultFactory;

class FastDeliveryCorrectionService implements CostCorrectionServiceInterface
{

    public function correct(object $data): DeliveryCostResult
    {
        return DeliveryCostResultFactory::create(
            price: $data?->price,
            date: (new DateTime())->modify("+ $data?->period days"),
            error: $data?->error,
        );
    }
}