<?php

declare(strict_types=1);

namespace AlexisPPLIN\SendcloudV3\Models\Order;

use AlexisPPLIN\SendcloudV3\Models\ModelInterface;

/**
 * The ship with object can be used to define how you would like to send your shipment.
 * You can use a shipping_option_code. This is a unique identifier that displays what carrier and what set of shipping functionalities you want to use.
 *
 * @see https://sendcloud.dev/api/v3/orders/retrieve-an-order#response-data-shipping-details-ship-with
 */
class ShipWith implements ModelInterface
{
    /**
     * @param $type The way the shipping method and carrier will be selected.
     * @param $properties Contains the required properties to be sent when API client informs the shipping method and carrier to be used
     */
    public function __construct(
        public readonly string $type,
        public readonly ShippingOptionProperties $properties,
    ) {

    }

    public static function fromData(array $data) : self
    {
        return new self(
            type: $data['type'],
            properties: ShippingOptionProperties::fromData($data['properties'])
        );
    }

    public function jsonSerialize() : array
    {
        $json = [
            'type' => $this->type,
            'properties' => $this->properties
        ];

        return $json;
    }
}
