# Artisan Ping

[![Latest Version on Packagist](https://img.shields.io/packagist/v/maxkostinevich/artisan-ping.svg?style=flat-square)](https://packagist.org/packages/maxkostinevich/artisan-ping)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/maxkostinevich/artisan-ping/run-tests?label=tests)](https://github.com/maxkostinevich/artisan-ping/actions?query=workflow%3ATests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/maxkostinevich/artisan-ping.svg?style=flat-square)](https://packagist.org/packages/maxkostinevich/artisan-ping)

---

![Artisan Ping](https://user-images.githubusercontent.com/10295466/104108964-2a3e3480-52da-11eb-8f26-cc83c51b986a.png)

Make HTTP requests using Laravel artisan `ping:http` command.

For example:

```
php artisan ping:http --url=https://example.com --method=GET
```

or

```
php artisan ping:http --url=https://example.com --method=POST --headers='x-api-key=123456' --headers='another-key-name=key-value' --data='name=John Doe' --data='email=john@example.com'
```

## Supported options

| Option    | Description                                                  | Default |
| --------- | ------------------------------------------------------------ | ------- |
| --url     | Required. URL to make the HTTP request to.                   |         |
| --method  | HTTP request method (GET, POST, DELETE, PATCH)               | POST    |
| --retry   | Number of retries                                            | 1       |
| --timeout | Request timeout                                              | 5       |
| --headers | Headers to pass. Multiple values allowed.                    |         |
| --data    | Data to pass. Multiple values allowed.                       |         |
| --queue   | Doesn't expect any values. Whether the job should be queued. | false   |

## Installation

You can install the package via composer:

```bash
composer require maxkostinevich/artisan-ping
```

## Testing

```bash
composer test
```

## Credits

-   [Max Kostinevich](https://github.com/maxkostinevich)
-   [All Contributors](../../contributors)

---

### [MIT License](https://opensource.org/licenses/MIT)

(c) 2020 [Max Kostinevich](https://maxkostinevich.com) - All rights reserved.
