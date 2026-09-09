# AnalystsValidationResult

The result of the validation process.

***

* Full name: `\AlexisPPLIN\SendcloudV3\Models\AddressValidation\AnalystsValidationResult`
* This class implements:
  [`\AlexisPPLIN\SendcloudV3\Models\ModelInterface`](../ModelInterface.md)

## Properties

### is_valid

```php
public bool $is_valid
```

***

### reasons

```php
public array $reasons
```

***

## Methods

### __construct

```php
public __construct(mixed $is_valid, string[] $reasons): mixed
```

**Parameters:**

| Parameter   | Type         | Description                                |
|-------------|--------------|--------------------------------------------|
| `$is_valid` | **mixed**    | Indicates if the address is valid.         |
| `$reasons`  | **string[]** | List of reasons for the validation result. |

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
