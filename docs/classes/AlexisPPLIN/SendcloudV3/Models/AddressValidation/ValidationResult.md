# ValidationResult

Address validation successful

***

* Full name: `\AlexisPPLIN\SendcloudV3\Models\AddressValidation\ValidationResult`
* This class implements:
  [`\AlexisPPLIN\SendcloudV3\Models\ModelInterface`](../ModelInterface.md)

**See Also:**

* https://sendcloud.dev/api/v3/address/validate#response-input-address-is-valid-one-of-0

## Properties

### recommended

```php
public bool $recommended
```

***

### address

```php
public ?\AlexisPPLIN\SendcloudV3\Models\AddressValidation\Address $address
```

***

### validation_method

```php
public ?string $validation_method
```

***

### analysis

```php
public ?\AlexisPPLIN\SendcloudV3\Models\AddressValidation\Analysis $analysis
```

***

## Methods

### __construct

```php
public __construct(mixed $recommended, mixed $address = null, value-of<\AlexisPPLIN\SendcloudV3\Endpoints\AddressValidation::VALIDATIONS_METHOD>|null $validation_method = null, mixed $analysis = null): mixed
```

**Parameters:**

| Parameter            | Type                                                                                         | Description                                                                                                                                                       |
|----------------------|----------------------------------------------------------------------------------------------|-------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| `$recommended`       | **mixed**                                                                                    | Indicates if the address is recommended after validation.                                                                                                         |
| `$address`           | **mixed**                                                                                    | The validated address details. In case null is returned, the address is not valid and the details are not available (f.e.the address validator is not available). |
| `$validation_method` | **value-of<\AlexisPPLIN\SendcloudV3\Endpoints\AddressValidation::VALIDATIONS_METHOD>\|null** | The method used for address validation, null stands for the Sendcloud address carrier optimizer validation method.                                                |
| `$analysis`          | **mixed**                                                                                    | Analysis details of the address validation process. In case null is returned no analysis details are available.                                                   |

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
