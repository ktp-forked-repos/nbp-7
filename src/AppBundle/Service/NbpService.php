<?php
namespace AppBundle\Service;

use Symfony\Component\DependencyInjection\ContainerInterface as Container;
use AppBundle\Decorator\GruzzleClientDecorator;
use AppBundle\Service\GruzzleClient;

class NbpService{
	private $container;

    public function __construct(Container $container) {
        $this->container = $container;
    }
	
	public function getCurrency() {
		$gruzzleClient = $this->container->get('app.gruzzle_client');
		$gruzzle = new GruzzleClientDecorator($gruzzleClient);
		$currency = $gruzzle->getCurrency();
		
		return $currency;
	}
}