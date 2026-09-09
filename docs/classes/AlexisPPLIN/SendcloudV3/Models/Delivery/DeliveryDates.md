# DeliveryDates

Defined delivery dates

***

* Full name: `\AlexisPPLIN\SendcloudV3\Models\Delivery\DeliveryDates`
* This class implements:
  [`\AlexisPPLIN\SendcloudV3\Models\ModelInterface`](../ModelInterface.md)

**See Also:**

* https://sendcloud.dev/api/v3/orders/retrieve-an-order#response-data-order-details-order-items-items-delivery-dates

## Properties

### handover_at

```php
public ?\DateTimeImmutable $handover_at
```

***

### deliver_at

```php
public ?\DateTimeImmutable $deliver_at
```

***

## Methods

### __construct

```php
public __construct(?\DateTimeImmutable $handover_at = null, ?\DateTimeImmutable $deliver_at = null): mixed
```

**Parameters:**

| Parameter      | Type                    | Description                                                               |
|----------------|-------------------------|---------------------------------------------------------------------------|
| `$handover_at` | **?\DateTimeImmutable** | The date when the item will be handed over to the carrier by the merchant |
| `$deliver_at`  | **?\DateTimeImmutable** | The date when the order should reach the end customer                     |

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
