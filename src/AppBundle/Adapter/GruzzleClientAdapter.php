<?php
namespace AppBundle\Adapter;

use AppBundle\Interfaces\HttpClientInterface;
use AppBundle\Service\GruzzleClient;

class GruzzleClientAdapter implements HttpClientInterface{
	private $gruzzleClient;

	function __construct (GruzzleClient $gruzzleClient) {
		$this->gruzzleClient = $gruzzleClient;
	}

	public function getCurrency() {
		return $this->gruzzleClient->getCurrency();
	}

}