<?php
namespace AppBundle\Service;

use GuzzleHttp\Client;

class GruzzleClient {
	private $client;

	function __construct() {
		$this->client = new \GuzzleHttp\Client(['base_uri' => 'http://api.nbp.pl/api/exchangerates/tables/A/']);
	}

	public function getCurrency() {
		$request = $this->client->request('GET', '');

		return json_decode($request->getBody()->getContents());
	}
}