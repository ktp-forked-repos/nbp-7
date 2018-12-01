<?php
namespace AppBundle\Service;

use GuzzleHttp\Client;
use Psr\Http\Message\RequestInterface;
use GuzzleHttp\Exception\RequestException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\HttpException;

class GruzzleClient {
	private $client;

	function __construct() {
		$this->client = new \GuzzleHttp\Client(['base_uri' => 'http://api.nbp.pl/api/exchangerates/tables/A/']);
	}

	public function getCurrency() {
		try {
			$request = $this->client->request('GET', '');
		}
		catch(RequestException $e) {
  			return $e->getMessage();
		}
		
		return $request;
	}
}