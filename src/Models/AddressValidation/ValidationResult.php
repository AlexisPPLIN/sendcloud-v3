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
class ValidationResult implements ModelInterface
{
    /**
     * @param $recommended Indicates if the address is recommended after validation.
     * @param $address The validated address details. In case null is returned, the address is not valid and the details are not available (f.e.the address validator is not available).
     * @param ?value-of<AddressValidation::VALIDATIONS_METHOD> $validation_method The method used for address validation, null stands for the Sendcloud address carrier optimizer validation method.
     * @param $analysis Analysis details of the address validation process. In case null is returned no analysis details are available.
     */
    public function __construct(
        public readonly bool $recommended,
        public readonly ?Address $address = null,
        public readonly ?string $validation_method = null,
        public readonly ?Analysis $analysis = null
    ) {

    }

    public static function fromData(array $data) : self
    {
        return new self(
            recommended:              (bool) $data['recommended'],
            address:                  isset($data['address'])           ? Address::fromData($data['address'])   : null,
            validation_method:        isset($data['validation_method']) ? (string) $data['validation_method']   : null,
            analysis:                 isset($data['analysis'])          ? Analysis::fromData($data['analysis']) : null,
        );
    }

    public function jsonSerialize(): array
    {
        $json = [
            'recommended' => $this->recommended
        ];

        JsonUtils::addIfNotNull($json, 'address', $this->address);
        JsonUtils::addIfNotNull($json, 'validation_method', $this->validation_method);
        JsonUtils::addIfNotNull($json, 'analysis', $this->analysis);

        return $json;
    }
}