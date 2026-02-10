<?php

declare(strict_types=1);

namespace Test\AlexisPPLIN\SendcloudV3;

use AlexisPPLIN\SendcloudV3\Endpoints\Orders;
use AlexisPPLIN\SendcloudV3\Factory\ClientFactory;
use AlexisPPLIN\SendcloudV3\Models\Address;
use AlexisPPLIN\SendcloudV3\Models\Delivery\DeliveryDates;
use AlexisPPLIN\SendcloudV3\Models\Measurement\Measurement;
use AlexisPPLIN\SendcloudV3\Models\Measurement\MeasurementWeight;
use AlexisPPLIN\SendcloudV3\Models\Order\CustomsDetails;
use AlexisPPLIN\SendcloudV3\Models\Order\Order;
use AlexisPPLIN\SendcloudV3\Models\Order\OrderDetails;
use AlexisPPLIN\SendcloudV3\Models\Order\OrderDetailsIntegration;
use AlexisPPLIN\SendcloudV3\Models\Order\OrderItems;
use AlexisPPLIN\SendcloudV3\Models\PaymentDetails;
use AlexisPPLIN\SendcloudV3\Models\Price;
use AlexisPPLIN\SendcloudV3\Models\Status;
use AlexisPPLIN\SendcloudV3\Models\Tax\TaxNumber;
use AlexisPPLIN\SendcloudV3\Models\Tax\TaxNumbers;
use AlexisPPLIN\SendcloudV3\Utils\DateUtils;
use Nyholm\Psr7\Response;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\UsesClass;
use PHPUnit\Framework\TestCase;

use Http\Mock\Client;

#[CoversClass(Orders::class)]
#[CoversClass(Order::class)]
#[CoversClass(DeliveryDates::class)]
#[CoversClass(Measurement::class)]
#[CoversClass(MeasurementWeight::class)]
#[CoversClass(OrderDetails::class)]
#[CoversClass(OrderDetailsIntegration::class)]
#[CoversClass(OrderItems::class)]
#[CoversClass(Price::class)]
#[CoversClass(DateUtils::class)]
#[CoversClass(Status::class)]
#[CoversClass(PaymentDetails::class)]
#[CoversClass(CustomsDetails::class)]
#[CoversClass(TaxNumber::class)]
#[CoversClass(TaxNumbers::class)]
#[CoversClass(Address::class)]
#[UsesClass(Client::class)]
#[UsesClass(ClientFactory::class)]
class OrdersTest extends TestCase
{
    private Orders $endpoint;

    public function setUp(): void
    {
        $publicKey = '123456';
        $secretKey = 'abcdef';
        $partnerId = '1';
        $apiBaseUrl = 'https://api.example.com/v3';

        $client = new Client();
        $client->addResponse(new Response(body: <<<JSON
        {
            "data": {
                "id": "669",
                "order_id": "555413",
                "created_at": "2018-02-27T10:00:00.555Z",
                "modified_at": "2018-02-27T10:00:00.555Z",
                "order_number": "OXSDFGHTD-12",
                "order_details": {
                "integration": {
                    "id": 739283
                },
                "status": {
                    "code": "fulfilled",
                    "message": "Fulfilled"
                },
                "order_created_at": "2018-02-27T10:00:00.555Z",
                "order_updated_at": "2018-02-27T10:00:00.555Z",
                "order_items": [
                    {
                    "name": "Cylinder candle",
                    "measurement": {
                        "weight": {
                        "value": 1,
                        "unit": "kg"
                        }
                    },
                    "quantity": 1,
                    "unit_price": {
                        "value": 3.5,
                        "currency": "EUR"
                    },
                    "total_price": {
                        "value": 3.5,
                        "currency": "EUR"
                    },
                    "delivery_dates": {
                        "handover_at": "2022-02-27T10:00:00.555309+00:00",
                        "deliver_at": "2022-03-02T11:50:00.555309+00:00"
                    },
                    "mid_code": "US1234567",
                    "material_content": "100% Cotton",
                    "intended_use": "Personal use"
                    }
                ]
                },
                "payment_details": {
                "is_cash_on_delivery": true,
                "total_price": {
                    "value": 7,
                    "currency": "EUR"
                },
                "status": {
                    "code": "paid",
                    "message": "Order has been paid"
                },
                "discount_granted": {
                    "value": "3.99",
                    "currency": "EUR"
                },
                "insurance_costs": {
                    "value": "9.99",
                    "currency": "EUR"
                },
                "freight_costs": {
                    "value": "5.99",
                    "currency": "EUR"
                },
                "other_costs": {
                    "value": "2.99",
                    "currency": "EUR"
                }
                },
                "customs_details": {
                "commercial_invoice_number": "0124-03102022",
                "shipment_type": "commercial_goods",
                "export_type": "commercial_b2c",
                "tax_numbers": {
                    "sender": [
                    {
                        "name": "VAT",
                        "country_code": "NL",
                        "value": "NL987654321B02"
                    }
                    ],
                    "receiver": [
                    {
                        "name": "VAT",
                        "country_code": "DE",
                        "value": "DE123456789B03"
                    }
                    ],
                    "importer_of_record": [
                    {
                        "name": "VAT",
                        "country_code": "NL",
                        "value": "NL975318642B01"
                    }
                    ]
                }
                },
                "shipping_address": {
                    "name": "John Doe",
                    "address_line_1": "Stadhuisplein",
                    "house_number": "15",
                    "postal_code": "5341TW",
                    "city": "Oss",
                    "country_code": "NL"
                }
            }
        }
        JSON));

        $this->endpoint = new Orders(
            $publicKey,
            $secretKey,
            $partnerId,
            $apiBaseUrl,
            $client
        );
    }

