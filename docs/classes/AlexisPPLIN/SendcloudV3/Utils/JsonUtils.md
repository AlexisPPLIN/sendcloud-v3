# JsonUtils

Utility methods for json handling

***

* Full name: `\AlexisPPLIN\SendcloudV3\Utils\JsonUtils`

## Methods

### addIfNotNull

Used in {@see ModelInterface::fromData()} to only add to json if the value is not null

```php
public static addIfNotNull(array& $json, mixed $key, mixed $value): void
```

* This method is **static**.
**Parameters:**

| Parameter | Type      | Description                          |
|-----------|-----------|--------------------------------------|
| `$json`   | **array** | Array to be converted into json      |
| `$key`    | **mixed** | Key name to use if value is not null |
| `$value`  | **mixed** |                                      |

***
