<?php
namespace AppBundle\Interfaces;

interface HttpClientInterface {

	function getCurrency();
	function getHistoricalCurrency($code, $amount);
}