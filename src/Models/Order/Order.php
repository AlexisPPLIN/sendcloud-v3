<?php

namespace AlexisPPLIN\SendcloudV3\Models\Order;

use AlexisPPLIN\SendcloudV3\Models\ModelInterface;

class Order implements ModelInterface
{
    /**
     * @param $order_id External order ID assigned by shop system
     * @param $order_number Unique order number generated manually or by shop system
     * @param $order_details Node for general order information
     */
    public function __construct(
        public readonly string $order_id,
        public readonly string $order_number,
        public readonly OrderDetails $order_details,
    ) {

    }

    public static function fromData(array $data) : self
    {
        return new self(
            order_id: (string) $data['order_id'],
            order_number: (string) $data['order_number'],
            order_details: OrderDetails::fromData($data['order_details'])
        );
    }
}