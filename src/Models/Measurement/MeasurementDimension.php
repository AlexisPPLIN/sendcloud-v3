<?php

declare(strict_types=1);

namespace AlexisPPLIN\SendcloudV3\Models\Measurement;

use AlexisPPLIN\SendcloudV3\Models\ModelInterface;

/**
 * Dimension in the specified unit
 *
 * @see https://sendcloud.dev/api/v3/orders/retrieve-an-order#response-data-order-details-order-items-items-measurement-dimension
 */
class MeasurementDimension implements ModelInterface
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
     * @param float $length length in specified unit
     * @param float $width width in specified unit
     * @param float $height height in specified unit
     * @param value-of<self::UNITS> $unit
     */
    public function __construct(
        public readonly float $length,
        public readonly float $width,
        public readonly float $height,
        public readonly string $unit
    ) {

    }

    public static function fromData(array $data) : self
    {
        return new self(
            length: (float) $data['length'],
            width: (float) $data['width'],
            height: (float) $data['height'],
            unit: (string) $data['unit']
        );
    }

    public function jsonSerialize() : array
    {
        $json = [
            'length' => $this->length,
            'width' => $this->width,
            'height' => $this->height,
            'unit' => $this->unit
        ];

        return $json;
    }
}
