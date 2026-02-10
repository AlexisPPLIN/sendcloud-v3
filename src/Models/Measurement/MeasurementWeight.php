<?php

namespace AlexisPPLIN\SendcloudV3\Models\Measurement;

use AlexisPPLIN\SendcloudV3\Models\ModelInterface;


/**
 * Weight in the specified unit
 *
 * @see https://sendcloud.dev/api/v3/orders/retrieve-an-order#response-data-order-details-order-items-items-measurement-weight
 */
class MeasurementWeight implements ModelInterface
{
    public const UNITS = [
        'cm',
        'mm',
        'm',
        'yd',
        'ft',
        'in'
    ];

    /**
     * @param float $value Weight value
     * @param value-of<self::UNITS> $unit
     */
    public function __construct(
        public readonly float $value,
        public readonly string $unit
    ) {

    }

    public static function fromData(array $data) : self
    {
        return new self(
            value: (float) $data['value'],
            unit: (string) $data['unit']
        );
    }
}