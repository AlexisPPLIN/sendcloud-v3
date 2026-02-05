<?php

declare(strict_types=1);

namespace AlexisPPLIN\SendcloudV3;

use AlexisPPLIN\SendcloudV3\Factory\ClientFactory;
use Http\Client\HttpClient;
use Http\Discovery\HttpClientDiscovery;

class Client
{
    protected const API_BASE_URL = 'https://panel.sendcloud.sc/api/v3/';

    protected HttpClient $client;

    public function __construct(
        protected string $publicKey,
        protected string $secretKey,
        protected ?string $partnerId = null,
        string $apiBaseUrl = self::API_BASE_URL
    ) {
        $client = HttpClientDiscovery::find();
        $this->client = ClientFactory::create(
            $apiBaseUrl,
            $publicKey,
            $secretKey,
            $partnerId,
            [],
            $client
        );
    }
}
