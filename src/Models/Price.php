<?php

declare(strict_types=1);

namespace AlexisPPLIN\SendcloudV3\Models;

class Price implements ModelInterface
{
    public const CURRENCIES = [
        'EUR',
        'GBP',
        'USD'
    ];

    /**
     * @param value-of<self::CURRENCIES> $currency
     */
    public function __construct(
        public readonly float $value,
        public readonly string $currency,
    ) {

    }

    public static function fromData(array $data) : self
    {
        return new self(
            value: (float) $data['value'],
            currency: (string) $data['currency']
        );
    }

    public function jsonSerialize() : array
    {
        $json = [
            'value' => $this->value,
            'currency' => $this->currency
        ];

        return $json;
    }
}
