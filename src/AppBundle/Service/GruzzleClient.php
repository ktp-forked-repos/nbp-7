<?php
namespace AppBundle\Service;

use GuzzleHttp\Client;
use Psr\Http\Message\RequestInterface;
use GuzzleHttp\Exception\RequestException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\HttpException;

class GruzzleClient {
	private $client;
	private $base_url;

	public function __construct($url) {
		$this->client = new \GuzzleHttp\Client(['base_uri' => $url]);
		$this->base_url = $url;
	}

	public function getCurrency($url = null) {
		try {
			if (!$url) {
				$request = $this->client->request('GET', $this->base_url);	
			} else {
				$request = $this->client->request('GET', $url);
			}
		}
		catch(RequestException $e) {
  			return $e->getMessage();
		}
		
		return $request;
	}
}