<?php

declare(strict_types=1);

namespace AlexisPPLIN\SendcloudV3\Endpoints;

use AlexisPPLIN\SendcloudV3\Client;
use AlexisPPLIN\SendcloudV3\Exceptions\SendcloudRequestException;
use AlexisPPLIN\SendcloudV3\Models\AddressValidation\Address;
use AlexisPPLIN\SendcloudV3\Models\AddressValidation\ValidationResponse;
use Throwable;

class AddressValidation extends Client
{
    public const VALIDATIONS_METHOD = [
        'here'
    ];

    /**
     * This address validation endpoint allows you to validate shipping addresses before using them.
     * 
     * By validating addresses in advance, you can ensure that the shipping information is accurate and complete, reducing the risk of delivery issues and improving overall shipping efficiency.
     * 
     * Providing the carrier helps to tailor the address validation process according to specific carrier requirements.
     * 
     * Using additional validation methods can further enhance the accuracy of the address verification.
     * 
     * The default Sendcloud validation, will always be applied, has in 2 steps:
     * 1. checks the address against the carrier limits (e.g. maximum length of the address line, existence of the postal code for the country, etc.). see also {@link https://sendcloud.dev/docs/addresses/address-field-limits#address-field-limits Carrier address limits}.
     * 2. optimizes (washes) the address to fit within the carrier limits. (e.g. deduplication of address lines, abbreviations, etc.)
     *
     * @see https://sendcloud.dev/api/v3/address/validate
     *
     * @param $address Address Washer Request object model
     * @param $carrier_code The code of the carrier to be used for the address validation. Only carriers available to your account can be used.
     * @param array<value-of<self::VALIDATIONS_METHOD>> An array of optional address validation methods to be applied. The default Sendcloud validation will always be applied.
     *
     * @throws SendcloudRequestException
     */
    public function validate(
        Address $address,
        string $carrier_code,
        array $validation_methods = []
    ) : ValidationResponse {
        // Build body parameters

        $body = [
            'address' => $address,
            'carrier_code' => $carrier_code,
            'validation_methods' => $validation_methods
        ];

        try {
            $body = json_encode($body);
            $response = $this->client->post('/addresses/validate', [], $body);

            SendcloudRequestException::fromResponse($response, 200);

            $body = $response->getBody()->getContents();
            $json = json_decode($body, true);

            $response = ValidationResponse::fromData($json);

            return $response;
        } catch (Throwable $throwable) {
            SendcloudRequestException::fromException($throwable);
        }
    }
}