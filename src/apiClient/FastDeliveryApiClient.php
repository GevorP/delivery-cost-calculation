<?php

namespace DeliveryCalculation\apiClient;

use DateTime;
use stdClass;

class FastDeliveryApiClient extends AbstractDeliveryApiClient
{
    public function __construct()
    {
        $this->baseUrl = "test";
    }

    /**
     * imitation of client call
     * @throws \JsonException
     * @throws \Exception
     */
    public function call(): object
    {
        $data = new stdClass();
        if (new DateTime() > new DateTime('18:00:00')) {
            $data->error = "After 18.00 applications are not accepted";
            $data->price = null;
            $data->period = null;
            return $data;
        }
        $jsonFilePath = $_SERVER['DOCUMENT_ROOT']. DIRECTORY_SEPARATOR .
            "data" . DIRECTORY_SEPARATOR . "fast_delivery.json";

        $jsonData = file_get_contents($jsonFilePath);
        $data = json_decode(
            $jsonData,
            false, 512, JSON_THROW_ON_ERROR
        );

        $count = count((array)$data);
        if($count > 0){
            $data = $data[random_int(0, $count - 1)];
        }
        return $data;
    }
}