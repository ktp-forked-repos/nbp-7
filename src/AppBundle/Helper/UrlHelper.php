<?php
namespace AppBundle\Helper;

class UrlHelper
{
	private $baseUrl;
	private $historyUrl;

    public function __construct($baseUrl, $historyUrl) {
    	$this->baseUrl = $baseUrl;
    	$this->historyUrl = $historyUrl;
    }

    public function getBaseUrl(){
     	return $this->baseUrl;
    }

    public function getHistoryUrl(){
    	return $this->historyUrl;
    }

}
