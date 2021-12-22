<?php

namespace Gkimani\ZettatelPhpSdk;

use GuzzleHttp\Client;

class Zettatel
{
    public $Url;

    public function __construct($userId, $password, $apiKey, $senderid)
    {
        $this->Url = 'https://portal.zettatel.com/SMSApi/'; //baseurl

        $this->userId = $userId;
        $this->apiKey = $apiKey;
        $this->password = $password;
        $this->senderid = $senderid;

        $this->client = new Client([ //use guzzlehttp HTTP client library
            'base_uri' => $this->Url,
            'timeout' => 2.0,
            'headers' => [
                'apikey' => $this->apiKey,
                'cache-control: no-cache',
                'Content-Type' => 'application/x-www-form-urlencoded',
            ],
        ]);
    }

    public function sms()
    {
        $sms = new SMS($this->client, $this->userId, $this->password, $this->apiKey, $this->senderid);

        return $sms;
    }
}
