# Client

Generic HTTP client for all endpoints

***

* Full name: `\AlexisPPLIN\SendcloudV3\Client`

**See Also:**

* https://sendcloud.dev/docs/getting-started/how-to-create-your-api-keys - Generate your public and secret key

## Constants

| Constant       | Visibility | Type | Value                                |
|----------------|------------|------|--------------------------------------|
| `API_BASE_URL` | protected  |      | 'https://panel.sendcloud.sc/api/v3/' |

## Properties

### client

```php
protected \Http\Client\Common\HttpMethodsClient $client
```

***

### publicKey

```php
protected string $publicKey
```

***

### secretKey

```php
protected string $secretKey
```

***

### partnerId

```php
protected ?string $partnerId
```

***

## Methods

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

- [`NotFoundException`](../../Http/Discovery/Exception/NotFoundException.md)
- [`InvalidArgumentException`](../../InvalidArgumentException.md)

***
