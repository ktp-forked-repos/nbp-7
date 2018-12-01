<?php
namespace AppBundle\Service;

use AppBundle\Adapter\GruzzleClientAdapter;
use AppBundle\Service\GruzzleClient;

class NbpService {
	
	public function getCurrency() {
		$gruzzle = new GruzzleClientAdapter(new GruzzleClient());
		$currency = $gruzzle->getCurrency();
		
		var_dump($currency);
		die;
	}
}