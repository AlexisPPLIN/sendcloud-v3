<?php

namespace AlexisPPLIN\SendcloudV3\Models\Measurement;

use AlexisPPLIN\SendcloudV3\Models\ModelInterface;


/**
 * Volume in the specified unit
 *
 * @see https://sendcloud.dev/api/v3/orders/retrieve-an-order#response-data-order-details-order-items-items-measurement-volume
 */
class MeasurementVolume implements ModelInterface
{
    public const UNITS = [
        'm3',
        'cm3',
        'l',
        'ml',
        'gal'
    ];

    /**
     * @param float $value Volume value
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