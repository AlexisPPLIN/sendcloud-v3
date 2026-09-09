<?php

declare(strict_types=1);

namespace AlexisPPLIN\SendcloudV3\Models\AddressValidation;

use AlexisPPLIN\SendcloudV3\Models\ModelInterface;
use AlexisPPLIN\SendcloudV3\Utils\JsonUtils;

/**
 * The result of the validation process.
 */
class AnalystsValidationResult implements ModelInterface
{
    /**
     * @param $is_valid Indicates if the address is valid.
     * @param array<string> $reasons List of reasons for the validation result.
     */
    public function __construct(
        public readonly bool $is_valid,
        public readonly array $reasons,
    ) {

    }

    public static function fromData(array $data) : self
    {
        return new self(
            is_valid: (bool) $data['is_valid'],
            reasons:  $data['reasons']
        );
    }

    public function jsonSerialize(): array
    {
        $json = [
            'is_valid' => $this->is_valid,
            'reasons' => $this->reasons,
        ];

        return $json;
    }
}