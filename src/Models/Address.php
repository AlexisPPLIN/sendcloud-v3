<?php

namespace AlexisPPLIN\SendcloudV3\Models;

use AlexisPPLIN\SendcloudV3\Utils\JsonUtils;

/**
 * Sendcloud Address object
 *
 * @see https://sendcloud.dev/api/v3/orders/retrieve-an-order#response-data-billing-address
 */
class Address implements ModelInterface
{
    /**
     * @param $name Name of the person associated with the address
     * @param $address_line_1 First line of the address
     * @param $postal_code Zip code of the address
     * @param $city City of the address
     * @param $country_code The country code of the customer represented as ISO 3166-1 alpha-2
     * @param $company_name Name of the company associated with the address
     * @param $house_number House number of the address
     * @param $address_line_2 Additional address information, e.g. 2nd level
     * @param $po_box Code required in case of PO Box or post locker delivery
     * @param $state_province_code The character state code of the customer represented as ISO 3166-2 code
     * @param $email Email address of the person associated with the address
     * @param $phone_number Phone number of the person associated with the address
     */
    public function __construct(
        public readonly string $name,
        public readonly string $address_line_1,
        public readonly string $postal_code,
        public readonly string $city,
        public readonly string $country_code,
        public readonly ?string $company_name = null,
        public readonly ?string $house_number = null,
        public readonly ?string $address_line_2 = null,
        public readonly ?string $po_box = null,
        public readonly ?string $state_province_code = null,
        public readonly ?string $email = null,
        public readonly ?string $phone_number = null
    ) {

    }

    public static function fromData(array $data) : self
    {
        return new self(
            name:                   (string) $data['name'],
            address_line_1:         (string) $data['address_line_1'],
            postal_code:            (string) $data['postal_code'],
            city:                   (string) $data['city'],
            country_code:           (string) $data['country_code'],
            company_name:           isset($data['company_name'])        ? (string) $data['company_name']        : null,
            house_number:           isset($data['house_number'])        ? (string) $data['house_number']        : null,
            address_line_2:         isset($data['address_line_2'])      ? (string) $data['address_line_2']      : null,
            po_box:                 isset($data['po_box'])              ? (string) $data['po_box']              : null,
            state_province_code:    isset($data['state_province_code']) ? (string) $data['state_province_code'] : null,
            email:                  isset($data['email'])               ? (string) $data['email']               : null,
            phone_number:           isset($data['phone_number'])        ? (string) $data['phone_number']        : null,
        );
    }

    public function jsonSerialize() : array
    {
        $json = [
            'name' => $this->name,
            'address_line_1' => $this->address_line_1,
            'postal_code' => $this->postal_code,
            'city' => $this->city,
            'country_code' => $this->country_code,
        ];

        JsonUtils::addIfNotNull($json, 'company_name', $this->company_name);
        JsonUtils::addIfNotNull($json, 'house_number', $this->house_number);
        JsonUtils::addIfNotNull($json, 'address_line_2', $this->address_line_2);
        JsonUtils::addIfNotNull($json, 'po_box', $this->po_box);
        JsonUtils::addIfNotNull($json, 'state_province_code', $this->state_province_code);
        JsonUtils::addIfNotNull($json, 'email', $this->email);
        JsonUtils::addIfNotNull($json, 'phone_number', $this->phone_number);

        return $json;
    }
}