<?php
namespace AppBundle\Service;

use AppBundle\Interfaces\HttpClientInterface;

class ApiConnector{
	private $client;

    public function __construct(HttpClientInterface $client) {
        $this->client = $client;
    }
	
	public function getCurrency() {
		$currency = $this->client->getCurrency();
		
		return $currency;
	}

	public function getHistoricalCurrencyByCode($code, $amount) {
		$currency = $this->client->getHistoricalCurrency($code, $amount);
		
		return $currency;
	}
}