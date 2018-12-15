<?php
namespace AppBundle\Service;

use AppBundle\Interfaces\HttpClientInterface;
use AppBundle\Helper\UrlTransformer;
use GuzzleHttp\Client;
use Psr\Http\Message\RequestInterface;
use GuzzleHttp\Exception\RequestException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\HttpException;

class GruzzleClient implements HttpClientInterface{
	private $client;
	private $baseUrl;
	private $historyUrl;
	private $urlTransformer;

	public function __construct($baseUrl, $historyUrl, UrlTransformer $urlTransformer) {
		$this->client = new \GuzzleHttp\Client(['base_uri' => $baseUrl]);
		$this->baseUrl = $baseUrl;
		$this->historyUrl = $historyUrl;
		$this->urlTransformer = $urlTransformer;
	}

	public function getCurrency() {
		try {
			$request = $this->client->request('GET', $this->baseUrl);	
		}
		catch(RequestException $e) {
  			return $e->getMessage();
		}
		
		return $request;
	}

	public function getHistoricalCurrency($code, $amount) {
		try {
			$transformedUrl = $this->urlTransformer->transformHistoryUrl($this->historyUrl, $code, $amount);
			$request = $this->client->request('GET', $transformedUrl);	
		}
		catch(RequestException $e) {
  			return $e->getMessage();
		}
		
		return $request;	
	}
}