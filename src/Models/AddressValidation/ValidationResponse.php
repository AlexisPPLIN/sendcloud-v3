<?php

declare(strict_types=1);

namespace AlexisPPLIN\SendcloudV3\Models\AddressValidation;

use AlexisPPLIN\SendcloudV3\Models\ModelInterface;
use AlexisPPLIN\SendcloudV3\Utils\JsonUtils;

/**
 * Address validation successful
 *
 * @see https://sendcloud.dev/api/v3/address/validate#response-input-address-is-valid-one-of-0
 */
class ValidationResponse implements ModelInterface
{
    /**
     * @param array<ValidationResult> $results The results of the address validation.
     * @param $input_address_is_valid Indicates if the input address is valid. In case null is returned, the address is not valid and the details are not available (f.e.the address validator is not available).
     */
    public function __construct(
        public readonly array $results,
        public readonly ?bool $input_address_is_valid = null
    ) {

    }

    public static function fromData(array $data) : self
    {
        $results = [];

        foreach ($data['results'] as $row) {
            $results[] = ValidationResult::fromData($row);
        }

        return new self(
            results: $results,
            input_address_is_valid: isset($data['input_address_is_valid']) ? (bool) $data['input_address_is_valid'] : null
        );
    }

    public function jsonSerialize(): array
    {
        $json = [
            'results' => $this->results
        ];

        JsonUtils::addIfNotNull($json, 'input_address_is_valid', $this->input_address_is_valid);

        return $json;
    }
}