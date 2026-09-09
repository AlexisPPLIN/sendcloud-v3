# PaymentDetails

Node for everything about payments and money

***

* Full name: `\AlexisPPLIN\SendcloudV3\Models\PaymentDetails`
* This class implements:
  [`\AlexisPPLIN\SendcloudV3\Models\ModelInterface`](./ModelInterface.md)

**See Also:**

* https://sendcloud.dev/api/v3/orders/retrieve-an-order#response-data-payment-details

## Properties

### total_price

```php
public \AlexisPPLIN\SendcloudV3\Models\Price $total_price
```

***

### status

```php
public \AlexisPPLIN\SendcloudV3\Models\Status $status
```

***

### is_cash_on_delivery

```php
public ?bool $is_cash_on_delivery
```

***

### subtotal_price

```php
public ?\AlexisPPLIN\SendcloudV3\Models\Price $subtotal_price
```

***

### estimated_shipping_price

```php
public ?\AlexisPPLIN\SendcloudV3\Models\Price $estimated_shipping_price
```

***

### estimated_tax_price

```php
public ?\AlexisPPLIN\SendcloudV3\Models\Price $estimated_tax_price
```

***

### invoice_date

```php
public ?string $invoice_date
```

***

### discount_granted

```php
public ?\AlexisPPLIN\SendcloudV3\Models\Price $discount_granted
```

***

### insurance_costs

```php
public ?\AlexisPPLIN\SendcloudV3\Models\Price $insurance_costs
```

***

### freight_costs

```php
public ?\AlexisPPLIN\SendcloudV3\Models\Price $freight_costs
```

***

### other_costs

```php
public ?\AlexisPPLIN\SendcloudV3\Models\Price $other_costs
```

***

## Methods

### __construct

```php
public __construct(mixed $total_price, mixed $status, mixed $is_cash_on_delivery = null, mixed $subtotal_price = null, mixed $estimated_shipping_price = null, mixed $estimated_tax_price = null, mixed $invoice_date = null, mixed $discount_granted = null, mixed $insurance_costs = null, mixed $freight_costs = null, mixed $other_costs = null): mixed
```

**Parameters:**

| Parameter                   | Type      | Description                                                                       |
|-----------------------------|-----------|-----------------------------------------------------------------------------------|
| `$total_price`              | **mixed** | Total value in the shop currency                                                  |
| `$status`                   | **mixed** | Payment status of an order                                                        |
| `$is_cash_on_delivery`      | **mixed** | Indicates if customers will pay the full order amount upon delivery of the order  |
| `$subtotal_price`           | **mixed** | Subtotal value in the shop currency                                               |
| `$estimated_shipping_price` | **mixed** | Sum of all shipping costs                                                         |
| `$estimated_tax_price`      | **mixed** | Sum of all estimated taxes for the order                                          |
| `$invoice_date`             | **mixed** | The date when invoice was issued.                                                 |
| `$discount_granted`         | **mixed** | Discount granted on the total order excluding any possible discounts on shipping. |
| `$insurance_costs`          | **mixed** | Amount the order is insured for                                                   |
| `$freight_costs`            | **mixed** | Shipping cost of the order after discounts have been applied.                     |
| `$other_costs`              | **mixed** | Any other costs (for eg, wrapping costs) associated with the order                |

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
