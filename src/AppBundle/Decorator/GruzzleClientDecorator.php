<?php
namespace AppBundle\Decorator;

use AppBundle\Interfaces\HttpClientInterface;
use AppBundle\Service\GruzzleClient;

class GruzzleClientDecorator implements HttpClientInterface{
	private $gruzzleClient;

	function __construct (GruzzleClient $gruzzleClient) {
		$this->gruzzleClient = $gruzzleClient;
	}

	public function getCurrency() {
		return $this->gruzzleClient->getCurrency();
	}

}