# OrderItems

***

* Full name: `\AlexisPPLIN\SendcloudV3\Models\Order\OrderItems`
* This class implements:
  [`\AlexisPPLIN\SendcloudV3\Models\ModelInterface`](../ModelInterface.md)

**See Also:**

* https://sendcloud.dev/api/v3/orders/retrieve-an-order#response-data-order-details-order-items

## Properties

### name

```php
public string $name
```

***

### quantity

```php
public int $quantity
```

***

### total_price

```php
public \AlexisPPLIN\SendcloudV3\Models\Price $total_price
```

***

### item_id

```php
public ?string $item_id
```

***

### product_id

```php
public ?string $product_id
```

***

### variant_id

```php
public ?string $variant_id
```

***

### image_url

```php
public ?string $image_url
```

***

### description

```php
public ?string $description
```

***

### sku

```php
public ?string $sku
```

***

### hs_code

```php
public ?string $hs_code
```

***

### country_of_origin

```php
public ?string $country_of_origin
```

***

### properties

```php
public ?array $properties
```

***

### unit_price

```php
public ?\AlexisPPLIN\SendcloudV3\Models\Price $unit_price
```

***

### measurement

```php
public ?\AlexisPPLIN\SendcloudV3\Models\Measurement\Measurement $measurement
```

***

### ean

```php
public ?string $ean
```

***

### delivery_dates

```php
public ?\AlexisPPLIN\SendcloudV3\Models\Delivery\DeliveryDates $delivery_dates
```

***

### mid_code

```php
public ?string $mid_code
```

***

### material_content

```php
public ?string $material_content
```

***

### intended_use

```php
public ?string $intended_use
```

***

### dangerous_goods

```php
public ?\AlexisPPLIN\SendcloudV3\Models\DangerousGoods $dangerous_goods
```

***

### dds_reference

```php
public ?string $dds_reference
```

***

### taric_code

```php
public ?string $taric_code
```

***

## Methods

### __construct

```php
public __construct(mixed $name, mixed $quantity, mixed $total_price, mixed $item_id = null, mixed $product_id = null, mixed $variant_id = null, mixed $image_url = null, mixed $description = null, mixed $sku = null, mixed $hs_code = null, mixed $country_of_origin = null, array<string,string> $properties = null, mixed $unit_price = null, mixed $measurement = null, mixed $ean = null, mixed $delivery_dates = null, mixed $mid_code = null, mixed $material_content = null, mixed $intended_use = null, mixed $dangerous_goods = null, mixed $dds_reference = null, mixed $taric_code = null): mixed
```

**Parameters:**

| Parameter            | Type                     | Description                                                                                                                                                                                                                                                                                                                        |
|----------------------|--------------------------|------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| `$name`              | **mixed**                | The name of ordered product                                                                                                                                                                                                                                                                                                        |
| `$quantity`          | **mixed**                | The quantity field on an order item represents the number of units of a product a customer has ordered.                                                                                                                                                                                                                            |
| `$total_price`       | **mixed**                | The total price for this item line, after any item-level discounts, in the shop’s currency.
- It should reflect unit_price × quantity, minus discounts (if applicable).
- [Sendcloud platform mapping] Not displayed in the Sendcloud platform. Instead, the Sendcloud platform calculates its own total as unit_price × quantity. |
| `$item_id`           | **mixed**                | Order Item external ID in shop system                                                                                                                                                                                                                                                                                              |
| `$product_id`        | **mixed**                | Shop system product ID                                                                                                                                                                                                                                                                                                             |
| `$variant_id`        | **mixed**                | Shop system variant ID of the product                                                                                                                                                                                                                                                                                              |
| `$image_url`         | **mixed**                | A url to an image representing the given product (or variation of the product if applicable). When providing image_url the product_id is required for image to be correctly displayed.                                                                                                                                             |
| `$description`       | **mixed**                | The product description                                                                                                                                                                                                                                                                                                            |
| `$sku`               | **mixed**                | Stock keeping unit - used by retailers to assign to products, in order to keep track of stock levels internally.                                                                                                                                                                                                                   |
| `$hs_code`           | **mixed**                | The Harmonized System (HS) code is a standardized numerical system used to classify traded products in international commerce                                                                                                                                                                                                      |
| `$country_of_origin` | **mixed**                | Country code of origin of the item in ISO 3166-1 alpha-2                                                                                                                                                                                                                                                                           |
| `$properties`        | **array<string,string>** | Any custom user-defined properties of order item or product                                                                                                                                                                                                                                                                        |
| `$unit_price`        | **mixed**                | The price of a single item in the shop’s currency before discounts have been applied.
- [Sendcloud platform mapping] This value is shown directly in the Unit value field in the Sendcloud platform                                                                                                                                |
| `$measurement`       | **mixed**                | This object provides essential information for accurate packing, shipping, and inventory management                                                                                                                                                                                                                                |
| `$ean`               | **mixed**                | European standardised number for an article, EAN-13                                                                                                                                                                                                                                                                                |
| `$delivery_dates`    | **mixed**                | Defined delivery dates                                                                                                                                                                                                                                                                                                             |
| `$mid_code`          | **mixed**                | MID code is short for Manufacturer's Identification code and must be shown on the commercial invoice. It's used as an alternative to the full name and address of a manufacturer, shipper or exporter and is always required for U.S. formal customs entries.                                                                      |
| `$material_content`  | **mixed**                | A description of materials of the order content.                                                                                                                                                                                                                                                                                   |
| `$intended_use`      | **mixed**                | Intended use of the order contents. The intended use may be personal or commercial.                                                                                                                                                                                                                                                |
| `$dangerous_goods`   | **mixed**                | Hazardous materials information for items.                                                                                                                                                                                                                                                                                         |
| `$dds_reference`     | **mixed**                | The Due Diligence Statement (DDS) reference number assigned under the EU Deforestation Regulation (EUDR). Each DDS submitted to the EU information system is assigned a verification number.                                                                                                                                       |
| `$taric_code`        | **mixed**                | The TARIC (Integrated Tariff of the European Communities) code used to classify traded goods for customs purposes within the EU.                                                                                                                                                                                                   |

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
