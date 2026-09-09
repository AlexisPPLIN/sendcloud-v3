# CustomsDetails

Customs information required for international shipments.

***

* Full name: `\AlexisPPLIN\SendcloudV3\Models\Order\CustomsDetails`
* This class implements:
  [`\AlexisPPLIN\SendcloudV3\Models\ModelInterface`](../ModelInterface)

**See Also:**

* https://sendcloud.dev/api/v3/orders/retrieve-an-order#response-data-customs-details-one-of-0

## Constants

| Constant         | Visibility | Type | Value                                                               |
|------------------|------------|------|---------------------------------------------------------------------|
| `SHIPMENT_TYPES` | public     |      | ['gift', 'commercial_goods', 'commercial_sample', 'returned_goods'] |
| `EXPORT_TYPES`   | public     |      | ['private', 'commercial_b2c', 'commercial_b2b']                     |

## Properties

### commercial_invoice_number

```php
public ?string $commercial_invoice_number
```

***

### shipment_type

```php
public ?string $shipment_type
```

***

### export_type

```php
public ?string $export_type
```

***

### tax_numbers

```php
public ?\AlexisPPLIN\SendcloudV3\Models\Tax\TaxNumbers $tax_numbers
```

***

## Methods

### __construct

```php
public __construct(mixed $commercial_invoice_number = null, value-of<self::SHIPMENT_TYPES> $shipment_type = null, value-of<self::EXPORT_TYPES> $export_type = null, mixed $tax_numbers = null): mixed
```

**Parameters:**

| Parameter                    | Type                               | Description                                                                                                                                                                                                                                                                                                                                                                                                                                |
|------------------------------|------------------------------------|--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| `$commercial_invoice_number` | **mixed**                          | Your own commercial invoice number                                                                                                                                                                                                                                                                                                                                                                                                         |
| `$shipment_type`             | **value-of<self::SHIPMENT_TYPES>** | Indicates the purpose or reason behind exporting the items. This classification helps customs authorities determine the applicable regulations, taxes, and duties.                                                                                                                                                                                                                                                                         |
| `$export_type`               | **value-of<self::EXPORT_TYPES>**   | Export type documentation serves to categorize international shipments into three primary classifications:
- Private exports, intended for personal use
- Commercial B2C exports, directed towards individual consumers
- Commercial B2B exports, involving business-to-business transactions These distinctions facilitate adherence to regulatory requirements and ensure the orderly movement of goods across international boundaries. |
| `$tax_numbers`               | **mixed**                          | Identification numbers and codes related to sender, receiver and importer of record provider.                                                                                                                                                                                                                                                                                                                                              |

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
