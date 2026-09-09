# ShippingDetails

Shipping information

***

* Full name: `\AlexisPPLIN\SendcloudV3\Models\Order\ShippingDetails`
* This class implements:
  [`\AlexisPPLIN\SendcloudV3\Models\ModelInterface`](../ModelInterface.md)

**See Also:**

* https://sendcloud.dev/api/v3/orders/retrieve-an-order#response-data-shipping-details

## Properties

### is_local_pickup

```php
public ?bool $is_local_pickup
```

***

### delivery_indicator

```php
public ?string $delivery_indicator
```

***

### measurement

```php
public ?\AlexisPPLIN\SendcloudV3\Models\Measurement\Measurement $measurement
```

***

### ship_with

```php
public ?\AlexisPPLIN\SendcloudV3\Models\Order\ShipWith $ship_with
```

***

## Methods

### __construct

```php
public __construct(mixed $is_local_pickup = null, mixed $delivery_indicator = null, mixed $measurement = null, mixed $ship_with = null): mixed
```

**Parameters:**

| Parameter             | Type      | Description                                                                                                                                                                                                                                                       |
|-----------------------|-----------|-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| `$is_local_pickup`    | **mixed** | Indicates if customers should collect the order in person from a merchant location                                                                                                                                                                                |
| `$delivery_indicator` | **mixed** | A free text field to indicate how a specific order should be shipped.
- The field is intended for applying the Checkout Delivery Method condition in shipping rules.
- Learn more about shipping rules {@see https://sendcloud.dev/docs/shipping/shipping-rules}. |
| `$measurement`        | **mixed** | Total order measurements                                                                                                                                                                                                                                          |
| `$ship_with`          | **mixed** | The ship with object can be used to define how you would like to send your shipment.
You can use a shipping_option_code. This is a unique identifier that displays what carrier and what set of shipping functionalities you want to use.                         |

***

### fromData

```php
public static fromData(array $data): self
```

* This method is **static**.
**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$data`   | **array** |             |

***

### jsonSerialize

```php
public jsonSerialize(): array
```

***
