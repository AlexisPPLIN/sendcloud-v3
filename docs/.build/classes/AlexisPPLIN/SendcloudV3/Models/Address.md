# Address

Sendcloud Address object

***

* Full name: `\AlexisPPLIN\SendcloudV3\Models\Address`
* This class implements:
  [`\AlexisPPLIN\SendcloudV3\Models\ModelInterface`](./ModelInterface)

**See Also:**

* https://sendcloud.dev/api/v3/orders/retrieve-an-order#response-data-billing-address

## Properties

### name

```php
public string $name
```

***

### address_line_1

```php
public string $address_line_1
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

### country_code

```php
public string $country_code
```

***

### company_name

```php
public ?string $company_name
```

***

### house_number

```php
public ?string $house_number
```

***

### address_line_2

```php
public ?string $address_line_2
```

***

### po_box

```php
public ?string $po_box
```

***

### state_province_code

```php
public ?string $state_province_code
```

***

### email

```php
public ?string $email
```

***

### phone_number

```php
public ?string $phone_number
```

***

## Methods

### __construct

```php
public __construct(mixed $name, mixed $address_line_1, mixed $postal_code, mixed $city, mixed $country_code, mixed $company_name = null, mixed $house_number = null, mixed $address_line_2 = null, mixed $po_box = null, mixed $state_province_code = null, mixed $email = null, mixed $phone_number = null): mixed
```

**Parameters:**

| Parameter              | Type      | Description                                                                                                                                                                                                                                             |
|------------------------|-----------|---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| `$name`                | **mixed** | Name of the person associated with the address                                                                                                                                                                                                          |
| `$address_line_1`      | **mixed** | First line of the address                                                                                                                                                                                                                               |
| `$postal_code`         | **mixed** | Zip code of the address                                                                                                                                                                                                                                 |
| `$city`                | **mixed** | City of the address                                                                                                                                                                                                                                     |
| `$country_code`        | **mixed** | The country code of the customer represented as ISO 3166-1 alpha-2                                                                                                                                                                                      |
| `$company_name`        | **mixed** | Name of the company associated with the address                                                                                                                                                                                                         |
| `$house_number`        | **mixed** | House number of the address                                                                                                                                                                                                                             |
| `$address_line_2`      | **mixed** | Additional address information, e.g. 2nd level                                                                                                                                                                                                          |
| `$po_box`              | **mixed** | Code required in case of PO Box or post locker delivery                                                                                                                                                                                                 |
| `$state_province_code` | **mixed** | The character state code of the customer represented as ISO 3166-2 code. This field is required for certain countries. See {@link https://sendcloud.dev/docs/shipments/international-shipping#required-fields-for-international-shipments} for details. |
| `$email`               | **mixed** | Email address of the person associated with the address                                                                                                                                                                                                 |
| `$phone_number`        | **mixed** | Phone number of the person associated with the address                                                                                                                                                                                                  |

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
