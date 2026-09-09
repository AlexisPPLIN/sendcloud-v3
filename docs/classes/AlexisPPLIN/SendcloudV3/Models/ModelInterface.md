# ModelInterface

***

* Full name: `\AlexisPPLIN\SendcloudV3\Models\ModelInterface`
* Parent interfaces:
  `JsonSerializable`

## Methods

### fromData

```php
public static fromData(array $data): self
```

* This method is **static**.
**Parameters:**

| Parameter | Type      | Description |
|-----------|-----------|-------------|
| `$data`   | **array** |             |

**Throws:**

- [`ModelFromDataException`](../Exceptions/ModelFromDataException.md)
- [`DateParsingException`](../Exceptions/DateParsingException.md)

***

### jsonSerialize

```php
public jsonSerialize(): array
```

**Throws:**

- [`DateParsingException`](../Exceptions/DateParsingException.md)

***
