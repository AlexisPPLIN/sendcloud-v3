# AddressValidation

This address validation endpoint allows you to validate shipping addresses before using them.

***

* Full name: `\AlexisPPLIN\SendcloudV3\Endpoints\AddressValidation`
* Parent class: [`\AlexisPPLIN\SendcloudV3\Client`](../Client.md)

**See Also:**

* https://sendcloud.dev/api/v3/address/validate - Sendcloud documentation

## Constants

| Constant             | Visibility | Type | Value    |
|----------------------|------------|------|----------|
| `VALIDATIONS_METHOD` | public     |      | ['here'] |

## Methods

### validate

This address validation endpoint allows you to validate shipping addresses before using them.

```php
public validate(mixed $address, mixed $carrier_code, array $validation_methods = []): \AlexisPPLIN\SendcloudV3\Models\AddressValidation\ValidationResponse
```

By validating addresses in advance, you can ensure that the shipping information is accurate and complete, reducing the risk of delivery issues and improving overall shipping efficiency.

Providing the carrier helps to tailor the address validation process according to specific carrier requirements.

Using additional validation methods can further enhance the accuracy of the address verification.

The default Sendcloud validation, will always be applied, has in 2 steps:
1. checks the address against the carrier limits (e.g. maximum length of the address line, existence of the postal code for the country, etc.). see also 

- **See:** .
2. optimizes (washes) the address to fit within the carrier limits. (e.g. deduplication of address lines, abbreviations, etc.)

**Parameters:**

| Parameter             | Type      | Description                                                                                                             |
|-----------------------|-----------|-------------------------------------------------------------------------------------------------------------------------|
| `$address`            | **mixed** | Address Washer Request object model                                                                                     |
| `$carrier_code`       | **mixed** | The code of the carrier to be used for the address validation. Only carriers available to your account can be used.     |
| `$validation_methods` | **array** | An array of optional address validation methods to be applied. The default Sendcloud validation will always be applied. |

**Throws:**

- [`SendcloudRequestException`](../Exceptions/SendcloudRequestException.md)

**See Also:**

* https://sendcloud.dev/api/v3/address/validate

***

## Inherited methods

### __construct

```php
public __construct(string $publicKey, string $secretKey, ?string $partnerId = null, string $apiBaseUrl = \self::API_BASE_URL, ?\Http\Client\HttpClient $client = null): mixed
```

**Parameters:**

| Parameter     | Type                         | Description |
|---------------|------------------------------|-------------|
| `$publicKey`  | **string**                   |             |
| `$secretKey`  | **string**                   |             |
| `$partnerId`  | **?string**                  |             |
| `$apiBaseUrl` | **string**                   |             |
| `$client`     | **?\Http\Client\HttpClient** |             |

**Throws:**

- [`NotFoundException`](../../../Http/Discovery/Exception/NotFoundException.md)
- [`InvalidArgumentException`](../../../InvalidArgumentException.md)

***
