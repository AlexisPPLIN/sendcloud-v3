<?php

declare(strict_types=1);

namespace AlexisPPLIN\SendcloudV3\Models\AddressValidation;

use AlexisPPLIN\SendcloudV3\Models\ModelInterface;
use AlexisPPLIN\SendcloudV3\Utils\JsonUtils;

/**
 * Analysis details of the address validation process.
 *
 * @see https://sendcloud.dev/api/v3/address/validate#response-results-items-analysis-one-of-0
 */
class Analysis implements ModelInterface
{
    /**
     * @param $validation_result The result of the validation process.
     * @param array<string> $changed_attributes List of changed attributes.
     * @param array<string> $invalid_attributes List of attributes that are invalid (i.e. below the field-level validation threshold).
     */
    public function __construct(
        public readonly AnalystsValidationResult $validation_result,
        public readonly array $changed_attributes,
        public readonly array $invalid_attributes,
    ) {

    }

    public static function fromData(array $data) : self
    {
        return new self(
            validation_result:  AnalystsValidationResult::fromData($data['validation_result']),
            changed_attributes: $data['changed_attributes'],
            invalid_attributes: $data['invalid_attributes']
        );
    }

    public function jsonSerialize(): array
    {
        $json = [
            'validation_result' => $this->validation_result,
            'changed_attributes' => $this->changed_attributes,
            'invalid_attributes' => $this->invalid_attributes
        ];

        return $json;
    }
}