# DateUtils

Utility methods for date handling

***

* Full name: `\AlexisPPLIN\SendcloudV3\Utils\DateUtils`

## Constants

| Constant      | Visibility | Type | Value              |
|---------------|------------|------|--------------------|
| `DATE_FORMAT` | public     |      | "Y-m-d\\TH:i:s.uP" |

## Methods

### iso8601ToDateTime

Parse ISO 8601 date into an DateTimeImmutable object

```php
public static iso8601ToDateTime(string $iso8601): \DateTimeImmutable
```

* This method is **static**.
**Parameters:**

| Parameter  | Type       | Description |
|------------|------------|-------------|
| `$iso8601` | **string** |             |

**Throws:**

- [`DateParsingException`](../Exceptions/DateParsingException.md)

***

### dateTimeToIso8601

Convert DateTimeImmutable object into an ISO 8601 date

```php
public static dateTimeToIso8601(\DateTimeImmutable $date): string
```

* This method is **static**.
**Parameters:**

| Parameter | Type                   | Description |
|-----------|------------------------|-------------|
| `$date`   | **\DateTimeImmutable** |             |

**Throws:**

- [`DateParsingException`](../Exceptions/DateParsingException.md)

***
