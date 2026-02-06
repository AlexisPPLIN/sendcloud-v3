<?php

namespace AlexisPPLIN\SendcloudV3\Models\Order;

use AlexisPPLIN\SendcloudV3\Models\ModelInterface;

class Order implements ModelInterface
{
    /**
     * @param string $order_id External order ID assigned by shop system
     * @param string $order_number Unique order number generated manually or by shop system
     */
    public function __construct(
        public readonly string $order_id,
        public readonly string $order_number
    ) {

    }

    public static function fromData(array $data) : self
    {
        return new self(
            (string) $data['order_id'],
            (string) $data['order_number'],
        );
    }
}