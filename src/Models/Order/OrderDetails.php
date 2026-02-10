<?php

namespace AlexisPPLIN\SendcloudV3\Models\Order;

use AlexisPPLIN\SendcloudV3\Models\ModelInterface;
use DateTimeImmutable;

/**
 * Node for general order information
 *
 * @see https://sendcloud.dev/api/v3/orders/retrieve-an-order#response-data-order-details
 */
class OrderDetails implements ModelInterface
{
    /**
     * @param $integration Sendcloud Integration object where orders come from
     * @param $status Order status
     * @param $order_created_at The date and time that the order was placed in the respective shop system
     * @param array<OrderItems> $order_items The list of items that an order contains
     * @param $order_updated_at The date and time that the order was last updated in the respective shop system
     * @param $notes Internal notes or comments placed by consumer on the order
     * @param array<string> $tags Tags assigned to the order
     */
    public function __construct(
        public readonly OrderDetailsIntegration $integration,
        public readonly OrderDetailsStatus $status,
        public readonly DateTimeImmutable $order_created_at,
        public readonly array $order_items,
        public readonly DateTimeImmutable $order_updated_at,
        public readonly string $notes,
        public readonly array $tags
    ) {

    }

    public static function fromJson(array $data) : self
    {
        
    }
}