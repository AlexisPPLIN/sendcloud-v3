# SendcloudRequestException

Thrown when Sendcloud API return an error

***

* Full name: `\AlexisPPLIN\SendcloudV3\Exceptions\SendcloudRequestException`
* Parent class: [`Exception`](../../../Exception.md)

## Constants

| Constant                       | Visibility | Type | Value |
|--------------------------------|------------|------|-------|
| `CODE_UNKNOWN`                 | public     |      | 0     |
| `CODE_CONNECTION_FAILED`       | public     |      | 1     |
| `CODE_AUTHENTIFICATION_FAILED` | public     |      | 2     |
| `CODE_INVALID`                 | public     |      | 3     |

## Properties

### sendcloudCode

```php
protected ?string $sendcloudCode
```

***

### sendcloudSource

```php
protected ?array $sendcloudSource
```

***

## Methods

### __construct

```php
public __construct(?string $message = null, ?int $code = null, ?\Throwable $previous = null, ?string $sendcloudCode = null, array $sendcloudSource = null): mixed
```

**Parameters:**

| Parameter          | Type            | Description |
|--------------------|-----------------|-------------|
| `$message`         | **?string**     |             |
| `$code`            | **?int**        |             |
| `$previous`        | **?\Throwable** |             |
| `$sendcloudCode`   | **?string**     |             |
| `$sendcloudSource` | **array**       |             |

***

### fromResponse

Checks response for errors code and throws exception if needed

```php
public static fromResponse(\Psr\Http\Message\ResponseInterface $response, mixed $expected_status_code = 200): void
```

* This method is **static**.
**Parameters:**

| Parameter               | Type                                    | Description                           |
|-------------------------|-----------------------------------------|---------------------------------------|
| `$response`             | **\Psr\Http\Message\ResponseInterface** |                                       |
| `$expected_status_code` | **mixed**                               | Expected HTTP status code in response |

**Throws:**

- [`SendcloudRequestException`]()

***

### fromException

Build custom exception from others exceptions

```php
public static fromException(\Throwable $exception): never
```

* This method is **static**.
**Parameters:**

| Parameter    | Type           | Description |
|--------------|----------------|-------------|
| `$exception` | **\Throwable** |             |

**Throws:**

- [`SendcloudRequestException`]()

***
