<?php
namespace AppBundle\Service;

use AppBundle\Interfaces\HttpClientInterface;
use AppBundle\Helper\UrlTransformer;
use AppBundle\Helper\UrlHelper;
use GuzzleHttp\Client;
use Psr\Http\Message\RequestInterface;
use GuzzleHttp\Exception\RequestException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Exception\HttpException;

class GruzzleClient implements HttpClientInterface{
	private $client;
	private $urlHelperService;
	private $urlTransformer;

	public function __construct(Client $client, UrlHelper $urlHelper, UrlTransformer $urlTransformer) {
		$this->urlHelperService = $urlHelper;
		$this->urlTransformer = $urlTransformer;

		$this->client = $client;
	}

	public function getCurrency() {
		try {
			$request = $this->client->request('GET', $this->urlHelperService->getBaseUrl());	
		}
		catch(RequestException $e) {
  			return $e->getMessage();
		}
		
		return $request;
	}

	public function getHistoricalCurrency($code, $amount) {
		try {
			$transformedUrl = $this->urlTransformer->transformHistoryUrl($this->urlHelperService->getHistoryUrl(), $code, $amount);
			$request = $this->client->request('GET', $transformedUrl);	
		}
		catch(RequestException $e) {
  			return $e->getMessage();
		}
		
		return $request;	
	}
}