<?php

namespace AlexisPPLIN\SendcloudV3\Endpoints;

use AlexisPPLIN\SendcloudV3\Client;
use AlexisPPLIN\SendcloudV3\Models\Order;

class Orders extends Client
{
    /**
     * Retrieve an order
     * Find a specific order by its order ID.
     * 
     * @see https://sendcloud.dev/api/v3/orders/retrieve-an-order
     */
    public function getOrder(int $id): Order
    {
        $response = $this->client->get('/orders/' . $id);
        $body = $response->getBody()->getContents();

        return Order::fromData(json_decode($body, true)['data']);
    }
}