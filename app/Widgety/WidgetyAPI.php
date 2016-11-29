<?php
namespace App\Widgety;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Config;

/**
* 
*/
class WidgetyAPI
{
	protected $client;

	function __construct(Client $client)
	{
	
		$this->client = $client;
	}

	public function callAPI($apiendpoint)
	{
		$response = $this->client->request('GET', $apiendpoint.'.json', [
			   'query' =>['app_id' =>  Config::get('widgety.app_id'),
	           'token' => Config::get('widgety.token') ],
				]);

		return $response;
	}
}
