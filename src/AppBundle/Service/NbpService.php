<?php
namespace AppBundle\Service;

use Symfony\Component\DependencyInjection\ContainerInterface as Container;
use AppBundle\Decorator\GruzzleClientDecorator;
use AppBundle\Service\GruzzleClient;

class NbpService{
	private $gruzzleClient;

    public function __construct(GruzzleClient $gruzzleClient) {
        $this->gruzzleClient = $gruzzleClient;
    }
	
	public function getCurrency() {
		$currency = $this->gruzzleClient->getCurrency();
		
		return $currency;
	}

	public function getHistoricalCurrencyByCode($code, $amount) {
		$currency = $this->gruzzleClient->getHistoricalCurrency($code, $amount);
		
		return $currency;
	}

	public function decodeResponse($response) {
		return json_decode($response ->getBody()->getContents());
	}
}