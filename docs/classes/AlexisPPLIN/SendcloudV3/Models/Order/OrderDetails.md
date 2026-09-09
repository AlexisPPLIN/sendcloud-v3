# OrderDetails

Node for general order information

***

* Full name: `\AlexisPPLIN\SendcloudV3\Models\Order\OrderDetails`
* This class implements:
  [`\AlexisPPLIN\SendcloudV3\Models\ModelInterface`](../ModelInterface.md)

**See Also:**

* https://sendcloud.dev/api/v3/orders/retrieve-an-order#response-data-order-details

## Properties

### integration

```php
public \AlexisPPLIN\SendcloudV3\Models\Order\OrderDetailsIntegration $integration
```

***

### status

```php
public \AlexisPPLIN\SendcloudV3\Models\Status $status
```

***

### order_created_at

```php
public \DateTimeImmutable $order_created_at
```

***

### order_items

```php
public array $order_items
```

***

### order_updated_at

```php
public ?\DateTimeImmutable $order_updated_at
```

***

### notes

```php
public ?string $notes
```

***

### tags

```php
public ?array $tags
```

***

## Methods

### __construct

```php
public __construct(mixed $integration, mixed $status, mixed $order_created_at, \AlexisPPLIN\SendcloudV3\Models\Order\OrderItems[] $order_items, mixed $order_updated_at = null, mixed $notes = null, string[] $tags = null): mixed
```

**Parameters:**

| Parameter           | Type                                                   | Description                                                                     |
|---------------------|--------------------------------------------------------|---------------------------------------------------------------------------------|
| `$integration`      | **mixed**                                              | Sendcloud Integration object where orders come from                             |
| `$status`           | **mixed**                                              | Order status                                                                    |
| `$order_created_at` | **mixed**                                              | The date and time that the order was placed in the respective shop system       |
| `$order_items`      | **\AlexisPPLIN\SendcloudV3\Models\Order\OrderItems[]** | The list of items that an order contains                                        |
| `$order_updated_at` | **mixed**                                              | The date and time that the order was last updated in the respective shop system |
| `$notes`            | **mixed**                                              | Internal notes or comments placed by consumer on the order                      |
| `$tags`             | **string[]**                                           | Tags assigned to the order                                                      |

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
