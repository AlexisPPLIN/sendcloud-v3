# Sendcloud

![Packagist Version](https://img.shields.io/packagist/v/alexispplin/sendcloud-v3?link=https%3A%2F%2Fpackagist.org%2Fpackages%2Falexispplin%2Fsendcloud-v3)
![License](https://img.shields.io/github/license/AlexisPPLIN/sendcloud-v3)

## 📦 About

Implementation of Sendcloud v3 API for PHP

> [!NOTE]
> For v2 users, use [Webador/sendcloud](https://github.com/Webador/sendcloud)
> (which this library is heavily inspired by)

## ⚙️ Requirements

- PHP 8.2+
- PSR7 & PSR17 implementation

## 🛠️ Installation

```bash
composer require alexispplin/sendcloud-v3
```

> [!NOTE]
> This library uses [HTTPlug](https://docs.php-http.org/en/latest/httplug/users.html)

For this lib to work, you will need to install a PSR7 & PSR17 implementation.  
Check the full documentation here : https://docs.php-http.org/en/latest/httplug/users.html

For example :
```bash
composer require symfony/http-client nyholm/psr7
```

## 🌐 Supported Endpoints

- [Orders](https://sendcloud.dev/api/v3/orders)

## 💡 Quick start

```php
<?php
use AlexisPPLIN\SendcloudV3\Endpoints\Orders;

// Create client

$orders = new Orders(
    publicKey: /* YOUR PUBLIC KEY */,
    secretKey: /* YOUR SECRET KEY */,
    partnerId: /* (optional) YOUR PARTNER ID */
);

// Retrieve an order

$order = $orders->getOrder(id: 1);
```

## 🤝 Contributing

Contributions are welcome! Please follow these steps:
1. Fork the repository
2. Create a branch for your feature
3. Commit your changes
5. Create a Pull Request to the main branch

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
