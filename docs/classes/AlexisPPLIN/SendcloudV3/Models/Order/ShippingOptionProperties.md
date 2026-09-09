# ShippingOptionProperties

Contains the required properties to be sent when API client informs the shipping method and carrier to be used

***

* Full name: `\AlexisPPLIN\SendcloudV3\Models\Order\ShippingOptionProperties`
* This class implements:
  [`\AlexisPPLIN\SendcloudV3\Models\ModelInterface`](../ModelInterface.md)

**See Also:**

* https://sendcloud.dev/api/v3/orders/retrieve-an-order#response-data-shipping-details-ship-with-properties

## Properties

### shipping_option_code

```php
public ?string $shipping_option_code
```

***

### contract_id

```php
public ?int $contract_id
```

***

## Methods

### __construct

```php
public __construct(mixed $shipping_option_code = null, mixed $contract_id = null): mixed
```

**Parameters:**

| Parameter               | Type      | Description                                                                                                                                                                                                                                                                                                                                                   |
|-------------------------|-----------|---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| `$shipping_option_code` | **mixed** | The shipping option that will be or is used for shipping your parcel. A shipping option code can be retrieved from the Create a list of shipping options endpoint.                                                                                                                                                                                            |
| `$contract_id`          | **mixed** | Selected shipping contract. If you haven't specified a contract for shipping your parcel, we will automatically select the default contract for the carrier that matches your shipping option. You can retrieve your contract IDs by using the Retrieve a list of contracts operation. Otherwise, the default direct contract will be automatically selected. |

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
