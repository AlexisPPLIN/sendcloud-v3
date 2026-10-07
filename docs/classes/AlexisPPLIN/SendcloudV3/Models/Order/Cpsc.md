# Cpsc

***

* Full name: `\AlexisPPLIN\SendcloudV3\Models\Order\Cpsc`
* This class implements:
  [`\AlexisPPLIN\SendcloudV3\Models\ModelInterface`](../ModelInterface.md)

**See Also:**

* https://sendcloud.dev/api/v3/orders/create-update-orders-in-batch#body-items-order-details-order-items-items-cpsc-one-of-1

## Properties

### product_id

```php
public string $product_id
```

***

### certifier_id

```php
public string $certifier_id
```

***

### version_id

```php
public string $version_id
```

***

## Methods

### __construct

```php
public __construct(mixed $product_id, mixed $certifier_id, mixed $version_id): mixed
```

**Parameters:**

| Parameter       | Type      | Description                          |
|-----------------|-----------|--------------------------------------|
| `$product_id`   | **mixed** | CPSC product identifier.             |
| `$certifier_id` | **mixed** | CPSC certifier identifier.           |
| `$version_id`   | **mixed** | CPSC certificate version identifier. |

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
