# Status

***

* Full name: `\AlexisPPLIN\SendcloudV3\Models\Status`
* This class implements:
  [`\AlexisPPLIN\SendcloudV3\Models\ModelInterface`](./ModelInterface.md)

## Properties

### code

```php
public string $code
```

***

### message

```php
public ?string $message
```

***

## Methods

### __construct

```php
public __construct(string $code, ?string $message = null): mixed
```

**Parameters:**

| Parameter  | Type        | Description |
|------------|-------------|-------------|
| `$code`    | **string**  |             |
| `$message` | **?string** |             |

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
