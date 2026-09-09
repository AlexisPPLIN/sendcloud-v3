# Orders

The Orders API allows you to manage orders within Sendcloud.

***

* Full name: `\AlexisPPLIN\SendcloudV3\Endpoints\Orders`
* Parent class: [`\AlexisPPLIN\SendcloudV3\Client`](../Client.md)

**See Also:**

* https://sendcloud.dev/api/v3/orders/index - Sendcloud documentation

## Methods

### getOrder

Retrieve an order
Find a specific order by its order ID.

```php
public getOrder(int $id): \AlexisPPLIN\SendcloudV3\Models\Order\Order
```

**Parameters:**

| Parameter | Type    | Description |
|-----------|---------|-------------|
| `$id`     | **int** |             |

**Throws:**

- [`SendcloudRequestException`](../Exceptions/SendcloudRequestException.md)

**See Also:**

* https://sendcloud.dev/api/v3/orders/retrieve-an-order

***

### getOrders

Retrieve a list of orders
Get a list of orders filtered by integration, order number, order ID, order status, creation date, and update date. You can also optionally sort the results and pass a cursor value.

```php
public getOrders(?int[] $integration = null, mixed $order_number = null, mixed $order_id = null, mixed $status = null, mixed $order_created_at = null, mixed $order_created_at_min = null, mixed $order_created_at_max = null, mixed $order_updated_at = null, mixed $order_updated_at_min = null, mixed $order_updated_at_max = null, mixed $sort = null, mixed $page_size = null, mixed $cursor = null): \AlexisPPLIN\SendcloudV3\Models\Order\Order[]
```

**Parameters:**

| Parameter               | Type       | Description                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        |
|-------------------------|------------|----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| `$integration`          | **?int[]** | Filter orders by one or more integration IDs.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      |
| `$order_number`         | **mixed**  | Filter orders by a specific order number. The filtering is case insensitive.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       |
| `$order_id`             | **mixed**  | Filter orders by a specific order id. The filtering is case insensitive.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           |
| `$status`               | **mixed**  | Filter orders based on their status=. The filtering is case insensitive.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           |
| `$order_created_at`     | **mixed**  | Find orders that were created on a specific date.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  |
| `$order_created_at_min` | **mixed**  | Find orders that were created at or after a specific date.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         |
| `$order_created_at_max` | **mixed**  | Find orders that were created at or after a specific date.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         |
| `$order_updated_at`     | **mixed**  | Find orders that were created at or after a specific date.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         |
| `$order_updated_at_min` | **mixed**  | Find orders that were created at or after a specific date.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         |
| `$order_updated_at_max` | **mixed**  | Find orders that were created at or after a specific date.                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         |
| `$sort`                 | **mixed**  | Sort the orders in the response by using one or more of the following values:
- integration: Sort by the integration ID of the retrieved orders; to sort in descending order, use -integration
- order_number: Sort by the order number of the retrieved orders; to sort in descending order, use -order_number.
- order_created_at: Sort by the date of an order creation of the retrieved orders; to sort in descending order, use -order_created_at
- order_updated_at: Sort by the date of an order update of the retrieved orders; to sort in descending order, use -order_updated_at
- pk: Sort by the ID (autogenerated internal ID) of the retrieved orders; to sort in descending order, use -pk

Additional information about this query:
- Any valid combination of the above values is supported, e.g. sort=integration,-order_created_at.
- In case of conflicting sort values, e.g. /?sort=integration,-integration, the conflicting value will be ignored.
- If the sort query parameter is not set, the sorting of the retrieved orders will default to -pk.
- If an unsupported sort value is provided, the results will be sorted by the default (-pk).
Example:
"-order_number" |
| `$page_size`            | **mixed**  | The maximum number of results to be returned per page                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              |
| `$cursor`               | **mixed**  | The cursor query string is used as the pivot value to filter results. If no value is provided, the first page of results will be returned. To get this value, you must encode the offset, reverse and position into a base64 string.
There are 3 possible parameters to encode:
- o: Offset
- r: Reverse
- p: Position
For example, r=1&p=300 encoded as a base64 string would be cj0xJnA9MzAw. The query string would then be cursor=cj0xJnA9MzAw.

Example:
"cj0xJnA9MzAw"                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       |

**Throws:**

- [`SendcloudRequestException`](../Exceptions/SendcloudRequestException.md)

**See Also:**

* https://sendcloud.dev/api/v3/orders/retrieve-a-list-of-orders

***

### updateOrder

Update an order
Partially update some fields of an order.

```php
public updateOrder(\AlexisPPLIN\SendcloudV3\Models\Order\Order $order): int
```

**Parameters:**

| Parameter | Type                                            | Description |
|-----------|-------------------------------------------------|-------------|
| `$order`  | **\AlexisPPLIN\SendcloudV3\Models\Order\Order** |             |

**Return Value:**

Sendcloud order ID

**Throws:**

- [`SendcloudRequestException`](../Exceptions/SendcloudRequestException.md)
- [`InvalidArgumentException`](../../../InvalidArgumentException.md)

**See Also:**

* https://sendcloud.dev/api/v3/orders/update-an-order

***

### createOrder

Create/Update orders in batch
Use this endpoint to insert orders into a Sendcloud API integration.

```php
public createOrder(\AlexisPPLIN\SendcloudV3\Models\Order\Order[] $orders): int[]
```

**Parameters:**

| Parameter | Type                                              | Description |
|-----------|---------------------------------------------------|-------------|
| `$orders` | **\AlexisPPLIN\SendcloudV3\Models\Order\Order[]** |             |

**Return Value:**

Sendcloud orders IDs

**Throws:**

- [`SendcloudRequestException`](../Exceptions/SendcloudRequestException.md)

**See Also:**

* https://sendcloud.dev/api/v3/orders/create-update-orders-in-batch

***

### deleteOrder

Delete an order
Delete an order by its unique id.

```php
public deleteOrder(int $id): void
```

**Parameters:**

| Parameter | Type    | Description |
|-----------|---------|-------------|
| `$id`     | **int** |             |

**Throws:**

- [`SendcloudRequestException`](../Exceptions/SendcloudRequestException.md)

**See Also:**

* https://sendcloud.dev/api/v3/orders/delete-an-order

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
