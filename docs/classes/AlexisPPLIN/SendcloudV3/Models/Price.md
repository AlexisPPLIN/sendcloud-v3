# Price

***

* Full name: `\AlexisPPLIN\SendcloudV3\Models\Price`
* This class implements:
  [`\AlexisPPLIN\SendcloudV3\Models\ModelInterface`](./ModelInterface)

## Constants

| Constant     | Visibility | Type | Value                 |
|--------------|------------|------|-----------------------|
| `CURRENCIES` | public     |      | ['EUR', 'GBP', 'USD'] |

## Properties

### value

```php
public float $value
```

***

### currency

```php
public string $currency
```

***

## Methods

### __construct

```php
public __construct(float $value, value-of<self::CURRENCIES> $currency): mixed
```

**Parameters:**

| Parameter   | Type                           | Description |
|-------------|--------------------------------|-------------|
| `$value`    | **float**                      |             |
| `$currency` | **value-of<self::CURRENCIES>** |             |

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
