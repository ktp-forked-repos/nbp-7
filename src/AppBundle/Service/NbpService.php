<?php
namespace AppBundle\Service;

use Symfony\Component\DependencyInjection\ContainerInterface as Container;
use AppBundle\Decorator\GruzzleClientDecorator;
use AppBundle\Service\GruzzleClient;

class NbpService{
	private $gruzzleDecorator;

    public function __construct(GruzzleClientDecorator $gruzzleDecorator) {
        $this->gruzzleDecorator = $gruzzleDecorator;
    }
	
	public function getCurrency() {
		$currency = $this->gruzzleDecorator->getCurrency();
		
		return $currency;
	}

	public function decodeResponse($response) {
		return json_decode($response ->getBody()->getContents());
	}
}