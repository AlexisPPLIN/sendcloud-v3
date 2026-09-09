# MeasurementWeight

Weight in the specified unit

***

* Full name: `\AlexisPPLIN\SendcloudV3\Models\Measurement\MeasurementWeight`
* This class implements:
  [`\AlexisPPLIN\SendcloudV3\Models\ModelInterface`](../ModelInterface.md)

**See Also:**

* https://sendcloud.dev/api/v3/orders/retrieve-an-order#response-data-order-details-order-items-items-measurement-weight

## Constants

| Constant | Visibility | Type | Value                    |
|----------|------------|------|--------------------------|
| `UNITS`  | public     |      | ['kg', 'g', 'lbs', 'oz'] |

## Properties

### value

```php
public float $value
```

***

### unit

```php
public string $unit
```

***

## Methods

### __construct

```php
public __construct(float $value, value-of<self::UNITS> $unit): mixed
```

**Parameters:**

| Parameter | Type                      | Description  |
|-----------|---------------------------|--------------|
| `$value`  | **float**                 | Weight value |
| `$unit`   | **value-of<self::UNITS>** |              |

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
