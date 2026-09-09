<?php

declare(strict_types=1);

namespace AlexisPPLIN\SendcloudV3\Models\AddressValidation;

use AlexisPPLIN\SendcloudV3\Models\ModelInterface;
use AlexisPPLIN\SendcloudV3\Utils\JsonUtils;

/**
 * Address Washer Request object model
 *
 * @see https://sendcloud.dev/api/v3/address/validate#body-address
 */
class Address implements ModelInterface
{
    /**
     * @param $address_line_1 First line of the address
     * @param $house_number House number of the address
     * @param $address_line_2 Additional address information, e.g. 2nd level
     * @param $postal_code Zip code of the address
     * @param $city City of the address
     * @param $state_province_code The character state code of the customer represented as ISO 3166-2 code. This field is required for certain countries. See {@link https://sendcloud.dev/docs/shipments/international-shipping#required-fields-for-international-shipments international shipping} for details.
     * @param $country_code The country code of the customer represented as ISO 3166-1 alpha-2
     * @param $po_box Code required in case of PO Box or post locker delivery
     */
    public function __construct(
        public readonly string $address_line_1,
        public readonly string $house_number,
        public readonly string $address_line_2,
        public readonly string $postal_code,
        public readonly string $city,
        public readonly string $state_province_code,
        public readonly string $country_code,
        public readonly ?string $po_box = null,
    ) {

    }

    public static function fromData(array $data) : self
    {
        return new self(
            address_line_1:         (string) $data['address_line_1'],
            house_number:           (string) $data['house_number'],
            address_line_2:         (string) $data['address_line_2'],
            postal_code:            (string) $data['postal_code'],
            city:                   (string) $data['city'],
            state_province_code:    (string) $data['state_province_code'],
            country_code:           (string) $data['country_code'],
            po_box:                 isset($data['po_box'])                  ? (string) $data['po_box']        : null,
        );
    }

    public function jsonSerialize() : array
    {
        $json = [
            'address_line_1' => $this->address_line_1,
            'house_number' => $this->house_number,
            'address_line_2' => $this->address_line_2,
            'postal_code' => $this->postal_code,
            'city' => $this->city,
            'state_province_code' => $this->state_province_code,
            'country_code' => $this->country_code,
        ];

        JsonUtils::addIfNotNull($json, 'company_name', $this->po_box);

        return $json;
    }
}