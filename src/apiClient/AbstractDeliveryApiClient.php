<?php
namespace DeliveryCalculation\apiClient;

abstract class AbstractDeliveryApiClient
{
    protected string $baseUrl;
    protected string $sourceKladr;
    protected string $targetKladr;
    protected string $weight;

    /**
     * @param string $sourceKladr
     */
    public function setSourceKladr(string $sourceKladr): void
    {
        $this->sourceKladr = $sourceKladr;
    }

    /**
     * @param string $targetKladr
     */
    public function setTargetKladr(string $targetKladr): void
    {
        $this->targetKladr = $targetKladr;
    }

    /**
     * @param string $weight
     */
    public function setWeight(string $weight): void
    {
        $this->weight = $weight;
    }

    abstract public function call(): object;
}