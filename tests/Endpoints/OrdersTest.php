<?php

declare(strict_types=1);

namespace Test\AlexisPPLIN\SendcloudV3;

use Http\Discovery\Exception\NotFoundException;
use AlexisPPLIN\SendcloudV3\Endpoints\Orders;
use AlexisPPLIN\SendcloudV3\Exceptions\DateParsingException;
use AlexisPPLIN\SendcloudV3\Exceptions\SendcloudRequestException;
use AlexisPPLIN\SendcloudV3\Factory\ClientFactory;
use AlexisPPLIN\SendcloudV3\Models\Address;
use AlexisPPLIN\SendcloudV3\Models\Customer\CustomerDetails;
use AlexisPPLIN\SendcloudV3\Models\DangerousGoods;
use AlexisPPLIN\SendcloudV3\Models\Delivery\DeliveryDates;
use AlexisPPLIN\SendcloudV3\Models\Measurement\Measurement;
use AlexisPPLIN\SendcloudV3\Models\Measurement\MeasurementDimension;
use AlexisPPLIN\SendcloudV3\Models\Measurement\MeasurementVolume;
use AlexisPPLIN\SendcloudV3\Models\Measurement\MeasurementWeight;
use AlexisPPLIN\SendcloudV3\Models\Order\CustomsDetails;
use AlexisPPLIN\SendcloudV3\Models\Order\Order;
use AlexisPPLIN\SendcloudV3\Models\Order\OrderDetails;
use AlexisPPLIN\SendcloudV3\Models\Order\OrderDetailsIntegration;
use AlexisPPLIN\SendcloudV3\Models\Order\OrderItems;
use AlexisPPLIN\SendcloudV3\Models\Order\ShippingDetails;
use AlexisPPLIN\SendcloudV3\Models\Order\ShippingOptionProperties;
use AlexisPPLIN\SendcloudV3\Models\Order\ShipWith;
use AlexisPPLIN\SendcloudV3\Models\PaymentDetails;
use AlexisPPLIN\SendcloudV3\Models\Price;
use AlexisPPLIN\SendcloudV3\Models\ServicePoint\ServicePoint;
use AlexisPPLIN\SendcloudV3\Models\Status;
use AlexisPPLIN\SendcloudV3\Models\Tax\TaxNumber;
use AlexisPPLIN\SendcloudV3\Models\Tax\TaxNumbers;
use AlexisPPLIN\SendcloudV3\Utils\DateUtils;
use AlexisPPLIN\SendcloudV3\Utils\JsonUtils;
use InvalidArgumentException;
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
#[CoversClass(MeasurementDimension::class)]
#[CoversClass(MeasurementVolume::class)]
#[CoversClass(OrderDetails::class)]
#[CoversClass(OrderDetailsIntegration::class)]
#[CoversClass(OrderItems::class)]
#[CoversClass(Price::class)]
#[CoversClass(Status::class)]
#[CoversClass(PaymentDetails::class)]
#[CoversClass(CustomsDetails::class)]
#[CoversClass(TaxNumber::class)]
#[CoversClass(TaxNumbers::class)]
#[CoversClass(Address::class)]
#[CoversClass(CustomerDetails::class)]
#[CoversClass(ShipWith::class)]
#[CoversClass(ShippingDetails::class)]
#[CoversClass(ShippingOptionProperties::class)]
#[CoversClass(ServicePoint::class)]
#[CoversClass(DangerousGoods::class)]
#[UsesClass(Client::class)]
#[UsesClass(ClientFactory::class)]
#[UsesClass(JsonUtils::class)]
#[UsesClass(DateUtils::class)]
#[UsesClass(SendcloudRequestException::class)]
class OrdersTest extends TestCase
{
    private Order $order;

    /**
     * @throws NotFoundException
     * @throws InvalidArgumentException
     */
    private function getJson(bool $one_order) : string
    {
        $json = file_get_contents(__DIR__ . '/orders.json');

        if ($one_order) {
            $json = <<<EOF
            {
                "data": {$json}
            }
            EOF;
        } else {
            $json = <<<EOF
            {
                "data": [{$json}]
            }
            EOF;
        }
        
        return $json;
    }

