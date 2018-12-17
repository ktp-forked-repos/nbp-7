<?php
namespace AppBundle\Service;

use Symfony\Component\DependencyInjection\ContainerInterface as Container;
use AppBundle\Decorator\GruzzleClientDecorator;
use AppBundle\Service\GruzzleClient;

class NbpService{
	private $apiConnector;

    public function __construct(ApiConnector $apiConnector) {
        $this->apiConnector = $apiConnector;
    }
	
	public function getCurrency() {
		$currency = $this->apiConnector->getCurrency();
		
		return $currency;
	}

	public function getHistoricalCurrencyByCode($code, $amount) {
		$currency = $this->apiConnector->getHistoricalCurrencyByCode($code, $amount);
		
		return $currency;
	}

	public function decodeResponse($response) {
		return json_decode($response ->getBody()->getContents());
	}
}