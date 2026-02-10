<?php

namespace Test\AlexisPPLIN\SendcloudV3;

use AlexisPPLIN\SendcloudV3\Client;
use Http\Client\Common\HttpMethodsClient;

class ClientTestInstance extends Client {
    public function getClient() : HttpMethodsClient
    {
        return $this->client;
    }
};