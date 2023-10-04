<?php
use DeliveryCalculation\factory\DeliveryServiceByTypeFactory;

require '../vendor/autoload.php';

$deliveryService = DeliveryServiceByTypeFactory::getService("fast_delivery");
$result = $deliveryService->calculate("45616465", "564834312", 12);
try {
    echo(json_encode($result, JSON_THROW_ON_ERROR));
} catch (JsonException $e) {
    echo "error";
}