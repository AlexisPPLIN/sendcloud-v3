# CustomerDetails

Node for an information about customer

***

* Full name: `\AlexisPPLIN\SendcloudV3\Models\Customer\CustomerDetails`
* This class implements:
  [`\AlexisPPLIN\SendcloudV3\Models\ModelInterface`](../ModelInterface.md)

**See Also:**

* https://sendcloud.dev/api/v3/orders/retrieve-an-order#response-data-customer-details

## Properties

### name

```php
public string $name
```

***

### phone_number

```php
public ?string $phone_number
```

***

### email

```php
public ?string $email
```

***

## Methods

### __construct

```php
public __construct(mixed $name, mixed $phone_number = null, mixed $email = null): mixed
```

**Parameters:**

| Parameter       | Type      | Description                  |
|-----------------|-----------|------------------------------|
| `$name`         | **mixed** | Name of the customer         |
| `$phone_number` | **mixed** | Phone number of the customer |
| `$email`        | **mixed** | Email of the customer        |

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