    public function getEndpoint(string $body, int $status = 200) : Orders
    {
        $client = new Client();
        $client->addResponse(new Response(status: $status, body: $body));

        $publicKey = '123456';
        $secretKey = 'abcdef';
        $partnerId = '1';
        $apiBaseUrl = 'https://api.example.com/v3';

        return new Orders(
            $publicKey,
            $secretKey,
            $partnerId,
            $apiBaseUrl,
            $client
        );
    }

    private function generateOrder(bool $with_id = true) : Order
    {
        return new Order(
            id: $with_id ? '752417284' : null,
            order_id: '7bdd5bfd-76bc-4654-9d40-5d5d49f1cd6c',
            order_number: '101170081',
            created_at: DateUtils::iso8601ToDateTime('2026-02-09T16:00:17.040454+00:00'),
            modified_at: DateUtils::iso8601ToDateTime('2026-02-09T16:00:17.111586+00:00'),
            order_details: new OrderDetails(
                integration: new OrderDetailsIntegration(
                    id: 1
                ),
                status: new Status(
                    code: 'fulfilled',
                    message: 'Order has been fulfilled'
                ),
                order_created_at: DateUtils::iso8601ToDateTime('2026-02-09T10:00:00.556000+00:00'),
                order_updated_at: DateUtils::iso8601ToDateTime('2018-02-27T10:00:00.555309+00:00'),
                order_items: [
                    new OrderItems(
                        item_id: '5552',
                        name: 'Cylinder candle',
                        description: 'Pebble green - 12x8 cm',
                        product_id: '1458734634',
                        variant_id: '15346645',
                        image_url: 'https://i.ibb.co/6tLZ2Jz/orange.jpeg',
                        measurement: new Measurement(
                            dimension: new MeasurementDimension(
                                length: 15.0,
                                width: 20.5,
                                height: 37.0,
                                unit: 'cm'
                            ),
                            weight: new MeasurementWeight(
                                value: 14.5,
                                unit: 'kg'
                            ),
                            volume: new MeasurementVolume(
                                value: 5,
                                unit: 'l'
                            )
                        ),
                        quantity: 1,
                        sku: 'WW-DR-GR-XS-001',
                        hs_code: '6205.20',
                        ean: '0799439112766',
                        properties: [
                            'size' => 'red',
                            'color' => 'green',
                        ],
                        country_of_origin: 'NL',
                        total_price: new Price(
                            value: 3.5,
                            currency: 'EUR'
                        ),
                        unit_price: new Price(
                            value: 3.5,
                            currency: 'EUR'
                        ),
                        delivery_dates: new DeliveryDates(
                            handover_at: DateUtils::iso8601ToDateTime('2025-02-27T10:00:00.555309+00:00'),
                            deliver_at: DateUtils::iso8601ToDateTime('2025-03-15T10:00:00.555309+00:00'),
                        ),
                        mid_code: 'NLOZR92MEL',
                        material_content: '100% Cotton',
                        intended_use: 'Personal use',
                        dangerous_goods: new DangerousGoods(
                            chemical_record_identifier: '1',
                            regulation_set: 'IATA',
                            packaging_type_quantity: 'type',
                            id_number: '123456',
                            class_division_number: '42',
                            quantity: '1',
                            unit_of_measurement: 'kg',
                            proper_shipping_name: 'product',
                            commodity_regulated_level_code: 'LQ',
                            transportation_mode: 'Highway',
                            emergency_contact_name: 'John Doe',
                            emergency_contact_phone: '+319881729999',
                            adr_packing_group_letter: 'I',
                            local_proper_shipping_name: 'shipping',
                            transport_category: 'transport',
                            tunnel_restriction_code: 'tunnel',
                            weight_type: 'net',
                        )
                    )
                ],
                notes: 'Call this number before delivery: 063 874 6473',
                tags: [
                    'fragile',
                    'countryside warehouse'
                ]
            ),
            payment_details: new PaymentDetails(
                subtotal_price: new Price(
                    value: 3.5,
                    currency: 'EUR'
                ),
                estimated_shipping_price: new Price(
                    value: 3.5,
                    currency: 'EUR'
                ),
                estimated_tax_price: new Price(
                    value: 3.5,
                    currency: 'EUR'
                ),
                total_price: new Price(
                    value: 3.5,
                    currency: 'EUR'
                ),
                status: new Status(
                    code: 'paid',
                    message: 'Paid'
                ),
                invoice_date: '2018-07-14',
                discount_granted: new Price(
                    value: 3.5,
                    currency: 'EUR'
                ),
                insurance_costs: new Price(
                    value: 3.5,
                    currency: 'EUR'
                ),
                freight_costs: new Price(
                    value: 3.5,
                    currency: 'EUR'
                ),
                other_costs: new Price(
                    value: 3.5,
                    currency: 'EUR'
                ),
                is_cash_on_delivery: true
            ),
            customs_details: new CustomsDetails(
                commercial_invoice_number: '1002404102022',
                shipment_type: 'commercial_goods',
                export_type: 'private',
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
                            country_code: 'NL',
                            value: 'NL987654321B02'
                        )
                    ],
                    importer_of_record: [
                        new TaxNumber(
                            name: 'VAT',
                            country_code: 'NL',
                            value: 'NL987654321B02'
                        )
                    ]
                )
            ),
            customer_details: new CustomerDetails(
                name: 'John Doe',
                phone_number: '+319881729999',
                email: 'john@doe.com'
            ),
            billing_address: new Address(
                name: 'John Doe',
                address_line_1: 'Lansdown Glade',
                address_line_2: 'a',
                house_number: '15',
                postal_code: '5341XT',
                city: 'Oss',
                country_code: 'NL',
                email: 'johndoe@gmail.com',
                phone_number: '+319881729999'
            ),
            shipping_address: new Address(
                name: 'John Doe',
                address_line_1: 'Lansdown Glade',
                address_line_2: 'a',
                house_number: '15',
                postal_code: '5341XT',
                city: 'Oss',
                country_code: 'NL',
                email: 'johndoe@gmail.com',
                phone_number: '+319881729999'
            ),
            shipping_details: new ShippingDetails(
                is_local_pickup: true,
                delivery_indicator: 'DHL Home Delivery',
                measurement: new Measurement(
                    dimension: new MeasurementDimension(
                        length: 15.0,
                        width: 20.5,
                        height: 37.0,
                        unit: 'cm'
                    ),
                    weight: new MeasurementWeight(
                        value: 14.5,
                        unit: 'kg'
                    ),
                    volume: new MeasurementVolume(
                        value: 5,
                        unit: 'l'
                    )
                ),
                ship_with: new ShipWith(
                    type: 'shipping_option_code',
                    properties: new ShippingOptionProperties(
                        shipping_option_code: 'postnl:standard'
                    )
                )
            ),
            service_point_details: new ServicePoint(
                id: '123',
                post_number: 'some-post-number',
                latitude: '51.427063',
                longitude: '5.486414',
                type: 'packstation',
                extra_data: (object) [
                    'test' => 'test'
                ]
            )
        );
    }

    /**
     * @throws DateParsingException
     */
    protected function setUp(): void
    {
        $this->order = $this->generateOrder();
    }

    /* getOrder */

    public function testGetOrder() : void
    {
        // -- Arrange

        $order_id = 1;
        $expected = $this->order;

        $json = $this->getJson(true);
        $endpoint = $this->getEndpoint($json, 200);

        // -- Act

        $actual = $endpoint->getOrder($order_id);

        // -- Assert

        $this->assertInstanceOf(Order::class, $actual);
        $this->assertEquals($expected, $actual);
    }

    public function testGetOrderException() : void
    {
        // -- Arrange

        $json = file_get_contents(__DIR__ . '/errors/400.json');
        $endpoint = $this->getEndpoint($json, 400);

        // -- Act & Assert

        $this->expectException(SendcloudRequestException::class);

        $endpoint->getOrder(1);
    }

    public function testOrderJson() : void
    {
        // -- Arrange

        $json = $this->getJson(true);

        // -- Act

        $actual = json_encode(['data' => $this->order]);

        // -- Assert

        $this->assertJsonStringEqualsJsonString($json, $actual);
    }

    /* getOrders */

    public function testGetOrders() : void
    {
        // -- Arrange

        $json = $this->getJson(false);
        $endpoint = $this->getEndpoint($json, 200);
        $expected = [$this->order];

        // -- Act

        $actual = $endpoint->getOrders(
            integration: [1],
            order_number: '1',
            order_id: '1',
            status: '1',
            order_created_at: '1',
            order_created_at_min: '1',
            order_created_at_max: '1',
            order_updated_at: '1',
            order_updated_at_min: '1',
            order_updated_at_max: '1',
            sort: '1',
            page_size: 1,
            cursor: '1',
        );

        // -- Assert

        $this->assertEquals($expected, $actual);
    }

    public function testGetOrdersException() : void
    {
        // -- Arrange

        $json = file_get_contents(__DIR__ . '/errors/400.json');
        $endpoint = $this->getEndpoint($json, 400);

        // -- Act & Assert

        $this->expectException(SendcloudRequestException::class);

        $endpoint->getOrders();
    }

    /* updateOrder */

    public function testUpdateOrder() : void
    {
        // -- Arrange

        $expected = 669;
        $json = <<<JSON
        {
            "data": {
                "id": {$expected},
                "order_id": "555413",
                "order_number": "OXSDFGHTD-12"
            }
        }
        JSON;
        $endpoint = $this->getEndpoint($json, 200);

        // -- Act

        $result = $endpoint->updateOrder($this->order);

        // -- Assert

        $this->assertEquals($expected, $result);
    }

    public function testUpdateOrderException() : void
    {
        // -- Arrange

        $json = file_get_contents(__DIR__ . '/errors/400.json');
        $endpoint = $this->getEndpoint($json, 400);

        // -- Act & Assert

        $this->expectException(SendcloudRequestException::class);

        $endpoint->updateOrder($this->order);
    }

    public function testUpdateOrderWithNullId() : void
    {
        // -- Arrange

        $json = file_get_contents(__DIR__ . '/errors/400.json');
        $endpoint = $this->getEndpoint($json, 400);

        $order = $this->generateOrder(false);

        // -- Act & Assert

        $this->expectException(InvalidArgumentException::class);

        $endpoint->updateOrder($order);
    }

    /* createOrder */

    public function testCreateOrder() : void
    {
        // -- Arrange

        $expected = [669];
        $json = <<<JSON
        {
            "data": [
                {
                    "id": {$expected[0]},
                    "order_id": "555413",
                    "order_number": "OXSDFGHTD-12"
                }
            ]
        }
        JSON;
        $endpoint = $this->getEndpoint($json, 201);

        // -- Act

        $result = $endpoint->createOrder([
            $this->order
        ]);

        // -- Assert

        $this->assertEquals($expected, $result);
    }

    public function testCreateOrderException() : void
    {
        // -- Arrange

        $json = file_get_contents(__DIR__ . '/errors/400.json');
        $endpoint = $this->getEndpoint($json, 400);

        // -- Act & Assert

        $this->expectException(SendcloudRequestException::class);

        $endpoint->createOrder([
            $this->order
        ]);
    }

    /* deleteOrder */

    public function testDeleteOrder() : void
    {
        // -- Arrange

        $order_id = 1;
        $endpoint = $this->getEndpoint('', 204);

        // -- Act & Assert

        $endpoint->deleteOrder($order_id);

        $this->expectNotToPerformAssertions();
    }

    public function testDeleteOrderException() : void
    {
        // -- Arrange

        $order_id = 1;

        $json = file_get_contents(__DIR__ . '/errors/400.json');
        $endpoint = $this->getEndpoint($json, 400);

        // -- Act & Assert

        $this->expectException(SendcloudRequestException::class);

        $endpoint->deleteOrder($order_id);
    }
}