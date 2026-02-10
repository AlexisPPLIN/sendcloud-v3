<?php

namespace AlexisPPLIN\SendcloudV3\Models\Tax;

use AlexisPPLIN\SendcloudV3\Models\ModelInterface;

class TaxNumber implements ModelInterface
{
    public function __construct(
        public readonly ?string $name = null,
        public readonly ?string $country_code = null,
        public readonly ?string $value = null,
    ) {

    }

    public static function fromData(array $data) : self
    {
        return new self(
            name:            isset($data['name'])         ? (string) $data['name']         : null,
            country_code:    isset($data['country_code']) ? (string) $data['country_code'] : null,
            value:           isset($data['value'])        ? (string) $data['value']        : null
        );
    }
}