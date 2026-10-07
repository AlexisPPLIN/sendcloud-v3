<?php

namespace AlexisPPLIN\SendcloudV3\Models\Order;

use AlexisPPLIN\SendcloudV3\Models\ModelInterface;

/**
 * @see https://sendcloud.dev/api/v3/orders/create-update-orders-in-batch#body-items-order-details-order-items-items-cpsc-one-of-1
 */
class Cpsc implements ModelInterface
{
    /**
     * @param $product_id CPSC product identifier.
     * @param $certifier_id CPSC certifier identifier.
     * @param $version_id CPSC certificate version identifier.
     */
    public function __construct(
        public readonly string $product_id,
        public readonly string $certifier_id,
        public readonly string $version_id,
    ) {

    }

    public static function fromData(array $data) : self
    {
        return new self(
            product_id:     (string) $data['product_id'],
            certifier_id:   (string) $data['certifier_id'],
            version_id:     (string) $data['version_id'],
        );
    }

    public function jsonSerialize() : array
    {
        $json = [
            'product_id' => $this->product_id,
            'certifier_id' => $this->certifier_id,
            'version_id' => $this->version_id
        ];

        return $json;
    }
}