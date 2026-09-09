# MeasurementVolume

Volume in the specified unit

***

* Full name: `\AlexisPPLIN\SendcloudV3\Models\Measurement\MeasurementVolume`
* This class implements:
  [`\AlexisPPLIN\SendcloudV3\Models\ModelInterface`](../ModelInterface.md)

**See Also:**

* https://sendcloud.dev/api/v3/orders/retrieve-an-order#response-data-order-details-order-items-items-measurement-volume

## Constants

| Constant | Visibility | Type | Value                           |
|----------|------------|------|---------------------------------|
| `UNITS`  | public     |      | ['m3', 'cm3', 'l', 'ml', 'gal'] |

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
| `$value`  | **float**                 | Volume value |
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
