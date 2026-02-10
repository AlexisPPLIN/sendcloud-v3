<?php

namespace AlexisPPLIN\SendcloudV3\Models\Order;

use AlexisPPLIN\SendcloudV3\Models\ModelInterface;

/**
 * Contains the required properties to be sent when API client informs the shipping method and carrier to be used
 *
 * @see https://sendcloud.dev/api/v3/orders/retrieve-an-order#response-data-shipping-details-ship-with-properties
 */
class ShippingOptionProperties implements ModelInterface
{
    /**
     * @param $shipping_option_code The shipping option that will be or is used for shipping your parcel. A shipping option code can be retrieved from the Create a list of shipping options endpoint.
     * @param $contract_id Selected shipping contract. If you haven't specified a contract for shipping your parcel, we will automatically select the default contract for the carrier that matches your shipping option. You can retrieve your contract IDs by using the Retrieve a list of contracts operation. Otherwise, the default direct contract will be automatically selected.
     */
    public function __construct(
        public readonly ?string $shipping_option_code = null,
        public readonly ?int $contract_id = null
    ) {

    }

    public static function fromData(array $data) : self
    {
        return new self(
            shipping_option_code: isset($data['shipping_option_code']) ? (string) $data['shipping_option_code'] : null,
            contract_id:          isset($data['contract_id'])          ? (int) $data['contract_id']             : null
        );
    }
}