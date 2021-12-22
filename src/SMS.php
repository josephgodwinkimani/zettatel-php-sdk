<?php

namespace Gkimani\ZettatelPhpSdk;

class SMS extends Service
{
    public function __construct($client, $userId, $password, $apiKey, $senderid)
    {
        parent::__construct($client, $userId, $password, $apiKey, $senderid);
    }

    public function send($options)
    {
        if (empty($options['mobile']) || empty($options['msg'])) {
            return $this->error('recipient and text message cannot be empty');
        }

        if ( ! is_array($options['mobile'])) {
            $options['mobile'] = [$options['mobile']];
        }

        $data = [
            'userId' => $this->userId,
            'password' => $this->password,
            'senderid' => $this->senderid,
            'mobile' => implode(',', $options['mobile']),
            'msg' => $options['msg'],
            'msgType' => 'text',
            'sendMethod' => 'quick',
            'output' => 'json',
        ];

        //$response = $this->client->post('send', ['form_params' => $data ]);

        $response = $this->client->request('POST', 'send', ['form_params' => $data]);

        return $this->success($response);
    }
}
