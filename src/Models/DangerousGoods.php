<?php

namespace AlexisPPLIN\SendcloudV3\Models;

use AlexisPPLIN\SendcloudV3\Utils\JsonUtils;

/**
 * Hazardous materials information for items.
 *
 * @see https://sendcloud.dev/api/v3/orders/retrieve-an-order#response-data-order-details-order-items-items-dangerous-goods
 */
class DangerousGoods implements ModelInterface
{
    public const REGULATION_SETS = [
        'IATA',
        'ADR'
    ];

    public const UNITS_OF_MESUREMENT = [
        'kg',
        'g',
        'l',
        'ml'
    ];

    public const COMMODITY_REGULATED_LEVEL_CODES = [
        'LQ',
        'EQ'
    ];

    public const TRANSPORTATION_MODES = [
        'Highway',
        'Ground',
        'PAX',
        'CAO'
    ];

    public const ADR_PACKING_GROUPS = [
        'I',
        'II',
        'III'
    ];

    public const WEIGHT_TYPES = [
        'net',
        'gross'
    ];

    /**
     * @param ?string $chemical_record_identifier Chemical record identifier for the dangerous goods
     * @param ?string $value Chemical record identifier for the dangerous goods
     * @param value-of<self::REGULATION_SETS> $regulation_set Regulation set governing the dangerous goods
     * @param ?string $packaging_type_quantity Quantity of packaging type
     * @param ?string $packaging_type Type of packaging used
     * @param ?string $packaging_instruction_code Packaging instruction code
     * @param ?string $id_number UN identification number
     * @param ?string $class_division_number Hazard class and division number
     * @param ?string $quantity Quantity of dangerous goods
     * @param value-of<self::UNITS_OF_MESUREMENT> $unit_of_measurement Unit of measurement for dangerous goods quantity
     * @param ?string $proper_shipping_name Proper shipping name as defined by regulations
     * @param value-of<self::COMMODITY_REGULATED_LEVEL_CODES> $commodity_regulated_level_code Commodity regulated level code
     * @param value-of<self::TRANSPORTATION_MODES> $transportation_mode Mode of transportation
     * @param ?string $emergency_contact_name Name of emergency contact person
     * @param ?string $emergency_contact_phone Phone number of emergency contact
     * @param value-of<self::ADR_PACKING_GROUPS> $adr_packing_group_letter ADR packing group classification
     * @param ?string $local_proper_shipping_name Local proper shipping name
     * @param ?string $transport_category Transport category for ADR regulations
     * @param ?string $tunnel_restriction_code Tunnel restriction code
     * @param value-of<self::WEIGHT_TYPES> $weight_type Type of weight measurement
     */
    public function __construct(
        public readonly string $regulation_set,
        public readonly string $unit_of_measurement,
        public readonly string $commodity_regulated_level_code,
        public readonly string $transportation_mode,
        public readonly string $weight_type,
        public readonly string $adr_packing_group_letter,
        public readonly ?string $chemical_record_identifier = null,
        public readonly ?string $packaging_type_quantity = null,
        public readonly ?string $packaging_type = null,
        public readonly ?string $packaging_instruction_code = null,
        public readonly ?string $id_number = null,
        public readonly ?string $class_division_number = null,
        public readonly ?string $quantity = null,
        public readonly ?string $proper_shipping_name = null,
        public readonly ?string $emergency_contact_name = null,
        public readonly ?string $emergency_contact_phone = null,
        public readonly ?string $local_proper_shipping_name = null,
        public readonly ?string $transport_category = null,
        public readonly ?string $tunnel_restriction_code = null,
    ) {

    }

    public static function fromData(array $data) : self
    {
        return new self(
            regulation_set:                     (string) $data['regulation_set'],
            unit_of_measurement:                (string) $data['unit_of_measurement'],
            commodity_regulated_level_code:     (string) $data['commodity_regulated_level_code'],
            transportation_mode:                (string) $data['transportation_mode'],
            weight_type:                        (string) $data['weight_type'],
            adr_packing_group_letter:           (string) $data['adr_packing_group_letter'],
            chemical_record_identifier:         isset($data['chemical_record_identifier'])  ? (string) $data['chemical_record_identifier']  : null,
            packaging_type_quantity:            isset($data['packaging_type_quantity'])     ? (string) $data['packaging_type_quantity']     : null,
            packaging_type:                     isset($data['packaging_type'])              ? (string) $data['packaging_type']              : null,
            packaging_instruction_code:         isset($data['packaging_instruction_code'])  ? (string) $data['packaging_instruction_code']  : null,
            id_number:                          isset($data['id_number'])                   ? (string) $data['id_number']                   : null,
            class_division_number:              isset($data['class_division_number'])       ? (string) $data['class_division_number']       : null,
            quantity:                           isset($data['quantity'])                    ? (string) $data['quantity']                    : null,
            proper_shipping_name:               isset($data['proper_shipping_name'])        ? (string) $data['proper_shipping_name']        : null,
            emergency_contact_name:             isset($data['emergency_contact_name'])      ? (string) $data['emergency_contact_name']      : null,
            emergency_contact_phone:            isset($data['emergency_contact_phone'])     ? (string) $data['emergency_contact_phone']     : null,
            local_proper_shipping_name:         isset($data['local_proper_shipping_name'])  ? (string) $data['local_proper_shipping_name']  : null,
            transport_category:                 isset($data['transport_category'])          ? (string) $data['transport_category']          : null,
            tunnel_restriction_code:            isset($data['tunnel_restriction_code'])     ? (string) $data['tunnel_restriction_code']     : null
        );
    }

    public function jsonSerialize() : array
    {
        $json = [
            'regulation_set' => $this->regulation_set,
            'unit_of_measurement' => $this->unit_of_measurement,
            'commodity_regulated_level_code' => $this->commodity_regulated_level_code,
            'transportation_mode' => $this->transportation_mode,
            'weight_type' => $this->weight_type,
            'adr_packing_group_letter' => $this->adr_packing_group_letter
        ];

        JsonUtils::addIfNotNull($json, 'chemical_record_identifier', $this->chemical_record_identifier);
        JsonUtils::addIfNotNull($json, 'packaging_type_quantity', $this->packaging_type_quantity);
        JsonUtils::addIfNotNull($json, 'packaging_type', $this->packaging_type);
        JsonUtils::addIfNotNull($json, 'packaging_instruction_code', $this->packaging_instruction_code);
        JsonUtils::addIfNotNull($json, 'id_number', $this->id_number);
        JsonUtils::addIfNotNull($json, 'class_division_number', $this->class_division_number);
        JsonUtils::addIfNotNull($json, 'quantity', $this->quantity);
        JsonUtils::addIfNotNull($json, 'proper_shipping_name', $this->proper_shipping_name);
        JsonUtils::addIfNotNull($json, 'emergency_contact_name', $this->emergency_contact_name);
        JsonUtils::addIfNotNull($json, 'emergency_contact_phone', $this->emergency_contact_phone);
        JsonUtils::addIfNotNull($json, 'local_proper_shipping_name', $this->local_proper_shipping_name);
        JsonUtils::addIfNotNull($json, 'transport_category', $this->transport_category);
        JsonUtils::addIfNotNull($json, 'tunnel_restriction_code', $this->tunnel_restriction_code);

        return $json;
    }
}