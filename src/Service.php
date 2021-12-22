<?php
namespace Gkimani\ZettatelPhpSdk;

abstract class Service 
{
	protected $client;

	protected $userId;

    protected $password;

	protected $apiKey;

    protected $senderid;

	public function __construct($client, $userId, $password, $apiKey, $senderid)
	{
		$this->client 	= $client;
		$this->userId = $userId;
		$this->apiKey 	= $apiKey;
        $this->password 	= $password;
        $this->senderid 	= $senderid;
	}

	protected static function error($data) {
		return [
			'status' 	=> 'error',
			'data'		=> $data
		];
	}


	protected static function success($data) {
		return [
			'status' 	=> 'success',
			'data'		=> json_decode($data->getBody()->getContents())
		];
	}
}
