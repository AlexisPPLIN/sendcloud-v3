# ValidationResponse

Address validation successful

***

* Full name: `\AlexisPPLIN\SendcloudV3\Models\AddressValidation\ValidationResponse`
* This class implements:
  [`\AlexisPPLIN\SendcloudV3\Models\ModelInterface`](../ModelInterface.md)

**See Also:**

* https://sendcloud.dev/api/v3/address/validate#response-input-address-is-valid-one-of-0

## Properties

### results

```php
public array $results
```

***

### input_address_is_valid

```php
public ?bool $input_address_is_valid
```

***

## Methods

### __construct

```php
public __construct(\AlexisPPLIN\SendcloudV3\Models\AddressValidation\ValidationResult[] $results, mixed $input_address_is_valid = null): mixed
```

**Parameters:**

| Parameter                 | Type                                                                     | Description                                                                                                                                                                 |
|---------------------------|--------------------------------------------------------------------------|-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| `$results`                | **\AlexisPPLIN\SendcloudV3\Models\AddressValidation\ValidationResult[]** | The results of the address validation.                                                                                                                                      |
| `$input_address_is_valid` | **mixed**                                                                | Indicates if the input address is valid. In case null is returned, the address is not valid and the details are not available (f.e.the address validator is not available). |

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
