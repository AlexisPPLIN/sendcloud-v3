<?php

declare(strict_types=1);

namespace Test\AlexisPPLIN\SendcloudV3;

use InvalidArgumentException;

use Http\Mock\Client;

use Nyholm\Psr7\Response;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\UsesClass;
use PHPUnit\Framework\TestCase;

use AlexisPPLIN\SendcloudV3\Endpoints\AddressValidation;
use AlexisPPLIN\SendcloudV3\Exceptions\SendcloudRequestException;
use AlexisPPLIN\SendcloudV3\Factory\ClientFactory;
use AlexisPPLIN\SendcloudV3\Models\AddressValidation\Address;
use AlexisPPLIN\SendcloudV3\Models\AddressValidation\Analysis;
use AlexisPPLIN\SendcloudV3\Models\AddressValidation\AnalystsValidationResult;
use AlexisPPLIN\SendcloudV3\Models\AddressValidation\ValidationResponse;
use AlexisPPLIN\SendcloudV3\Models\AddressValidation\ValidationResult;
use AlexisPPLIN\SendcloudV3\Utils\DateUtils;
use AlexisPPLIN\SendcloudV3\Utils\JsonUtils;

#[CoversClass(AddressValidation::class)]
#[CoversClass(Address::class)]
#[CoversClass(Analysis::class)]
#[CoversClass(AnalystsValidationResult::class)]
#[CoversClass(ValidationResponse::class)]
#[CoversClass(ValidationResult::class)]
#[UsesClass(Client::class)]
#[UsesClass(ClientFactory::class)]
#[UsesClass(JsonUtils::class)]
#[UsesClass(DateUtils::class)]
#[UsesClass(SendcloudRequestException::class)]
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

    public function testValidateException() : void
    {
        // -- Arrange

        $carrier_code = 'trunkrs';
        $validation_methods = ['here'];
        $json = file_get_contents(__DIR__ . '/errors/400.json');
        $endpoint = $this->getEndpoint($json, 400);

        // -- Act & Assert

        $this->expectException(SendcloudRequestException::class);

        $endpoint->validate(
            $this->address,
            $carrier_code,
            $validation_methods
        );
    }

    public function testValidationResponseJson() : void
    {
        // -- Arrange

        $json = $this->getJson();

        // -- Act

        $actual = json_encode($this->generateValidationResponse());

        // -- Assert

        $this->assertJsonStringEqualsJsonString($json, $actual);
    }
}