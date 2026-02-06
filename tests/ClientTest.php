<?php

declare(strict_types=1);

namespace Test\AlexisPPLIN\SendcloudV3;

use AlexisPPLIN\SendcloudV3\Client;
use AlexisPPLIN\SendcloudV3\Factory\ClientFactory;
use Http\Client\Common\HttpMethodsClient;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

use Http\Mock\Client As MockClient; 

use Test\AlexisPPLIN\SendcloudV3\ClientTestInstance;

#[CoversClass(Client::class)]
#[CoversClass(ClientFactory::class)]
class ClientTest extends TestCase
{
    public function testConstruct(): void
    {
        // -- Arrange

        $publicKey = '123456';
        $secretKey = 'abcdef';
        $partnerId = '1';
        $apiBaseUrl = 'https://api.example.com/v3';
        $mockClient = new MockClient();

        // -- Act

        $client = new ClientTestInstance(
            $publicKey,
            $secretKey,
            $partnerId,
            $apiBaseUrl,
            $mockClient
        );

        // -- Assert

        $this->assertInstanceOf(HttpMethodsClient::class, $client->getClient());
    }

    public function testConstructWithoutClient(): void
    {
        // -- Arrange

        $publicKey = '123456';
        $secretKey = 'abcdef';
        $partnerId = '1';
        $apiBaseUrl = 'https://api.example.com/v3';
        $mockClient = null;

        // -- Act

        $client = new ClientTestInstance(
            $publicKey,
            $secretKey,
            $partnerId,
            $apiBaseUrl,
            $mockClient
        );

        // -- Assert

        $this->assertInstanceOf(HttpMethodsClient::class, $client->getClient());
    }
}
