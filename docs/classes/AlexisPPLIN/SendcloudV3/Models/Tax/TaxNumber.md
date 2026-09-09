# TaxNumber

***

* Full name: `\AlexisPPLIN\SendcloudV3\Models\Tax\TaxNumber`
* This class implements:
  [`\AlexisPPLIN\SendcloudV3\Models\ModelInterface`](../ModelInterface.md)

## Properties

### name

```php
public ?string $name
```

***

### country_code

```php
public ?string $country_code
```

***

### value

```php
public ?string $value
```

***

## Methods

### __construct

```php
public __construct(?string $name = null, ?string $country_code = null, ?string $value = null): mixed
```

**Parameters:**

| Parameter       | Type        | Description |
|-----------------|-------------|-------------|
| `$name`         | **?string** |             |
| `$country_code` | **?string** |             |
| `$value`        | **?string** |             |

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