    public function testGetOrder() : void
    {
        // -- Arrange

        $order_id = 1;
        $expected = new Order(
            id: '669',
            order_id: '555413',
            created_at: DateUtils::iso8601ToDateTime('2018-02-27T10:00:00.555Z'),
            modified_at: DateUtils::iso8601ToDateTime('2018-02-27T10:00:00.555Z'),
            order_number: 'OXSDFGHTD-12',
            order_details: new OrderDetails(
                integration: new OrderDetailsIntegration(
                    id: 739283
                ),
                status: new Status(
                    code: 'fulfilled',
                    message: 'Fulfilled'
                ),
                order_created_at: DateUtils::iso8601ToDateTime('2018-02-27T10:00:00.555Z'),
                order_updated_at: DateUtils::iso8601ToDateTime('2018-02-27T10:00:00.555Z'),
                order_items: [
                    new OrderItems(
                        name: 'Cylinder candle',
                        quantity: 1,
                        measurement: new Measurement(
                            weight: new MeasurementWeight(
                                value: 1,
                                unit: 'kg'
                            )
                        ),
                        unit_price: new Price(
                            value: 3.5,
                            currency: 'EUR'
                        ),
                        total_price: new Price(
                            value: 3.5,
                            currency: 'EUR'
                        ),
                        delivery_dates: new DeliveryDates(
                            handover_at: DateUtils::iso8601ToDateTime('2022-02-27T10:00:00.555309+00:00'),
                            deliver_at: DateUtils::iso8601ToDateTime('2022-03-02T11:50:00.555309+00:00'),
                        ),
                        mid_code: 'US1234567',
                        material_content: '100% Cotton',
                        intended_use: 'Personal use',
                    )
                ],
                notes: ''
            ),
            payment_details: new PaymentDetails(
                is_cash_on_delivery: true,
                total_price: new Price(
                    value: 7,
                    currency: 'EUR'
                ),
                status: new Status(
                    code: 'paid',
                    message: 'Order has been paid'
                ),
                discount_granted: new Price(
                    value: 3.99,
                    currency: 'EUR'
                ),
                insurance_costs: new Price(
                    value: 9.99,
                    currency: 'EUR'
                ),
                freight_costs: new Price(
                    value: 5.99,
                    currency: 'EUR'
                ),
                other_costs: new Price(
                    value: 2.99,
                    currency: 'EUR'
                ),
            ),
            customs_details: new CustomsDetails(
                commercial_invoice_number: '0124-03102022',
                shipment_type: 'commercial_goods',
                export_type: 'commercial_b2c',
                tax_numbers: new TaxNumbers(
                    sender: [
                        new TaxNumber(
                            name: 'VAT',
                            country_code: 'NL',
                            value: 'NL987654321B02'
                        )
                    ],
                    receiver: [
                        new TaxNumber(
                            name: 'VAT',
                            country_code: 'DE',
                            value: 'DE123456789B03'
                        )
                    ],
                    importer_of_record: [
                        new TaxNumber(
                            name: 'VAT',
                            country_code: 'NL',
                            value: 'NL975318642B01'
                        )
                    ]
                )
            ),
            shipping_address: new Address(
                name: 'John Doe',
                address_line_1: 'Stadhuisplein',
                house_number: '15',
                postal_code: '5341TW',
                city: 'Oss',
                country_code: 'NL'
            )
        );

        // -- Act

        $order = $this->endpoint->getOrder($order_id);

        // -- Assert

        $this->assertInstanceOf(Order::class, $order);
        $this->assertEquals($expected, $order);
    }
}