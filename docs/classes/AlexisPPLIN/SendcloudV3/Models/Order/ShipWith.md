# ShipWith

The ship with object can be used to define how you would like to send your shipment.

You can use a shipping_option_code. This is a unique identifier that displays what carrier and what set of shipping functionalities you want to use.

***

* Full name: `\AlexisPPLIN\SendcloudV3\Models\Order\ShipWith`
* This class implements:
  [`\AlexisPPLIN\SendcloudV3\Models\ModelInterface`](../ModelInterface.md)

**See Also:**

* https://sendcloud.dev/api/v3/orders/retrieve-an-order#response-data-shipping-details-ship-with

## Properties

### type

```php
public string $type
```

***

### properties

```php
public \AlexisPPLIN\SendcloudV3\Models\Order\ShippingOptionProperties $properties
```

***

## Methods

### __construct

```php
public __construct(mixed $type, mixed $properties): mixed
```

**Parameters:**

| Parameter     | Type      | Description                                                                                                    |
|---------------|-----------|----------------------------------------------------------------------------------------------------------------|
| `$type`       | **mixed** | The way the shipping method and carrier will be selected.                                                      |
| `$properties` | **mixed** | Contains the required properties to be sent when API client informs the shipping method and carrier to be used |

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
