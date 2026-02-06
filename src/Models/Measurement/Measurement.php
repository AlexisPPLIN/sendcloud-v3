<?php

namespace AlexisPPLIN\SendcloudV3\Models\Measurement;

use AlexisPPLIN\SendcloudV3\Models\ModelInterface;

/**
 * This object provides essential information for accurate packing, shipping, and inventory management
 *
 * @see https://sendcloud.dev/api/v3/orders/retrieve-an-order#response-data-order-details-order-items-items-measurement
 */
class Measurement implements ModelInterface
{
    public function __construct(
        public readonly ?MeasurementDimension $dimension = null,
        public readonly ?MeasurementWeight $weight = null,
        public readonly ?MeasurementVolume $volume = null,
    ) {

    }

    public static function fromData(array $data) : self
    {
        $dimension = null;
        $weight = null;
        $volume = null;

        if (isset($data['dimension'])) {
            $dimension = MeasurementDimension::fromData($data['dimension']);
        }

        if (isset($data['weight'])) {
            $weight = MeasurementWeight::fromData($data['weight']);
        }

        if (isset($data['volume'])) {
            $volume = MeasurementVolume::fromData($data['volume']);
        }

        return new self(
            dimension: $dimension,
            weight: $weight,
            volume: $volume
        );
    }
}