<?php

namespace AlexisPPLIN\SendcloudV3\Models\Order;

use AlexisPPLIN\SendcloudV3\Models\Measurement\Measurement;
use AlexisPPLIN\SendcloudV3\Models\ModelInterface;
use AlexisPPLIN\SendcloudV3\Models\ServicePoint\ServicePoint;

/**
 * Shipping information
 *
 * @see https://sendcloud.dev/api/v3/orders/retrieve-an-order#response-data-shipping-details
 */
class ShippingDetails implements ModelInterface
{
    /**
     * @param $is_local_pickup Indicates if customers should collect the order in person from a merchant location
     * @param $delivery_indicator A free text field to indicate how a specific order should be shipped.
     *                            - The field is intended for applying the Checkout Delivery Method condition in shipping rules.
     *                            - Learn more about shipping rules {@see https://sendcloud.dev/docs/shipping/shipping-rules}.
     * @param $measurement Total order measurements
     * @param $ship_with The ship with object can be used to define how you would like to send your shipment.
     *                   You can use a shipping_option_code. This is a unique identifier that displays what carrier and what set of shipping functionalities you want to use.
     */
    public function __construct(
        public readonly ?bool $is_local_pickup = null,
        public readonly ?string $delivery_indicator = null,
        public readonly ?Measurement $measurement = null,
        public readonly ?ShipWith $ship_with = null
    ) {

    }

    public static function fromData(array $data) : self
    {
        return new self(
            is_local_pickup:        isset($data['is_local_pickup'])         ? (bool) $data['is_local_pickup']                                 : null,
            delivery_indicator:     isset($data['delivery_indicator'])      ? (string) $data['delivery_indicator']                            : null,
            measurement:            isset($data['measurement'])             ? Measurement::fromData($data['measurement'])               : null,
            ship_with:              isset($data['ship_with'])               ? ShipWith::fromData($data['ship_with'])                    : null
        );
    }
}