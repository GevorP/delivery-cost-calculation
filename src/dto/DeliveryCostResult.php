<?php
namespace DeliveryCalculation\dto;

use DateTime;

final class DeliveryCostResult
{
    /**
     * @param float|null $price
     * @param string|null $date
     * @param string|null $error
     */
    public function __construct(
        public ?float $price,
        public ?string $date,
        public ?string $error,
    )
    {
    }
}