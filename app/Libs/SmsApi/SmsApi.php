<?php

namespace App\Libs\SmsApi;


use GuzzleHttp\Client;

class SmsApi
{

    protected $config;
    protected $httpClient;

    public function __construct(array $config, Client $httpClient)
    {
        $this->config = $config;
        $this->httpClient = $httpClient;
    }

    public function send(SMSContentAbstract $content)
    {
        $params = [
            'username' => $this->config['username'],
            'password' => $this->config['password'],
            'to' => $content->getTo(),
            'from' => $content->getFrom(),
            'message' => $content->getContent(),
            'format' => 'json'
        ];
        $response = $this->httpClient->post($this->config['host'], ['form_params' => $params]);
        return \GuzzleHttp\json_decode($response->getBody()->getContents());
    }
}