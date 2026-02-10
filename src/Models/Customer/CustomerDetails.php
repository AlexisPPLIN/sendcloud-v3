<?php

namespace AlexisPPLIN\SendcloudV3\Models\Customer;

use AlexisPPLIN\SendcloudV3\Models\ModelInterface;
use JsonSerializable;

/**
 * Node for an information about customer
 *
 * @see https://sendcloud.dev/api/v3/orders/retrieve-an-order#response-data-customer-details
 */
class CustomerDetails implements ModelInterface
{
    /**
     * @param $name Name of the customer
     * @param $phone_number Phone number of the customer
     * @param $email Email of the customer
     */
    public function __construct(
        public readonly string $name,
        public readonly ?string $phone_number = null,
        public readonly ?string $email = null,
    ) {

    }

    public static function fromData(array $data) : self
    {
        return new self(
            name:           (string) $data['name'],
            phone_number:   isset($data['phone_number'])    ? (string) $data['phone_number']    : null,
            email:          isset($data['email'])           ? (string) $data['email']           : null,
        );
    }

    public function jsonSerialize() : array
    {
        $json = [
            'name' => $this->name
        ];

        if (isset($this->phone_number)) {
            $json['phone_number'] = $this->phone_number;
        }

        if (isset($this->email)) {
            $json['email'] = $this->email;
        }

        return $json;
    }
}