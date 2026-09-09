# MeasurementDimension

Dimension in the specified unit

***

* Full name: `\AlexisPPLIN\SendcloudV3\Models\Measurement\MeasurementDimension`
* This class implements:
  [`\AlexisPPLIN\SendcloudV3\Models\ModelInterface`](../ModelInterface.md)

**See Also:**

* https://sendcloud.dev/api/v3/orders/retrieve-an-order#response-data-order-details-order-items-items-measurement-dimension

## Constants

| Constant | Visibility | Type | Value                               |
|----------|------------|------|-------------------------------------|
| `UNITS`  | public     |      | ['cm', 'mm', 'm', 'yd', 'ft', 'in'] |

## Properties

### length

```php
public float $length
```

***

### width

```php
public float $width
```

***

### height

```php
public float $height
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
public __construct(float $length, float $width, float $height, value-of<self::UNITS> $unit): mixed
```

**Parameters:**

| Parameter | Type                      | Description              |
|-----------|---------------------------|--------------------------|
| `$length` | **float**                 | length in specified unit |
| `$width`  | **float**                 | width in specified unit  |
| `$height` | **float**                 | height in specified unit |
| `$unit`   | **value-of<self::UNITS>** |                          |

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
