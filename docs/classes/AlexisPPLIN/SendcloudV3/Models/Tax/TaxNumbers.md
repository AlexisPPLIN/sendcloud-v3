# TaxNumbers

Identification numbers and codes related to sender, receiver and importer of record provider.

***

* Full name: `\AlexisPPLIN\SendcloudV3\Models\Tax\TaxNumbers`
* This class implements:
  [`\AlexisPPLIN\SendcloudV3\Models\ModelInterface`](../ModelInterface)

**See Also:**

* https://sendcloud.dev/api/v3/orders/retrieve-an-order#response-data-customs-details-one-of-0-tax-numbers-one-of-0

## Properties

### sender

```php
public array $sender
```

***

### receiver

```php
public array $receiver
```

***

### importer_of_record

```php
public array $importer_of_record
```

***

## Methods

### __construct

```php
public __construct(\AlexisPPLIN\SendcloudV3\Models\Tax\TaxNumber[] $sender, \AlexisPPLIN\SendcloudV3\Models\Tax\TaxNumber[] $receiver, \AlexisPPLIN\SendcloudV3\Models\Tax\TaxNumber[] $importer_of_record): mixed
```

**Parameters:**

| Parameter             | Type                                                | Description |
|-----------------------|-----------------------------------------------------|-------------|
| `$sender`             | **\AlexisPPLIN\SendcloudV3\Models\Tax\TaxNumber[]** |             |
| `$receiver`           | **\AlexisPPLIN\SendcloudV3\Models\Tax\TaxNumber[]** |             |
| `$importer_of_record` | **\AlexisPPLIN\SendcloudV3\Models\Tax\TaxNumber[]** |             |

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
