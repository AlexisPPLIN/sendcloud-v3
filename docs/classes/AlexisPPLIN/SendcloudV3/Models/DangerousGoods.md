# DangerousGoods

Hazardous materials information for items.

***

* Full name: `\AlexisPPLIN\SendcloudV3\Models\DangerousGoods`
* This class implements:
  [`\AlexisPPLIN\SendcloudV3\Models\ModelInterface`](./ModelInterface)

**See Also:**

* https://sendcloud.dev/api/v3/orders/retrieve-an-order#response-data-order-details-order-items-items-dangerous-goods

## Constants

| Constant                          | Visibility | Type | Value                               |
|-----------------------------------|------------|------|-------------------------------------|
| `REGULATION_SETS`                 | public     |      | ['IATA', 'ADR']                     |
| `UNITS_OF_MESUREMENT`             | public     |      | ['kg', 'g', 'l', 'ml']              |
| `COMMODITY_REGULATED_LEVEL_CODES` | public     |      | ['LQ', 'EQ']                        |
| `TRANSPORTATION_MODES`            | public     |      | ['Highway', 'Ground', 'PAX', 'CAO'] |
| `ADR_PACKING_GROUPS`              | public     |      | ['I', 'II', 'III']                  |
| `WEIGHT_TYPES`                    | public     |      | ['net', 'gross']                    |

## Properties

### regulation_set

```php
public string $regulation_set
```

***

### unit_of_measurement

```php
public string $unit_of_measurement
```

***

### commodity_regulated_level_code

```php
public string $commodity_regulated_level_code
```

***

### transportation_mode

```php
public string $transportation_mode
```

***

### weight_type

```php
public string $weight_type
```

***

### adr_packing_group_letter

```php
public string $adr_packing_group_letter
```

***

### chemical_record_identifier

```php
public ?string $chemical_record_identifier
```

***

### packaging_type_quantity

```php
public ?string $packaging_type_quantity
```

***

### packaging_type

```php
public ?string $packaging_type
```

***

### packaging_instruction_code

```php
public ?string $packaging_instruction_code
```

***

### id_number

```php
public ?string $id_number
```

***

### class_division_number

```php
public ?string $class_division_number
```

***

### quantity

```php
public ?string $quantity
```

***

### proper_shipping_name

```php
public ?string $proper_shipping_name
```

***

### emergency_contact_name

```php
public ?string $emergency_contact_name
```

***

### emergency_contact_phone

```php
public ?string $emergency_contact_phone
```

***

### local_proper_shipping_name

```php
public ?string $local_proper_shipping_name
```

***

### transport_category

```php
public ?string $transport_category
```

***

### tunnel_restriction_code

```php
public ?string $tunnel_restriction_code
```

***

## Methods

### __construct

```php
public __construct(value-of<self::REGULATION_SETS> $regulation_set, value-of<self::UNITS_OF_MESUREMENT> $unit_of_measurement, value-of<self::COMMODITY_REGULATED_LEVEL_CODES> $commodity_regulated_level_code, value-of<self::TRANSPORTATION_MODES> $transportation_mode, value-of<self::WEIGHT_TYPES> $weight_type, value-of<self::ADR_PACKING_GROUPS> $adr_packing_group_letter, ?string $chemical_record_identifier = null, ?string $packaging_type_quantity = null, ?string $packaging_type = null, ?string $packaging_instruction_code = null, ?string $id_number = null, ?string $class_division_number = null, ?string $quantity = null, ?string $proper_shipping_name = null, ?string $emergency_contact_name = null, ?string $emergency_contact_phone = null, ?string $local_proper_shipping_name = null, ?string $transport_category = null, ?string $tunnel_restriction_code = null): mixed
```

**Parameters:**

| Parameter                         | Type                                                | Description                                        |
|-----------------------------------|-----------------------------------------------------|----------------------------------------------------|
| `$regulation_set`                 | **value-of<self::REGULATION_SETS>**                 | Regulation set governing the dangerous goods       |
| `$unit_of_measurement`            | **value-of<self::UNITS_OF_MESUREMENT>**             | Unit of measurement for dangerous goods quantity   |
| `$commodity_regulated_level_code` | **value-of<self::COMMODITY_REGULATED_LEVEL_CODES>** | Commodity regulated level code                     |
| `$transportation_mode`            | **value-of<self::TRANSPORTATION_MODES>**            | Mode of transportation                             |
| `$weight_type`                    | **value-of<self::WEIGHT_TYPES>**                    | Type of weight measurement                         |
| `$adr_packing_group_letter`       | **value-of<self::ADR_PACKING_GROUPS>**              | ADR packing group classification                   |
| `$chemical_record_identifier`     | **?string**                                         | Chemical record identifier for the dangerous goods |
| `$packaging_type_quantity`        | **?string**                                         | Quantity of packaging type                         |
| `$packaging_type`                 | **?string**                                         | Type of packaging used                             |
| `$packaging_instruction_code`     | **?string**                                         | Packaging instruction code                         |
| `$id_number`                      | **?string**                                         | UN identification number                           |
| `$class_division_number`          | **?string**                                         | Hazard class and division number                   |
| `$quantity`                       | **?string**                                         | Quantity of dangerous goods                        |
| `$proper_shipping_name`           | **?string**                                         | Proper shipping name as defined by regulations     |
| `$emergency_contact_name`         | **?string**                                         | Name of emergency contact person                   |
| `$emergency_contact_phone`        | **?string**                                         | Phone number of emergency contact                  |
| `$local_proper_shipping_name`     | **?string**                                         | Local proper shipping name                         |
| `$transport_category`             | **?string**                                         | Transport category for ADR regulations             |
| `$tunnel_restriction_code`        | **?string**                                         | Tunnel restriction code                            |

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
