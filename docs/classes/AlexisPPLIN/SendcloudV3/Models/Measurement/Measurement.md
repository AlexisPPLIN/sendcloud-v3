# Measurement

This object provides essential information for accurate packing, shipping, and inventory management

***

* Full name: `\AlexisPPLIN\SendcloudV3\Models\Measurement\Measurement`
* This class implements:
  [`\AlexisPPLIN\SendcloudV3\Models\ModelInterface`](../ModelInterface.md)

**See Also:**

* https://sendcloud.dev/api/v3/orders/retrieve-an-order#response-data-order-details-order-items-items-measurement

## Properties

### dimension

```php
public ?\AlexisPPLIN\SendcloudV3\Models\Measurement\MeasurementDimension $dimension
```

***

### weight

```php
public ?\AlexisPPLIN\SendcloudV3\Models\Measurement\MeasurementWeight $weight
```

***

### volume

```php
public ?\AlexisPPLIN\SendcloudV3\Models\Measurement\MeasurementVolume $volume
```

***

## Methods

### __construct

```php
public __construct(?\AlexisPPLIN\SendcloudV3\Models\Measurement\MeasurementDimension $dimension = null, ?\AlexisPPLIN\SendcloudV3\Models\Measurement\MeasurementWeight $weight = null, ?\AlexisPPLIN\SendcloudV3\Models\Measurement\MeasurementVolume $volume = null): mixed
```

**Parameters:**

| Parameter    | Type                                                                  | Description |
|--------------|-----------------------------------------------------------------------|-------------|
| `$dimension` | **?\AlexisPPLIN\SendcloudV3\Models\Measurement\MeasurementDimension** |             |
| `$weight`    | **?\AlexisPPLIN\SendcloudV3\Models\Measurement\MeasurementWeight**    |             |
| `$volume`    | **?\AlexisPPLIN\SendcloudV3\Models\Measurement\MeasurementVolume**    |             |

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
