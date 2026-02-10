<?php

namespace AlexisPPLIN\SendcloudV3\Models\Order;

use AlexisPPLIN\SendcloudV3\Models\ModelInterface;
use AlexisPPLIN\SendcloudV3\Models\Status;
use AlexisPPLIN\SendcloudV3\Utils\DateUtils;
use AlexisPPLIN\SendcloudV3\Utils\JsonUtils;
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
        public readonly Status $status,
        public readonly DateTimeImmutable $order_created_at,
        public readonly array $order_items,
        public readonly DateTimeImmutable $order_updated_at,
        public readonly string $notes,
        public readonly ?array $tags = null
    ) {

    }

    public static function fromData(array $data) : self
    {
        $order_items = [];
        foreach ($data['order_items'] as $item) {
            $order_items[] = OrderItems::fromData($item);
        }

        return new self(
            integration: OrderDetailsIntegration::fromData($data['integration']),
            status: Status::fromData($data['status']),
            order_created_at: DateUtils::iso8601ToDateTime($data['order_created_at']),
            order_items: $order_items,
            order_updated_at: DateUtils::iso8601ToDateTime($data['order_updated_at']),
            notes: (string) $data['notes'],
            tags: isset($data['tags']) ? $data['tags'] : null
        );
    }

    public function jsonSerialize() : array
    {
        $json = [
            'integration' => $this->integration,
            'status' => $this->status,
            'order_created_at' => DateUtils::dateTimeToIso8601($this->order_created_at),
            'order_items' => $this->order_items,
            'order_updated_at' => DateUtils::dateTimeToIso8601($this->order_updated_at),
            'notes' => $this->notes
        ];

        JsonUtils::addIfNotNull($json, 'tags', $this->tags);

        return $json;
    }
}