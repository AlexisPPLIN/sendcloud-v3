# ClientFactory

***

* Full name: `\AlexisPPLIN\SendcloudV3\Factory\ClientFactory`

## Methods

### create

```php
public static create(string $base_uri, string $user, string $pass, ?string $partnerId = null, \Http\Client\Common\Plugin[] $plugins = [], ?\Http\Client\HttpClient $client = null): \Http\Client\Common\PluginClient
```

* This method is **static**.
**Parameters:**

| Parameter    | Type                             | Description |
|--------------|----------------------------------|-------------|
| `$base_uri`  | **string**                       |             |
| `$user`      | **string**                       |             |
| `$pass`      | **string**                       |             |
| `$partnerId` | **?string**                      |             |
| `$plugins`   | **\Http\Client\Common\Plugin[]** |             |
| `$client`    | **?\Http\Client\HttpClient**     |             |

**Throws:**

- [`NotFoundException`](../../../Http/Discovery/Exception/NotFoundException)
- [`InvalidArgumentException`](../../../InvalidArgumentException)

***
