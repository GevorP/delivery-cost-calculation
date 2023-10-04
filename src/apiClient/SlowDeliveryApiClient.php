<?php

namespace DeliveryCalculation\apiClient;

use Exception;
use JsonException;

class SlowDeliveryApiClient extends AbstractDeliveryApiClient
{

    public function __construct()
    {
        $this->baseUrl = "test";
    }

    /**
     * imitation of client call
     * @throws JsonException
     * @throws  Exception
     */
    public function call(): object
    {
        $jsonFilePath = $_SERVER['DOCUMENT_ROOT']. DIRECTORY_SEPARATOR .
                        "data" . DIRECTORY_SEPARATOR . "slow_delivery.json";

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