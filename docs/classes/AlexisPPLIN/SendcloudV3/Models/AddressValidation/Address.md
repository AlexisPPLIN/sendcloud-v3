# Address

Address Washer Request object model

***

* Full name: `\AlexisPPLIN\SendcloudV3\Models\AddressValidation\Address`
* This class implements:
  [`\AlexisPPLIN\SendcloudV3\Models\ModelInterface`](../ModelInterface.md)

**See Also:**

* https://sendcloud.dev/api/v3/address/validate#body-address

## Properties

### address_line_1

```php
public string $address_line_1
```

***

### house_number

```php
public string $house_number
```

***

### address_line_2

```php
public string $address_line_2
```

***

### postal_code

```php
public string $postal_code
```

***

### city

```php
public string $city
```

***

### state_province_code

```php
public string $state_province_code
```

***

### country_code

```php
public string $country_code
```

***

### po_box

```php
public ?string $po_box
```

***

## Methods

### __construct

```php
public __construct(mixed $address_line_1, mixed $house_number, mixed $address_line_2, mixed $postal_code, mixed $city, mixed $state_province_code, mixed $country_code, mixed $po_box = null): mixed
```

**Parameters:**

| Parameter              | Type      | Description                                                                                                                                                                                                                                             |
|------------------------|-----------|---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| `$address_line_1`      | **mixed** | First line of the address                                                                                                                                                                                                                               |
| `$house_number`        | **mixed** | House number of the address                                                                                                                                                                                                                             |
| `$address_line_2`      | **mixed** | Additional address information, e.g. 2nd level                                                                                                                                                                                                          |
| `$postal_code`         | **mixed** | Zip code of the address                                                                                                                                                                                                                                 |
| `$city`                | **mixed** | City of the address                                                                                                                                                                                                                                     |
| `$state_province_code` | **mixed** | The character state code of the customer represented as ISO 3166-2 code. This field is required for certain countries. See {@link https://sendcloud.dev/docs/shipments/international-shipping#required-fields-for-international-shipments} for details. |
| `$country_code`        | **mixed** | The country code of the customer represented as ISO 3166-1 alpha-2                                                                                                                                                                                      |
| `$po_box`              | **mixed** | Code required in case of PO Box or post locker delivery                                                                                                                                                                                                 |

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
