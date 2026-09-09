# ServicePoint

***

* Full name: `\AlexisPPLIN\SendcloudV3\Models\ServicePoint\ServicePoint`
* This class implements:
  [`\AlexisPPLIN\SendcloudV3\Models\ModelInterface`](../ModelInterface.md)

## Properties

### id

```php
public string $id
```

***

### post_number

```php
public ?string $post_number
```

***

### latitude

```php
public ?string $latitude
```

***

### longitude

```php
public ?string $longitude
```

***

### type

```php
public ?string $type
```

***

### extra_data

```php
public ?object $extra_data
```

***

## Methods

### __construct

```php
public __construct(string $id, ?string $post_number = null, ?string $latitude = null, ?string $longitude = null, ?string $type = null, ?object $extra_data = null): mixed
```

**Parameters:**

| Parameter      | Type        | Description |
|----------------|-------------|-------------|
| `$id`          | **string**  |             |
| `$post_number` | **?string** |             |
| `$latitude`    | **?string** |             |
| `$longitude`   | **?string** |             |
| `$type`        | **?string** |             |
| `$extra_data`  | **?object** |             |

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
