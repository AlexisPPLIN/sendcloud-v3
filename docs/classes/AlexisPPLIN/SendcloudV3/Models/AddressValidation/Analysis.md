# Analysis

Analysis details of the address validation process.

***

* Full name: `\AlexisPPLIN\SendcloudV3\Models\AddressValidation\Analysis`
* This class implements:
  [`\AlexisPPLIN\SendcloudV3\Models\ModelInterface`](../ModelInterface.md)

**See Also:**

* https://sendcloud.dev/api/v3/address/validate#response-results-items-analysis-one-of-0

## Properties

### validation_result

```php
public \AlexisPPLIN\SendcloudV3\Models\AddressValidation\AnalystsValidationResult $validation_result
```

***

### changed_attributes

```php
public array $changed_attributes
```

***

### invalid_attributes

```php
public array $invalid_attributes
```

***

## Methods

### __construct

```php
public __construct(mixed $validation_result, string[] $changed_attributes, string[] $invalid_attributes): mixed
```

**Parameters:**

| Parameter             | Type         | Description                                                                            |
|-----------------------|--------------|----------------------------------------------------------------------------------------|
| `$validation_result`  | **mixed**    | The result of the validation process.                                                  |
| `$changed_attributes` | **string[]** | List of changed attributes.                                                            |
| `$invalid_attributes` | **string[]** | List of attributes that are invalid (i.e. below the field-level validation threshold). |

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
