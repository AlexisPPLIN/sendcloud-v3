<?php

namespace AlexisPPLIN\SendcloudV3\Models\Order;

use AlexisPPLIN\SendcloudV3\Models\ModelInterface;
use AlexisPPLIN\SendcloudV3\Models\Tax\TaxNumbers;
use AlexisPPLIN\SendcloudV3\Utils\JsonUtils;

/**
 * Customs information required for international shipments.
 *
 * @see https://sendcloud.dev/api/v3/orders/retrieve-an-order#response-data-customs-details-one-of-0
 */
class CustomsDetails implements ModelInterface
{
    public const SHIPMENT_TYPES = [
        'gift',
        'commercial_goods',
        'commercial_sample',
        'returned_goods'
    ];

    public const EXPORT_TYPES = [
        'private',
        'commercial_b2c',
        'commercial_b2b'
    ];

    /**
     * @param $commercial_invoice_number Your own commercial invoice number
     * @param value-of<self::SHIPMENT_TYPES> $shipment_type Indicates the purpose or reason behind exporting the items. This classification helps customs authorities determine the applicable regulations, taxes, and duties.
     * @param value-of<self::EXPORT_TYPES> $export_type Export type documentation serves to categorize international shipments into three primary classifications:
     *                                                  - Private exports, intended for personal use
     *                                                  - Commercial B2C exports, directed towards individual consumers
     *                                                  - Commercial B2B exports, involving business-to-business transactions These distinctions facilitate adherence to regulatory requirements and ensure the orderly movement of goods across international boundaries.
     * @param $tax_numbers Identification numbers and codes related to sender, receiver and importer of record provider.
     */
    public function __construct(
        public readonly ?string $commercial_invoice_number = null,
        public readonly ?string $shipment_type = null,
        public readonly ?string $export_type = null,
        public readonly ?TaxNumbers $tax_numbers = null
    ) {

    }

    public static function fromData(array $data) : self
    {
        return new self(
            commercial_invoice_number:  isset($data['commercial_invoice_number'])               ? (string) $data['commercial_invoice_number']      : null,
            shipment_type:              isset($data['shipment_type'])                           ? (string) $data['shipment_type']                  : null,
            export_type:                isset($data['export_type'])                             ? (string) $data['export_type']                    : null,
            tax_numbers:                isset($data['tax_numbers'])                             ? TaxNumbers::fromData($data['tax_numbers']) : null
        );
    }

    public function jsonSerialize() : array
    {
        $json = [];

        JsonUtils::addIfNotNull($json, 'commercial_invoice_number', $this->commercial_invoice_number);
        JsonUtils::addIfNotNull($json, 'shipment_type', $this->shipment_type);
        JsonUtils::addIfNotNull($json, 'export_type', $this->export_type);
        JsonUtils::addIfNotNull($json, 'tax_numbers', $this->tax_numbers);

        return $json;
    }
}