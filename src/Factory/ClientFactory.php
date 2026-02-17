<?php

declare(strict_types=1);

namespace AlexisPPLIN\SendcloudV3\Factory;

use Http\Discovery\Exception\NotFoundException;
use Http\Client\Common\Plugin\BaseUriPlugin;
use Http\Client\Common\Plugin\HeaderSetPlugin;
use Http\Client\Common\PluginClient;
use Http\Client\HttpClient;
use Http\Client\Common\Plugin;
use Http\Client\Common\Plugin\AuthenticationPlugin;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Http\Message\Authentication\BasicAuth;
use InvalidArgumentException;

class ClientFactory
{
    /**
     * @param array<Plugin> $plugins
     * @throws NotFoundException
     * @throws InvalidArgumentException
     */
    public static function create(
        string $base_uri,
        string $user,
        string $pass,
        ?string $partnerId = null,
        array $plugins = [],
        ?HttpClient $client = null
    ): PluginClient {
        if ($client === null) {
            $client = Psr18ClientDiscovery::find();
        }

        // Basic auth

        $plugins[] = new AuthenticationPlugin(
            new BasicAuth($user, $pass)
        );

        // Base Uri

        $uri_factory = Psr17FactoryDiscovery::findUriFactory()->createUri($base_uri);
        $plugins[] = new BaseUriPlugin(
            $uri_factory,
            ['replace' => true],
        );

        // Headers

        $headers = [
            'Content-Type' => 'application/json'
        ];
        if (isset($partnerId)) {
            $headers['Sendcloud-Partner-Id'] = $partnerId;
        }

        $plugins[] = new HeaderSetPlugin($headers);

        return new PluginClient($client, $plugins);
    }
}
