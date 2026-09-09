<?php

declare(strict_types=1);

namespace Test\AlexisPPLIN\SendcloudV3;

use AlexisPPLIN\SendcloudV3\Endpoints\AddressValidation;
use AlexisPPLIN\SendcloudV3\Models\AddressValidation\Address;
use AlexisPPLIN\SendcloudV3\Models\AddressValidation\Analysis;
use AlexisPPLIN\SendcloudV3\Models\AddressValidation\AnalystsValidationResult;
use AlexisPPLIN\SendcloudV3\Models\AddressValidation\ValidationResponse;
use AlexisPPLIN\SendcloudV3\Models\AddressValidation\ValidationResult;

use Http\Mock\Client;
use InvalidArgumentException;
use Nyholm\Psr7\Response;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

#[CoversClass(AddressValidation::class)]
class AddressValidationTest extends TestCase
{
    private Address $address;

    /**
     * @throws InvalidArgumentException
     */
    private function getJson() : string
    {
        $json = file_get_contents(__DIR__ . '/address-validation.json');
        
        return $json;
    }

    public function getEndpoint(string $body, int $status = 200) : AddressValidation
    {
        $client = new Client();
        $client->addResponse(new Response(status: $status, body: $body));

        $publicKey = '123456';
        $secretKey = 'abcdef';
        $partnerId = '1';
        $apiBaseUrl = 'https://api.example.com/v3';

        return new AddressValidation(
            $publicKey,
            $secretKey,
            $partnerId,
            $apiBaseUrl,
            $client
        );
    }

    private function generateAddress() : Address
    {
        return new Address(
            address_line_1: 'Stadhuisplein',
            house_number: '50',
            address_line_2: 'Apartment 17B',
            postal_code: '1013 AB',
            city: 'Eindhoven',
            po_box: '<string>',
            state_province_code: 'IT-RM',
            country_code: 'NL'
        );
    }

    private function generateValidationResponse() : ValidationResponse
    {
        return new ValidationResponse(
            input_address_is_valid: true,
            results: [
                new ValidationResult(
                    recommended: true,
                    address: new Address(
                        address_line_1: 'Stadhuisplein',
                        house_number: '50',
                        address_line_2: 'Apartment 17B',
                        postal_code: '1013 AB',
                        city: 'Eindhoven',
                        po_box: '<string>',
                        state_province_code: 'IT-RM',
                        country_code: 'NL'
                    ),
                    validation_method: 'here',
                    analysis: new Analysis(
                        validation_result: new AnalystsValidationResult(
                            is_valid: true,
                            reasons: [
                                'ADDRESS_TOO_LONG'
                            ]
                        ),
                        changed_attributes: [
                            '<string>'
                        ],
                        invalid_attributes: [
                            '<string>'
                        ]
                    )
                )
            ]
        );
    }

    protected function setUp(): void
    {
        $this->address = $this->generateAddress();
    }

    /* validate */

    public function testValidate() : void
    {
        // -- Arrange

        $carrier_code = 'trunkrs';
        $validation_methods = ['here'];

        $json = $this->getJson();
        $endpoint = $this->getEndpoint($json, 200);

        $expected = $this->generateValidationResponse();

        // -- Act

        $actual = $endpoint->validate(
            $this->address,
            $carrier_code,
            $validation_methods
        );

        // -- Assert

        $this->assertInstanceOf(ValidationResponse::class, $actual);
        $this->assertEquals($expected, $actual);
    }
}