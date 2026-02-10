<?php

declare(strict_types=1);

namespace AlexisPPLIN\SendcloudV3;

use AlexisPPLIN\SendcloudV3\Factory\ClientFactory;
use Http\Client\Common\HttpMethodsClient;
use Http\Client\HttpClient;
use Http\Discovery\HttpClientDiscovery;
use Http\Discovery\Psr17FactoryDiscovery;
use InvalidArgumentException;

class Client
{
    protected const API_BASE_URL = 'https://panel.sendcloud.sc/api/v3/';

    protected HttpMethodsClient $client;

    /**
     * @throws \Http\Discovery\Exception\NotFoundException
     * @throws InvalidArgumentException
     */
    public function __construct(
        protected string $publicKey,
        protected string $secretKey,
        protected ?string $partnerId = null,
        string $apiBaseUrl = self::API_BASE_URL,
        ?HttpClient $client = null
    ) {
        $client = ClientFactory::create(
            $apiBaseUrl,
            $publicKey,
            $secretKey,
            $partnerId,
            [],
            $client
        );

        $this->client = new HttpMethodsClient(
            $client,
            Psr17FactoryDiscovery::findRequestFactory()
        );
    }
}
