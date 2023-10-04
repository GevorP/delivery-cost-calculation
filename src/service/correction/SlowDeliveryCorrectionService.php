<?php

namespace DeliveryCalculation\service\correction;

use DateTime;
use DeliveryCalculation\dto\DeliveryCostResult;
use DeliveryCalculation\factory\DeliveryCostResultFactory;
use Exception;

class SlowDeliveryCorrectionService implements CostCorrectionServiceInterface
{
    public const  DELIVERY_BASE_PRICE = 150;

    /**
     * @throws Exception
     */
    public function correct(object $data): DeliveryCostResult
    {
        return DeliveryCostResultFactory::create(
            price: $data?->coefficient * self::DELIVERY_BASE_PRICE,
            date: isset($data->date) ? new DateTime($data?->date) : null,
            error: $data?->error,
        );
    }
}